<?php

/**
 * Template Name: Team archive
 *
 * @package rsa
 */

get_header();
$header = get_field('team_header', 'option');
$overlay = get_field('team_header_overlay', 'option');
?>

<div class="meet-the-team__header">
    <img src="<?php echo $header; ?>" alt="">
    <?php if ($overlay) : ?>
        <div class="img-overlay"></div>
    <?php endif; ?>
</div>

<section>
    <?php
    if (have_rows('meet_the_team_top_stack', 'options')) :
        while (have_rows('meet_the_team_top_stack', 'options')) : the_row();

            $stack_id = get_sub_field('mtt_top_stack');

            if (get_sub_field('mtt_top_stack') != '' && get_post_status($stack_id) == 'publish') {
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
    $args = array(
        'post_type' => 'team',
        'posts_per_page' => 12,
    );
    $_team = new WP_Query($args);
    ?>

<section class="meet-the-team">
    <h3 class="font-freight font-large">Our Team</h3>
    <div class="meet-the-team__grid">
        <?php while( $_team->have_posts() ) : $_team->the_post(); ?>
            <div>
                <a class="meet-the-team__img-link" href="<?php the_permalink( ) ?>"><?php the_post_thumbnail(); ?></a>
                <p class="font-freight meet-the-team__subTitle"><?php the_title(); ?></p>
                <div class="font-baseticaLight meet-the-team__role"><?php the_excerpt(); ?></div>
                <a class="font-baseticaLight meet-the-team__link" href="<?php the_permalink( ) ?>">READ MORE</a>
            </div>
        <?php endwhile; wp_reset_query();?>
    </div>
</section>

<?php
get_footer();
