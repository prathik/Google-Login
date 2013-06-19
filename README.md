Google-Login
============

Login into Wordpress using Google credentials. This project uses LightOpenId (http://gitorious.org/lightopenid).

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
2. Define **ONLY_AlLOW** with the domain name that you want to allow. For all Google users, change it to *@gmail.com* if you want to allow only  google apps specific users change it to *@yourdomain.com*.
3. If you need a seperate base path, then change the **BASE_PATH**, generally no change is required for this.

Updating
--------

I have intentionally not added this into the Wordpress plugins directory. To update the plugin you have to do a git pull of this project. Send me a mail to prathikraj [at] ymail [guesswhat] com to add yourself to the notification list.

Authors
-------

Prathik Raj

Feature Request/Bugs
--------------------

Mail me or add a comment

History
-------

This plugin was created to allow users of a company intranet to login with their Google Apps credentials. As soon as one gets to the Wordpress website, they are redirected to the prompt page, and if they provide the credentials and the permissions, they are logged in.
