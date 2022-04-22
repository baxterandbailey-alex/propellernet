<?php

/**
 * Content: Flexible rows
 * 
 * @package BBWP
 */

 
// TEXT + IMAGE
if (get_row_layout() == 'flx_text_image') :
    get_template_part('partials/flx/flx', 'text-image');

// HERO
elseif (get_row_layout() == 'flx_hero') :
    get_template_part('partials/flx/flx', 'hero');

// LOGOS
elseif (get_row_layout() == 'flx_logos') :
    get_template_part('partials/flx/flx', 'logos');

// IMAGE BANNER
elseif (get_row_layout() == 'flx_img_banner') :
    get_template_part('partials/flx/flx', 'img-banner');

// CONTENT (WYSIWYG)
elseif (get_row_layout() == 'flx_text') :
    get_template_part('partials/flx/flx', 'text');

// ACCORDION
elseif (get_row_layout() == 'flx_accordion') :
    get_template_part('partials/flx/flx', 'accordion');

// OEMBED
elseif (get_row_layout() == 'flx_oembed') :
    get_template_part('partials/flx/flx', 'oembed');

// CTA
elseif (get_row_layout() == 'flx_cta') :
    get_template_part('partials/flx/flx', 'cta');

// STACK
elseif (get_row_layout() == 'flx_stack') :
    get_template_part('partials/flx/flx', 'stack');

// ANCHOR
elseif (get_row_layout() == 'flx_anchor') :
    get_template_part('partials/flx/flx', 'anchor');

// GRID
elseif (get_row_layout() == 'flx_grid') :
    get_template_part('partials/flx/flx', 'grid');

// TESTIMONIAL
elseif (get_row_layout() == 'flx_testimonial') :
    get_template_part('partials/flx/flx', 'testimonial');

// FEATURE BLOCK
elseif (get_row_layout() == 'flx_feature_block') :
    get_template_part('partials/flx/flx', 'feature-block');

// OUR Projects
elseif (get_row_layout() == 'flx_our_projects') :
    get_template_part('partials/flx/flx', 'our-projects');

// INTRO
elseif (get_row_layout() == 'flx_intro') :
    get_template_part('partials/flx/flx', 'intro');

// THREE WORDS/IMAGES
elseif (get_row_layout() == 'flx_three_words_images') :
    get_template_part('partials/flx/flx', 'three-words-images');

// BLOCK TEXT IMAGE
elseif (get_row_layout() == 'flx_block_text_image') :
    get_template_part('partials/flx/flx', 'block-text-image');

// POSTS
elseif (get_row_layout() == 'flx_posts') :
    get_template_part('partials/flx/flx', 'posts');

// CONTENT SLIDER
elseif (get_row_layout() == 'flx_content_slider') :
    get_template_part('partials/flx/flx', 'content-slider');

// FULL IMAGE LINK
elseif (get_row_layout() == 'flx_full_image_link') :
    get_template_part('partials/flx/flx', 'full-image-link');

// RESULTS
elseif (get_row_layout() == 'flx_results') :
    get_template_part('partials/flx/flx', 'results');


// Process
elseif (get_row_layout() == 'flx_process') :
    get_template_part('partials/flx/flx', 'process');

endif;