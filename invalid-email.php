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

	<style type = "text/css">
		.demo-image {
			width: 750px;
			height: auto;
		}
	</style>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
        <h1>Invalid Email Id</h1>
	<p>Please use an <strong><?php echo ONLY_ALLOW; ?></strong> email id.</p>
	
	<h2>Why am I seeing this page?</h2>
	<p>Looks like you are logged into a Google Account that is not an Inmobi account. Click <a href="http://www.google.com/accounts/Logout?continue=https://appengine.google.com/_ah/logout?continue=<?php echo site_url(); ?>">here</a> to logout and then login with your Inmobi email ID.</p>
	<h3>Alternative method</h3>
	<p>Go to your Gmail dashboard, click on add account.</p>
	<img class = "demo-image" src = "images/before-blur.png" />
	<p>Login with your Inmobi account.</p>
	<img class = "demo-image" src = "images/after-blur.png" />
	<p>Then go here and select the Inmobi account from the options.</p>
	<img class = "demo-image" src = "images/finally-blur.png" />

	<p>If you already have multiple accounts set up, but selected the wrong account click <a href = "<?php echo site_url(); ?>">here</a>.

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="boilerplate/js/vendor/jquery-1.10.1.min.js"><\/script>')</script>
        <script src="boilerplate/js/plugins.js"></script>
        <script src="boilerplate/js/main.js"></script>
    </body>
</html>
