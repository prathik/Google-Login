Google-Login
============

Login into your Wordpress Blog using Google credentials. This project uses LightOpenId (http://gitorious.org/lightopenid).

As soon as a visitor enters your website, they will be redirected to the authentication page, and after they authenticate they will be logged into your website.

Usecase
-------

* Very useful if you run a company intranet using Wordpress and the company has a Google Apps enterprise account.

* Your school has a Google Apps account and you want to run a student blog using Wordpress where login is essential.

* You run a Wordpress community using Buddypress and you want all new users to be registered members.

LICENSE
------------

Free to use, copy, modify and distribute.

Installing
----------

Clone the project in Wordpress plugins directory. Go to Wordpress admin panel and activate it.

Configuration
-------------

Open the config.php file

1. Define **HOST** with the domain name of your website.

2. Define **ONLY_AlLOW** with a domain name to allow only the users of a specific Google Apps domain to login. To allow all Google Accounts users change it to *@gmail.com*, doing this will prevent users of a specific Google Apps domain from loggin in.

3. If you need a separate base path, then change the **BASE_PATH**, generally no change is required for this.

Edit login-page.php to change how the page the redirects to Google/has a button to authenticate to be changed.

Edit invalid-email.php to change the error message which comes when the user logs in with the wrong email id.

Updating
--------

I have intentionally not added this into the Wordpress plugins directory. To update the plugin you have to do a git pull of this project. Send me a mail to prathikraj [at] ymail [guesswhat] com to add yourself to the notification list.

Authors
-------

Prathik Raj

Feature Request/Bugs
--------------------

Mail me or add a comment.

History
-------

This plugin was created to allow users of a company intranet to login with their Google Apps credentials. As soon as one gets to the Wordpress website, they are redirected to the prompt page, and if they provide the credentials and the permissions, they are logged in.

Known Bugs
----------

Users are redirected to the authentication page as soon as they visit the page. This is not a bug, but an intended feature. An option to disable this will be added in the next release.
