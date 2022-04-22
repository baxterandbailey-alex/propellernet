<?php

/**
 * Template Name: Projects archive
 *
 * @package rsa
 */

get_header();
$header = get_field('our_work_header_image', 'option');
?>

<div class="our-work__header">
    <img src="<?php echo $header; ?>" alt="">
</div>
<section>
    <?php
    if (have_rows('our_work_top_stack', 'options')) :
        while (have_rows('our_work_top_stack', 'options')) : the_row();

            $stack_id = get_sub_field('stack');

            if (get_sub_field('stack') != '' && get_post_status($stack_id) == 'publish') {
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

?>
<section class="our-work">
    <h2 class="font-large font-freight">Our projetcs</h2>
    <article id="page-id-<?php echo get_the_ID(); ?>" class="flx-wrapper our-work__grid">
        <?php while( have_posts() ) : the_post(); ?>
            <div class="our-work__card">
                <?php the_post_thumbnail(); ?>
                <p class="font-baseticaMedium"><?php the_title(); ?></p>
                <p class="font-baseticaLight"><?php the_excerpt(); ?></p>
                <a href="<?php the_permalink( ) ?>" class="font-baseticaLight">READ MORE</a>
            </div>
        <?php endwhile; wp_reset_query();?>
    </article>
</section>


<section>
    <?php
    if (have_rows('our_work_bottom_section', 'options')) :
        while (have_rows('our_work_bottom_section', 'options')) : the_row();

            $stack_id = get_sub_field('stack_two');

            if (get_sub_field('stack_two') != '' && get_post_status($stack_id) == 'publish') {
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
