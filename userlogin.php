<?php
require 'config.php';
require(BASE_PATH."/wp-load.php");
if(isset($_POST['log']) && isset($_POST['pwd']) && isset($_POST['login'])) {
	$cred['user_login'] = $_POST['log'];
	$cred['user_password'] = $_POST['pwd'];
	$cred['remember'] = true;
	$user = wp_signon($cred);
	if ( is_wp_error($user) )
   		$error = $user->get_error_message();
	else
		wp_redirect(site_url());
	
}
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Login/Logout</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="boilerplate/css/normalize.css">
        <link rel="stylesheet" href="boilerplate/css/main.css">
	<link rel="stylesheet" href="style.css">
        <script src="boilerplate/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
	<div id = "container">
        <h1>Login</h1>
	<?php if(! is_user_logged_in() ) { ?>
	<hr/>
	<form action="" method = "POST">
		<input type = "text" name = "log"><br /><br />
		<input type = "password" name = "pwd"><br /><br />
		<input type = "hidden" name = "login" value = "1">
		<button type = "submit">Login</button>
	</form>
	<hr/>
	<?php if(isset($error)) { echo '<p>'.$error.'</p>'; } ?>
	<?php } else { echo '<p>User logged in.</p>'; } ?>
	</div> <!-- #container -->
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="boilerplate/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="boilerplate/js/plugins.js"></script>
        <script src="boilerplate/js/main.js"></script>
    </body>
</html>
