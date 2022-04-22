<?php

/**
 * Site: Header Light
 * 
 * @package BBWP
 */
?>

<?php
if (have_rows('header_light')) :
    while (have_rows('header_light')) : the_row();
        $headerHeading = get_sub_field('header_light_heading');
?>

        <header class="header header-light">

            <!-- <div class="header-light__bg bg-parallax">
                <img src="<?php echo bloginfo('template_url'); ?>/assets/img/header-bg-right.png">
            </div> -->

            <div class="header-light__content">

                <div class="header-light__content-inner">
                    <?php if ($headerHeading) : ?>
                        <h1 data-vas="fade"><?php echo $headerHeading; ?></h1>
                    <?php else : ?>
                        <h1 data-vas="fade"><?php the_title(); ?></h1>
                    <?php endif; ?>

                    <?php
                    global $post;
                    if (function_exists('bcn_display') && $post->post_parent != 0) :
                    ?>
                        <div class="breadcrumbs breadcrumbs-light" typeof="BreadcrumbList" vocab="https://schema.org/">
                            <?php bcn_display(); ?>
                        </div>
                    <?php endif; ?>

                </div>

                <a class="scrolldown pulse" href="#content-start" data-vas="fade" data-vas-delay="0.2"></a>

            </div>

        </header>
        <div id="content-start" aria-hidden="true"></div>

<?php
    endwhile;
endif;
?>