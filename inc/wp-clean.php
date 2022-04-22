<?php
////---------- WP: CLEAN ----------////

// NEW for 5.9.1+
function bbwp_remove_global_css()
{
    remove_action('wp_enqueue_scripts', 'wp_enqueue_global_styles');
    remove_action('wp_body_open', 'wp_global_styles_render_svg_filters');
}
add_action('init', 'bbwp_remove_global_css');

// Remove unwanted image sizes
add_filter('intermediate_image_sizes', 'bbwp_remove_default_img_sizes', 10, 1);

function bbwp_remove_default_img_sizes($sizes)
{
    $targets = ['medium_large', '1536x1536', '2048x2048'];

    foreach ($sizes as $size_index => $size) {
        if (in_array($size, $targets)) {
            unset($sizes[$size_index]);
        }
    }

    return $sizes;
}

// Fully Disable Gutenberg editor.
add_filter('use_block_editor_for_post_type', '__return_false', 10);
// Don't load Gutenberg-related stylesheets.
add_action('wp_enqueue_scripts', 'bbwp_remove_block_css', 100);
function bbwp_remove_block_css()
{
    wp_dequeue_style('wp-block-library'); // Wordpress core
    wp_dequeue_style('wp-block-library-theme'); // Wordpress core
}


// Hide edit links on frontend
add_filter('edit_post_link', '__return_false');


// Remove front-end toolbar when logged-in
show_admin_bar(false);


// REMOVE Comments completely
add_action('admin_init', function () {
    // Redirect any user trying to access comments page
    global $pagenow;

    if ($pagenow === 'edit-comments.php' || $pagenow === 'options-discussion.php') {
        wp_redirect(admin_url());
        exit;
    }

    // Remove comments metabox from dashboard
    remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');

    // Disable support for comments and trackbacks in post types
    foreach (get_post_types() as $post_type) {
        if (post_type_supports($post_type, 'comments')) {
            remove_post_type_support($post_type, 'comments');
            remove_post_type_support($post_type, 'trackbacks');
        }
    }
});

// Close comments on the front-end
add_filter('comments_open', '__return_false', 20, 2);
add_filter('pings_open', '__return_false', 20, 2);

// Hide existing comments
add_filter('comments_array', '__return_empty_array', 10, 2);

// Remove comments page and option page in menu 
add_action('admin_menu', function () {
    remove_menu_page('edit-comments.php');
    remove_submenu_page('options-general.php', 'options-discussion.php');
});

// Remove comments links from admin bar
add_action('init', function () {
    if (is_admin_bar_showing()) {
        remove_action('admin_bar_menu', 'wp_admin_bar_comments_menu', 60);
    }
});


// Remove WP CUSTOMIZER
add_action('admin_menu', function () {
    global $submenu;
    if (isset($submenu['themes.php'])) {
        foreach ($submenu['themes.php'] as $index => $menu_item) {
            foreach ($menu_item as $value) {
                if (strpos($value, 'customize') !== false) {
                    unset($submenu['themes.php'][$index]);
                }
            }
        }
    }
});


// REMOVE WP EMOJIS
function bbwp_disable_emojis()
{
    remove_action('wp_head', 'print_emoji_detection_script', 7);
    remove_action('admin_print_scripts', 'print_emoji_detection_script');
    remove_action('wp_print_styles', 'print_emoji_styles');
    remove_action('admin_print_styles', 'print_emoji_styles');
    remove_filter('the_content_feed', 'wp_staticize_emoji');
    remove_filter('comment_text_rss', 'wp_staticize_emoji');
    remove_filter('wp_mail', 'wp_staticize_emoji_for_email');

    // Remove from TinyMCE
    add_filter('tiny_mce_plugins', 'bbwp_disable_emojis_tinymce');
}
add_action('init', 'bbwp_disable_emojis');

function bbwp_disable_emojis_tinymce($plugins)
{
    if (is_array($plugins)) {
        return array_diff($plugins, array('wpemoji'));
    } else {
        return array();
    }
}

//// TINYMCE - remove buttons ////
// First row
add_filter('mce_buttons', 'bbwp_remove_tiny_mce_buttons_from_editor');
function bbwp_remove_tiny_mce_buttons_from_editor($buttons)
{
    $remove_buttons = array(
        //'bold',
        //'italic',
        //'bullist',
        //'numlist',
        //'blockquote',
        //'alignleft',
        //'aligncenter',
        //'alignright',
        //'link',
        //'unlink',
        'wp_more', // read more link
        'spellchecker',
        'dfw', // distraction free writing mode
        //'wp_adv', // kitchen sink toggle (if removed, kitchen sink will always display)
    );
    foreach ($buttons as $button_key => $button_value) {
        if (in_array($button_value, $remove_buttons)) {
            unset($buttons[$button_key]);
        }
    }
    return $buttons;
}

// Second row
add_filter('mce_buttons_2', 'bbwp_remove_tiny_mce_buttons_from_kitchen_sink');
function bbwp_remove_tiny_mce_buttons_from_kitchen_sink($buttons)
{
    $remove_buttons = array(
        //'formatselect', // format dropdown menu for <p>, headings, etc
        'underline',
        'hr', // horizontal line
        'strikethrough',
        'alignjustify',
        'forecolor', // text color
        //'pastetext', // paste as text
        //'removeformat', // clear formatting
        //'charmap', // special characters
        'outdent',
        'indent',
        'undo',
        'redo',
        'wp_help', // keyboard shortcuts
    );
    foreach ($buttons as $button_key => $button_value) {
        if (in_array($button_value, $remove_buttons)) {
            unset($buttons[$button_key]);
        }
    }
    return $buttons;
}
