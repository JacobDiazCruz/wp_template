<?php

/*
@package jacobtheme

	===============
	ADMIN ENQUEUE FUNCTIONS
	===============
*/

function jacob_load_admin_scripts($hook) {
	echo $hook;
	if('toplevel_page_jacob_theme' == $hook) {

		wp_register_style('jacob_admin', get_template_directory_uri() . '/css/jacob-admin.css', array(), '1.0.0', 'all');
		wp_enqueue_style('jacob_admin');

		wp_enqueue_media();

		wp_register_script('jacob-admin-script', get_template_directory_uri(). '/js/jacob-admin.js', array('jquery'), '1.0.0', true);
		wp_enqueue_script('jacob-admin-script');

	} else if('jacob_page_jacob_theme_css' == $hook) {

		wp_enqueue_style('ace', get_template_directory_uri(). '/css/jacob-ace.css', array(), '1.0.0', 'all');

		wp_enqueue_script('ace', get_template_directory_uri(). '/js/ace/lib/ace/ace.js', array('jquery'), '1.4.2', true);
		wp_enqueue_script('jacob-custom-css-script', get_template_directory_uri(). '/js/jacob-custom-css.js', array('jquery'), '1.0.0', true);

	} else {
		return;
	}
} 
add_action('admin_enqueue_scripts', 'jacob_load_admin_scripts');

/*
	===============
	FRONT-END ENQUEUE FUNCTIONS
	===============
*/

function jacob_load_scripts() {
	// jquery cdn
	wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', null, null, true);
	wp_enqueue_script('jquery');

	// style.css
	wp_register_style('main-css', get_template_directory_uri(). '/style.css', '1.0.0', null, false);
	wp_enqueue_style('main-css');

	// tweenmax cdn
	wp_register_script('TweenMax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js', null, null, true);
	wp_enqueue_script('TweenMax');

	// scrollmagic cdn
	wp_register_script('Scrollmagic', '/js/uncompressed/ScrollMagic.js', null, null, false);
	wp_enqueue_script('Scrollmagic');

	// fontawesome cdn
	wp_register_style('fontawesome', 'https://use.fontawesome.com/releases/v5.7.1/css/all.css', null, null, false);
	wp_enqueue_style('fontawesome');
}

add_action('wp_enqueue_scripts', 'jacob_load_scripts');












?>