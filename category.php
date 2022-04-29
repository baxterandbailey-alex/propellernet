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
    <h2 class="font-freight font-intro white-text">Insights</h2>
</div>
    
<div class="posts__grid">
    
<?php while ( have_posts() ) : the_post() ?>

    <div class="posts__item">
        <a href="<?php the_permalink( ) ?>"><?php the_post_thumbnail(); ?></a>
        <p><?php the_title(); ?></p>
        <a href="<?php the_permalink( ) ?>">READ MORE</a>
    </div>
<?php endwhile;?>
<!-- <?php next_post_link(); ?> -->
</div>


<?php
get_footer();