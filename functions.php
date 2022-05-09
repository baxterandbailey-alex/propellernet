<?php

/**
 * Functions and definitions
 *
 * @package BBWP
 */

// Exit if accessed directly
if (!defined('ABSPATH')) {
	exit;
}

////---------- Theme setup ----------////
if (!function_exists('bbwp_setup')) :
	function bbwp_setup()
	{
		add_theme_support('title-tag');
		add_theme_support('post-thumbnails');

		// wp_nav_menu()
		register_nav_menus(array(
			'menu-1' => esc_html__('Main', 'bbwp'),
		));
	}
endif;
add_action('after_setup_theme', 'bbwp_setup');

// Global content width
function bbwp_content_width()
{
	$GLOBALS['content_width'] = apply_filters('bbwp_content_width', 1440);
}
add_action('after_setup_theme', 'bbwp_content_width', 0);


////---------- Scripts and styles ----------////
function bbwp_scripts()
{
	//// CSS
	// Theme
	wp_enqueue_style('app-css', get_template_directory_uri() . '/assets/css/app.min.css', array(), '0.0.1', false);

	//// JS
	// See ya later, jQuery!
	wp_deregister_script('jquery');
	// Add Mmenu

	wp_enqueue_script('mmenu-js', get_template_directory_uri() . '/assets/js/mmenu.js', array(), null, true);
	// Theme
	wp_enqueue_script('app-js', get_template_directory_uri() . '/assets/js/app.min.js', array(), '0.0.1', true);
}
add_action('wp_enqueue_scripts', 'bbwp_scripts');


////---------- Required includes ----------////

// WP: Clean up
require_once get_template_directory() . '/inc/wp-clean.php';
// WP: Customise
require_once get_template_directory() . '/inc/wp-custom.php';
// WP: CPTs & taxonomies
require_once get_template_directory() . '/inc/wp-posts.php';
// WP: Login
require_once get_template_directory() . '/inc/wp-login.php';

// Plugin: Woo
//require_once get_template_directory() . '/inc/plugin-woo.php';
// Plugin: ACF
require_once get_template_directory() . '/inc/plugin-acf.php';



// Add li class to nav menu

function add_additional_class_on_li($classes, $item, $args) {
    if(isset($args->add_li_class)) {
        $classes[] = $args->add_li_class;
    }
    return $classes;
}
add_filter('nav_menu_css_class', 'add_additional_class_on_li', 1, 3);

