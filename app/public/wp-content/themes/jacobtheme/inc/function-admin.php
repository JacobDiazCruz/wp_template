<?php

/*
@package jacobtheme

	===============
	ADMIN PAGE
	===============
*/	

function jacob_add_admin_page() {

	// generate admin all
	add_menu_page('Jacob Theme Options', 'Jacob', 'manage_options', 'jacob_theme', 'jacob_theme_create_page',
	get_template_directory_uri() . '/img/icon.png', 110);

	//generate admin sub pages
	add_submenu_page('jacob_theme', 'Jacob Sidebar Options', 'Sidebar', 'manage_options', 'jacob_theme', 'jacob_theme_create_page');
	add_submenu_page('jacob_theme', 'Jacob Theme Options', 'Theme Options', 'manage_options', 'jacob_main_theme', 'jacob_theme_support_page');
	add_submenu_page('jacob_theme', 'Jacob Contact Form', 'Contact Options', 'manage_options', 'jacob_main_theme_contact', 'jacob_contact_form_page');
	add_submenu_page('jacob_theme', 'Jacob CSS Options', 'Custom CSS', 'manage_options', 'jacob_theme_css', 'jacob_theme_settings_page');
}
add_action('admin_menu', 'jacob_add_admin_page');

//Activate custom settings
add_action('admin_init', 'jacob_custom_settings');

function jacob_custom_settings() {
	//Sidebar Options
	register_setting('jacob-setting-group', 'profile_picture');
	register_setting('jacob-setting-group', 'first_name');
	register_setting('jacob-setting-group', 'last_name');
	register_setting('jacob-setting-group', 'user_description');
	register_setting('jacob-setting-group', 'facebook_handler', 'jacob_sanitize_facebook_hander');

	add_settings_section('jacob-sidebar-options', 'Sidebar Options', 'jacob_sidebar_options', 'jacob_theme'); // id,title,function, id of page

	add_settings_field('jacob-profile', 'Profile Picture', 'jacob_sidebar_profile', 'jacob_theme', 'jacob-sidebar-options');
	add_settings_field('jacob-name', 'Full Name', 'jacob_sidebar_name', 'jacob_theme', 'jacob-sidebar-options');
	add_settings_field('jacob-description', 'Description', 'jacob_sidebar_description', 'jacob_theme', 'jacob-sidebar-options');
	add_settings_field('sidebar-facebook', 'Facebook handler', 'jacob_sidebar_facebook', 'jacob_theme', 'jacob-sidebar-options'); //$id, $title, $callback, string $page, string $section, array $args

	//Theme Support Options
	register_setting('jacob-theme-support', 'post_formats', 'jacob_post_formats_callback');

	add_settings_section('jacob-theme-options', 'Theme Options', 'jacob_theme_options', 'jacob_main_theme');

	add_settings_field('post-formats', 'Post Formats', 'jacob_post_formats', 'jacob_main_theme', 'jacob-theme-options');

	//Contact form options
	register_setting('jacob-contact-options', 'activate');

	add_settings_section('jacob-contact-section', 'Contact Form', 'jacob_contact_section', 'jacob_main_theme_contact');

	add_settings_field('activate-form', 'Activate Contact Form', 'jacob_activate_contact', 'jacob_main_theme_contact', 'jacob-contact-section');

	//Custom CSS options
	register_setting('jacob-custom-css-options', 'jacob_css', 'jacob_sanitize_custom_css');

	add_settings_section('jacob-custom-css-section', 'Custom CSS', 'jacob_custom_css_section_callback', 'jacob_main_css');

	add_settings_field('custom-css', 'Insert your Custom CSS', 'jacob_custom_css_callback', 'jacob_main_css', 'jacob-custom-css-section');
}

//Post format callback
function jacob_post_formats_callback($input) {
	 return $input;
}

//css start
function jacob_custom_css_section_callback() {
	echo 'Customize Jacob Theme with your own CSS';
}

function jacob_custom_css_callback() {
	$css = get_option('jacob_css');
	if(empty($css) ? 'Jacob Theme Custom CSS' : $css);
	echo '<textarea placeholder="Insert CSS" id="jacob_css" cols="80" name="jacob_css">'.$css.'</textarea>';
}

function jacob_theme_options() {
	echo 'Activate and Deactivate';
}

// contact form
function jacob_contact_section() {
	echo 'Activate and Deactivate the Built in Contact Form';
}

function jacob_activate_contact() {
	$options = get_option('activate_contact');
	$checked = ( (empty($options)) == 1 ? 'checked' : '' );
	echo '<label><input type="checkbox" id="custom_header" name="activate_contact" value="1" '.$checked.'/></label>';
}


function jacob_post_formats() {
	$options = get_option('post_formats');
	$formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat');
	foreach($formats as $format) {
		$checked = ( (empty($options[$format])) == 1 ? 'checked' : '' );
		$output .= '<label><input type="checkbox" id="'.$format.'" name="post_formats['.$format.']" value="1" '.$checked.'>'.$format.'</label><br>';
	}
	echo $output;
}

function jacob_sidebar_options() {
	echo 'Customize sidebar Info';
}

function jacob_sidebar_profile() {
	$picture = esc_attr(get_option('profile_picture'));
	echo '<input type="button" class="button button-secondary" value="Upload Profile Picture" id="upload-button"> 
		<input type="hidden" name="profile_picture" value="'.$picture.'" id="profile-picture"/>';
}

function jacob_sidebar_name() {
	$firstName = esc_attr(get_option('first_name'));
	$lastName = esc_attr(get_option('last_name'));
	echo '<input type="text" name="first_name" value="'.$firstName.'" placeholder="First Name"/>
		<input type="text" name="last_name" value="'.$lastName.'" placeholder="Last Name"/>';
}

function jacob_sidebar_description() {
	$description = esc_attr(get_option('user_description'));
	echo '<input type="text" name="user_description" value="'.$description.'" placeholder="Description"/>';
}

function jacob_sidebar_facebook() {
	$facebook = esc_attr(get_option('facebook_handler'));
	echo '<input type="text" name="facebook_handler" value="'.$facebook.'" placeholder="Facebook Handler"/>
		<p>Input your Facebook username</p>';
}

//Sanitization Settings
function jacob_sanitize_facebook_hander($input) {
	$output = sanitize_text_field($input);
	$output = str_replace('@', '', $output);
	return $output;
}

function jacob_sanitize_custom_css($input) {
	$output = sanitize_textarea_field($input);
	return $output;
}

//Template submenu functions
function jacob_theme_create_page() {
	require_once(get_template_directory() . '/inc/templates/jacob-admin.php');
}

function jacob_contact_form_page() {
	require_once(get_template_directory(). '/inc/templates/jacob-contact-form.php');
}

function jacob_theme_support_page() {
	require_once(get_template_directory(). '/inc/templates/jacob-theme-support.php');
}

function jacob_theme_settings_page() {
	require_once(get_template_directory(). '/inc/templates/jacob-custom-css.php');
}

