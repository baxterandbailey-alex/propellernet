<?php
////---------- PLUGIN: WOOCOMMERCE ----------////

// Declare support
function bbwp_add_woocommerce_support()
{
    add_theme_support('woocommerce');
}
add_action('after_setup_theme', 'bbwp_add_woocommerce_support');

// Remove all Woo styles
add_filter('woocommerce_enqueue_styles', '__return_false');
