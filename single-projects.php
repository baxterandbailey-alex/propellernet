<?php

/**
 * Template Name: Standard WP
 *
 * @package BBWP
 */

get_header();
get_template_part('partials/header', 'select');
while ( have_posts() ) : the_post() 
?>


        <div class="product__header">
        <?php the_post_thumbnail(); ?>

                <div class="product__headerContent">
                    <img class="header__left-bracket" src="<?php echo get_template_directory_uri().'/assets/image/white-bracket-left.png'; ?>">
                    <h2 class="white-text font-beyondInfinity font-xl"><?php the_title(); ?></h2>
                    <img class="header__right-bracket" src="<?php echo get_template_directory_uri().'/assets/image/white-bracket-right.png'; ?>">
                </div>

            
        </div>

        <div class="product__backBtn">
            <img src="<?php echo get_template_directory_uri().'/assets/image/left-arrow.png'; ?>">
            <a class="font-baseticaLight" href="<?php echo site_url('/our-work'); ?>">ALL CASE STUDIES</a>
        </div>
        


    <div>
        <div class="rich-text">
            <?php the_content(); ?>
            <?php get_template_part('partials/flx/flx'); ?>
        </div>
    </div>

<?php
endwhile;
get_footer();


