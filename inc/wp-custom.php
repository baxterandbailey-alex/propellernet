<?php
////---------- WP: CUSTOM ----------////

// CUSTOM EXCERPT
function bbwp_custom_excerpt_length($length)
{
    return 20;
}
add_filter('excerpt_length', 'bbwp_custom_excerpt_length', 999);

function bbwp_excerpt_more($more)
{
    return '...';
}
add_filter('excerpt_more', 'bbwp_excerpt_more');


//  RESPONSIVE EMBEDS
function bbwp_embed_html($html)
{
    return '<div class="responsive-16x9">' . $html . '</div>';
}
add_filter('embed_oembed_html', 'bbwp_embed_html', 10, 3);
add_filter('video_embed_html', 'bbwp_embed_html');


