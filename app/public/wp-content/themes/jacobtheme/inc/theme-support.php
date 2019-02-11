<?php

/*
@package jacobtheme

	===============
	THEME SUPPORT OPTIONS
	===============
*/

$options = get_option('post_formats');
$formats = array('aside', 'gallery', 'link', 'image', 'quote', 'status', 'video', 'audio', 'chat');
$output = array();
	foreach($formats as $format) {
		$output[] = ( (empty($options[$format])) == 1 ? $format : '' );
	}
if(!empty($options)) {
	add_theme_support('post-formats', $output);
}


// Activate Nav Menu Option
function jacob_register_nav_menu() {
	register_nav_menu('primary', 'Header Navigation Menu');
}
add_action('after_setup_theme', 'jacob_register_nav_menu');