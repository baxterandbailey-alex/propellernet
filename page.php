<?php

/**
 * Template: Default (flexible)
 *
 * @package BBWP
 */

get_header();

if (have_posts()) :
    while (have_posts()) : the_post();
?>
        <article id="page-id-<?php echo get_the_ID(); ?>" class="flx-wrapper">
            <?php get_template_part('partials/flx/flx'); ?>
        </article>
<?php
    endwhile;
endif;
get_footer();
