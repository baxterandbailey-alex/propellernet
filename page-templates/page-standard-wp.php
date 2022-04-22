<?php

/**
 * Template Name: Standard WP
 *
 * @package BBWP
 */

get_header();
get_template_part('partials/header', 'select');
while (have_posts()) : the_post();
?>

    <div class="container narrow m-top__lg m-bottom__lg">
        <div class="rich-text">
            <?php the_content(); ?>
        </div>
    </div>


<?php
endwhile;
get_footer();
