<?php

/**
 * 
 *
 * @package BBWP
 */

get_header();
get_template_part('partials/header', 'select');

?>

<div class="category__header">
    <h2 class="font-freightItalic font-intro">Insights</h2>

    <?php
        $post_id = get_the_ID();
        $categories = get_the_terms( $post_id, 'category' );
        if ( ! $categories || is_wp_error( $categories ) ) {
        $categories = array();}
        $categories = array_values( $categories );
    ?> 
    <h3 class="font-freight font-intro white-text"><?php  echo $categories[0]->name ?></h3>
</div>

<div class="post__backBtn category__backBtn">
    <img src="<?php echo get_template_directory_uri().'/assets/image/left-arrow.png'; ?>">    
    <a class="font-baseticaLight" href="<?php echo site_url('/insights'); ?>">ALL INSIGHTS</a>
</div>
    
<div class="posts__grid">


    
<?php while ( have_posts() ) : the_post() ?>

    <div class="posts__item">
        <a class="posts__item--img" href="<?php the_permalink( ) ?>"><?php the_post_thumbnail(); ?></a>
        <p><?php the_title(); ?></p>
        <a href="<?php the_permalink( ) ?>">READ MORE</a>
    </div>
<?php endwhile;?>
<!-- <?php next_post_link(); ?> -->
</div>

<?php
get_footer();