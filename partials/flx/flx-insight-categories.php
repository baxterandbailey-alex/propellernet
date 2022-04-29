<section class="posts-category">
    <div class="posts__grid">
    <?php if( have_rows('categories') ):
            while( have_rows('categories') ) : the_row();

            $categoryName = get_sub_field('category_name');
            $categoryImage = get_sub_field('category_image');
            $categoryExcerpt = get_sub_field('category_excerpt');
            $categorySlug = get_sub_field('category_slug');?>

                <div class="category__card">
                    <a class="category__cardImage" href="<?php echo get_site_url(); ?>/category/<?php echo $categorySlug[0]->slug ;?>">
                        <img src="<?php echo $categoryImage ?>" alt="">
                    </a>
                    <h4 class="white-text font-baseticaMedium font-reg"><?php echo $categoryName; ?></h4>
                    <p class="white-text font-baseticaLight font-reg"><?php echo $categoryExcerpt; ?></p>
                    <div class="category__card--link">
                        <a class="white-text" href="<?php echo get_site_url(); ?>/category/<?php echo $categorySlug[0]->slug ;?>">SEE ALL</a>
                        <img src="<?php echo get_template_directory_uri().'/assets/image/white-btn-arrow.png'; ?>">
                    </div>
                </div>
        <?php endwhile; endif; ?>
     </div>
</section>
