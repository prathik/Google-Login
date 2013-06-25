<?php 
add_action('admin_menu', 'gl_create_menu');

function gl_create_menu() {
	add_plugins_page( 'Google Login Settings', 'Google Login', 'administrator', 'gl-settings', 'gl_settings_page' );
}

add_action( 'admin_init', 'gl_login_options' );

function gl_login_options() {
	
	if( false == get_option('gl_options_main') ) {
		add_option( 'gl_options_main' );
	}

	add_settings_section(
		'gl_main_settings',
		'Google Login Main Settings',
		'gl_main_settings_callback',
		'gl_options_main'
		);

	add_settings_field(
		'gl_required',
		'Is login required?',
		'gl_required_callback',
		'gl_options_main',
		'gl_main_settings'
		);

	register_setting ( 
			'gl_options_main',
			'gl_options_main'
			);

}

function gl_required_callback() {

	$options = get_option( 'gl_options_main' );
	$html = '<input type = "checkbox" id = "gl_required" name = "gl_options_main[gl_required]" value = "1" '.checked(1,$options["gl_required"],false) . '/>';
	$html .= '<label for = "gl_requried"> Should users login to view your website? </label>';

	echo $html;

}

function gl_main_settings_callback() {
	echo '<p>Main settings for Google Login</p>';
}


function gl_settings_page() { ?>
<div class="wrap">
<?php screen_icon(); ?>
<h2>Google Login</h2>
<?php settings_errors(); ?>
<form method="POST" action="options.php">
<?php settings_fields("gl_options_main"); ?>
<?php do_settings_sections( "gl_options_main" ); ?>

	<?php submit_button(); ?>

</form>
</div>

<?php } ?>
