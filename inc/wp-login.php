<?php
////---------- WP: LOGIN PAGE ----------////

// NEW! Remove language selector
add_filter( 'login_display_language_dropdown', '__return_false' );

// Add custom CSS
function bbwp_custom_login_css()
{
    echo '<link rel="stylesheet" type="text/css" href="' . get_stylesheet_directory_uri() . '/assets/css/login.min.css" />';
}
add_action('login_head', 'bbwp_custom_login_css');

// Logo goes to website URL, not WP
function bbwp_custom_login_logo_url()
{
    return home_url();
}
add_filter('login_headerurl', 'bbwp_custom_login_logo_url');

// Set title to actual Site Name
function bbwp_custom_login_logo_url_title()
{
    return get_bloginfo('name');
}
add_filter('login_headertext', 'bbwp_custom_login_logo_url_title');
