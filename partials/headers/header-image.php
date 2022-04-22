<?php

/**
 * Site: Header Image
 * 
 * @package BBWP
 */
?>

<?php
if (have_rows('header_image')) :
    while (have_rows('header_image')) : the_row();
        $headerImage = get_sub_field('header_image_image');
        $headerHeading = get_sub_field('header_image_heading');
        $headerOverlay = get_sub_field('header_image_overlay');
?>

        <header class="header header-image">

            <?php
            // Background image
            echo wp_get_attachment_image($headerImage['id'], 'full', "", ["class" => "header-image__image bg-parallax"]);
            ?>

            <div class="header-image__overlay" <?php if ($headerOverlay) : ?>style="opacity: <?php echo $headerOverlay; ?>;" <?php endif; ?>></div>

            <div class="header-image__content">

                <div class="header-image__content-inner">
                    <?php if ($headerHeading) : ?>
                        <h1 data-vas="fade"><?php echo $headerHeading; ?></h1>
                    <?php else : ?>
                        <h1 data-vas="fade"><?php the_title(); ?></h1>
                    <?php endif; ?>

                    <?php
                    global $post;
                    if (function_exists('bcn_display') && $post->post_parent != 0) :
                    ?>
                        <div class="breadcrumbs breadcrumbs-dark" typeof="BreadcrumbList" vocab="https://schema.org/">
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