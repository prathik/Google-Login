<?php

# Logging in with Google accounts requires setting special identity, so this example shows how to do it.
require 'lightopenid/openid.php';
require 'config.php';

require(BASE_PATH."/wp-load.php");
try {
    # Change 'localhost' to your domain name.
    $openid = new LightOpenID(HOST);
    if(!$openid->mode) {
        if(isset($_GET['login'])) {
            $openid->identity = 'https://www.google.com/accounts/o8/id';
	    $openid->required = array('contact/email', 'namePerson/first', 'namePerson/last');
            header('Location: ' . $openid->authUrl());
        }

	//The login page UI
	require("login-page.php");

    } elseif($openid->mode == 'cancel') {
        echo 'User has canceled authentication!';
    } else {
	$attributes = $openid->getAttributes();

	//Insert $openid->validate()
	if(strpos($attributes["contact/email"], ONLY_ALLOW)!==false && !is_user_logged_in()) {	
    	    //echo 'User ' . ($openid->validate() ? $openid->identity . ' has ' : 'has not ') . 'logged in.';
	    	
	    if( email_exists($attributes["contact/email"]) ) {
		$user = get_user_by( 'email', $attributes["contact/email"] );
		wp_set_auth_cookie( $user->ID, true );
		wp_set_current_user( $user->ID );
	    }
	    else {
		    //echo "Email does not exist";
		    //var_dump($attributes);
		    $userdata = array();
		    $userdata['user_pass'] = "common_password";
		    $userdata['user_login'] = str_replace( "@inmobi.com", "", $attributes["contact/email"] );
		    $userdata['user_email'] = $attributes["contact/email"];
		    $userdata['first_name'] = $attributes["namePerson/first"];
		    $userdata['last_name'] = $attributes["namePerson/last"];
		    $userdata['role'] = "subscriber";
		    $user_id = wp_insert_user( $userdata );

		    wp_set_auth_cookie( $user_id, true );
		    wp_set_current_user( $user_id );
		    
	    }
		$site_url = site_url();
		var_dump($site_url);
		ob_start();
		header("Location: $site_url");
		ob_end_clean();
	} else if (is_user_logged_in()) {
		echo "User logged in";
	} else {
		require("invalid-email.php");
	}

    }
} catch(ErrorException $e) {
    echo $e->getMessage();
}
?>
