<?php

/**
 * Template Name: Job Advert
 *
 * @package rsa
 */

$intro = get_field('intro');
$twitter = get_field('options_social_twitter', 'option');
$facebook = get_field('options_social_facebook', 'option');
$linkedin = get_field('options_social_linkedin', 'option');

get_header();

?>

    <div class="job__header">
        <h2 class="font-freightItalic font-intro">Jobs</h2>
        <p class="font-freight font-intro white-text"><?php the_title(); ?></p>
    </div>

    <section class="job__content">
        <div class="job__intro font-baseticaMedium font-reg">
            <?php echo $intro ?>
        </div>

        <div class="job__details">
        <?php if( have_rows('advert_sections') ):
            while( have_rows('advert_sections') ) : the_row();
                $section = get_sub_field('section');?>
                <div class="job__section">
                    <?php echo $section ?>
                </div>

        <?php endwhile; endif;?>
        </div>
        <div class="job__socials">
            <?php if($linkedin) : ?>
                <a href="<?php echo $linkedin; ?>" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/image/linkedin.png'; ?>"></a>
            <?php endif; ?>
            <?php if($twitter ) : ?>
                <a href="<?php echo $twitter; ?>" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/image/twitter.png'; ?>"></a>
            <?php endif; ?>
            <?php if($facebook) : ?>
                <a href="<?php echo $facebook; ?>" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/image/facebook.png'; ?>"></a>
            <?php endif; ?>
        </div>
    </section>

    

<?php
get_footer();