<?php


$posts = get_posts([
    'post_type' => 'projects',
    'post_status'=>'publish', 
    'posts_per_page'=> 6
])
    
?>

        <article id="page-id-<?php echo get_the_ID(); ?>" class="flx-wrapper">
            <?php while( have_posts() ) : the_post(); ?>
                <p><?php the_title(); ?></p>
             <?php the_content(); ?>
             <?php the_excerpt(); ?>
            <?php endwhile; ?>
            <p>This is a test</p>
        </article>
