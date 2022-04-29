<?php

/**
 * 
 *
 * @package BBWP
 */

get_header();
get_template_part('partials/header', 'select');

?>

<div class="posts__featured">
    <?php
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => 1,
        'meta_key'		=> 'featured_post',
        'meta_value'	=> true,
    );
    $_posts = new WP_Query($args);
    ?>

    <?php if($_posts->have_posts()): ?>
        <?php while ($_posts->have_posts()) : $_posts->the_post();?>
            <div class="posts__featured-card">
                <?php the_post_thumbnail(); ?>
                <div class="posts__featured-text">
                    <?php the_excerpt(); ?>
                    <div class="posts__featured-link">
                        <a href="<?php the_permalink( ) ?>">READ</a>
                        <img src="<?php echo get_template_directory_uri().'/assets/image/white-btn-arrow.png'; ?>">
                    </div>
                </div>
                
            </div>
        <?php endwhile; ?>
    <?php endif; ?>
</div>


<div class="insight__title">
    <h2 class="font-freight font-large">Our Insights</h2>
    <p class="font-freight font-large">Industry, news & culture</p>
</div>

<?php
    if (have_rows('insight_top_section', 'options')) :
        while (have_rows('insight_top_section', 'options')) : the_row();

            $stack_id = get_sub_field('insight_top_stack');

            if (get_sub_field('insight_top_stack') != '' && get_post_status($stack_id) == 'publish') {
                // Flexible content START
                if (have_rows('flx', $stack_id)) :
                    while (have_rows('flx', $stack_id)) : the_row();
                        get_template_part('partials/flx/flx', 'rows');
                    endwhile;
                endif;
                // Flexible content END
            }

        endwhile;
    endif;
    ?>

<div class="posts__grid">
<?php while ( have_posts() ) : the_post() ?>
    <div class="posts__item">
        <a class="posts__item-image" href="<?php the_permalink( ) ?>"><?php the_post_thumbnail(); ?></a>
        <p class="font-baseticaMedium posts__item-title"><?php the_title(); ?></p>
        <div class="posts__author font-baseticaLight">
            <p><?php echo get_the_author_meta('display_name'); ?> | <?php echo get_the_date(); ?></p>
        </div>
        <div class="posts__item-link">
            <a href="<?php the_permalink( ) ?>">READ MORE</a>
            <img src="<?php echo get_template_directory_uri().'/assets/image/btn-arrow.png'; ?>">
        </div>
        
    </div>
<?php endwhile;?>

</div>
<section>
    <?php
    if (have_rows('insight_bottom_section', 'options')) :
        while (have_rows('insight_bottom_section', 'options')) : the_row();

            $stack_id = get_sub_field('insight_bottom_content');

            if (get_sub_field('insight_bottom_content') != '' && get_post_status($stack_id) == 'publish') {
                // Flexible content START
                if (have_rows('flx', $stack_id)) :
                    while (have_rows('flx', $stack_id)) : the_row();
                        get_template_part('partials/flx/flx', 'rows');
                    endwhile;
                endif;
                // Flexible content END
            }

        endwhile;
    endif;
    ?>
</section>

<?php
get_footer();