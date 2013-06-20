<?php
require 'config.php';
require(BASE_PATH."/wp-load.php");
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

        <link rel="stylesheet" href="boilerplate/css/normalize.css">
        <link rel="stylesheet" href="boilerplate/css/main.css">
        <script src="boilerplate/js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <h1>Login/Logout</h1>
	<?php if(! is_user_logged_in() ) { ?>
	<p>Please click <a href ="<?php echo site_url(); ?>">here</a> to login.</p>
	<p>Logging out here does not log you out from your Google Account. To logout from your Google Account click <a href="http://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=<?php echo site_url(); ?>">here</a>.</p>
	<?php } else { ?>
	<p>You are logged in, click <a href = "<?php echo wp_logout_url(); ?>">here</a> to logout.</p>
	<?php } ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="boilerplate/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="boilerplate/js/plugins.js"></script>
        <script src="boilerplate/js/main.js"></script>
    </body>
</html>
