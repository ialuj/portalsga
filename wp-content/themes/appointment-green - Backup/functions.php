<?php
the_content();
add_action( 'wp_enqueue_scripts', 'appointment_green_theme_css',999);
function appointment_green_theme_css() {
    wp_enqueue_style( 'parent-style', '/wp-content/themes/appointment/style.css' );
    wp_enqueue_style( 'bootstrap-style', '/wp-content/themes/appointment/css/bootstrap.css' );
	wp_enqueue_style( 'theme-menu', '/wp-content/themes/appointment/css/theme-menu.css' );
	wp_enqueue_style( 'default-css', "/wp-content/themes/appointment-green - Backup/css/default.css" );
	wp_enqueue_style( 'element-style', '/wp-content/themes/appointment/css/element.css' );
	wp_enqueue_style('media-responsive', '/wp-content/themes/appointment/css/media-responsive.css');
	wp_dequeue_style('appointment-default', '/wp-content/themes/appointment/css/default.css');
}

/*
	 * Let WordPress manage the document title.
	 */
function appointment_green_setup() {
   add_theme_support( 'title-tag' );
   require( get_stylesheet_directory() . '/functions/customizer/customizer-copyright.php' );
   load_theme_textdomain('appointment-green', '/wp-content/themes/appointment-green - Backup/languages' );
}
add_action( 'after_setup_theme', 'appointment_green_setup' );


function appointment_green_default_data(){
	return array(
	// general settings
	'footer_menu_bar_enabled' => '',
	'footer_social_media_enabled' => '',
	'footer_social_media_facebook_link' => '#',
	'footer_facebook_media_enabled' => 1,
	'footer_social_media_twitter_link' => '#',
	'footer_twitter_media_enabled'=>1,
	'footer_social_media_linkedin_link' => '#',
	'footer_linkedin_media_enabled'=>1,
	'footer_social_media_googleplus_link' => '#',
	'footer_googleplus_media_enabled' => 1,
	'footer_social_media_skype_link' => '#',
	'footer_skype_media_enabled' => 1,
	);
}
?>