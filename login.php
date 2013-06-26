<?php
/*
Plugin Name: Google Login
Plugin URL: https://github.com/prathik/Google-Login
Description: Login to Wordpress with Google credentials.
Version: 1.0
Author: Prathik Raj
License: Free to use, copy, modify and distribute

  Copyright 2013  Prathik Raj  (email : prathikraj@ymail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA

*/
	include("gl-options.php");
	$options = get_option('gl_options_main');
	

	if($options['gl_required'] == false) {	
		add_action( "template_redirect", "redirect_to_login");
	}
	
	if($options['gl_override'] == false) {
		add_action( "login_head", "login_page_redirect" );
	}

	function login_page_redirect() {
		if(!is_user_logged_in) {
			wp_redirect("wp-content/plugins/Google-Login/loginout.php");
		} else {
			wp_redirect(site_url());
		}
	}

	function redirect_to_login() {
		
		if(!is_user_logged_in()){
			wp_redirect("wp-content/plugins/Google-Login/Google-Login.php");
		}
	}	
?>
