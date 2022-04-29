<?php

/**
 * Template Name: Standard WP
 *
 * @package BBWP
 */

$firstName = get_field('first_name');
$intro = get_field('intro');
$aboutText = get_field('about_text');
$linkedin = get_field('linkedin');
$twitter = get_field('twitter');

get_header();
get_template_part('partials/header', 'select');
while ( have_posts() ) : the_post() 
?>
    <section class="team-member">
        <div class="team-member__top-container">
            <figure>
                <?php the_post_thumbnail(); ?>
            </figure>
            <div class="team-member__name">
                <img src="<?php echo get_template_directory_uri().'/assets/image/white-bracket-left.png'; ?>">
                    <p class="font-beyondInfinity"><?php echo $firstName; ?></p>
                <img src="<?php echo get_template_directory_uri().'/assets/image/white-bracket-right.png'; ?>">
            </div>
        </div>
        <div class="team-member__text-container">
            <p class="team-member__intro white-text font-freight font-large"><?php echo $intro; ?></p>

            <div class="team-member__text-box white-text">
                <div class="team-member__text-block"><?php echo $aboutText ?></div>
                <?php if ($linkedin || $twitter) : ?>
                    <div class="team-member__social-links">
                        <?php if ($linkedin) : ?>
                            <a href="<?php echo $linkedin; ?>" target="_blank"><img class="team-member__linkedin" src="<?php echo get_template_directory_uri().'/assets/image/linkedin.png'; ?>"></a>
                        <?php endif; ?>
                        <?php if ($twitter) : ?>
                            <a href="<?php echo $twitter; ?>" target="_blank"><img class="team-member__twitter" src="<?php echo get_template_directory_uri().'/assets/image/twitter.png'; ?>"></a>
                        <?php endif; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>

        <?php the_content(); ?>
        
    </section>
    <?php get_template_part('partials/flx/flx'); ?>

<?php
endwhile;
get_footer();