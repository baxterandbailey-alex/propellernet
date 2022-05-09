<?php

$twitter = get_field('options_social_twitter', 'option');
$facebook = get_field('options_social_facebook', 'option');
$linkedin = get_field('options_social_linkedin', 'option');
$overlay = get_field('image_overlay');
get_header(); ?>

	<section class="post">
		
        <?php
        while ( have_posts() ) : the_post(); ?>
            <div class="post__header">
                <?php the_post_thumbnail(); ?>
                <?php if ($overlay) : ?>
                    <div class="img-overlay"></div>
                <?php endif; ?>
            </div>
            <div class="post__container">
                
                <div class="post__backBtn">
                    <img src="<?php echo get_template_directory_uri().'/assets/image/left-arrow.png'; ?>">    
                    <a class="font-baseticaLight" href="<?php echo site_url('/insights'); ?>">ALL INSIGHTS</a>
                </div>

                <h2 class="font-freight font-intro"><?php the_title(); ?></h2>

                <div class="post__contentContainer">

                    <div class="post__author">
                        <?php   
                        $author_id = get_the_author_meta('ID');   
                        $output = get_avatar_url($author_id); 
                        echo '<img src="'.$output.'"/>';?>
                        <p class="font-baseticaMedium font-reg"><?php echo get_the_author_meta('display_name'); ?></p>
                        <p class="font-baseticaLight font-reg"><?php echo get_the_date(); ?></p>
                    </div>

                    <div class="post__content">
                        <?php the_content(); ?>
                        <div class="post__socials">
                            <a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo get_permalink() ?>&title=<?php the_title() ?>&summary=<?php the_excerpt() ?>" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/image/linkedin.png'; ?>"></a>
                            <a href="http://www.twitter.com/share?url=<?php echo get_permalink(); ?>" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/image/twitter.png'; ?>"></a>
                            <a href="http://www.facebook.com/sharer/sharer.php?u=<?php echo get_permalink() ?>&id=<?php echo get_permalink() ?>}&scrape=true" target="_blank"><img src="<?php echo get_template_directory_uri().'/assets/image/facebook.png'; ?>"></a>
                        </div>
                    </div>

                </div>
            </div>
        <?php endwhile; ?>
		
    </section>

<?php
get_footer();

