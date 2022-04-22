<?php

/**
 * Site: Header hero
 * 
 * @package BBWP
 */
?>

<?php
if (have_rows('header_hero')) :
    while (have_rows('header_hero')) : the_row();

        $headerImage = get_sub_field('header_hero_image');
        $headerPrehead = get_sub_field('header_hero_preheading');
        $headerHeading = get_sub_field('header_hero_heading');
        $headerSubhead = get_sub_field('header_hero_subheading');
?>

        <header class="header header-hero">

            <div class="header-hero__overlay"></div>

            <figure class="header-hero__image-wrap">
                <?php
                // Background image
                echo wp_get_attachment_image($headerImage['id'], 'full', "", ["class" => "header-hero__image bg-parallax"]);
                ?>
            </figure>

            <div class="header-hero__content">

                <div class="header-hero__content-inner" data-vas="fade">
                    <?php if ($headerPrehead) : ?>
                        <span><?php echo $headerPrehead; ?></span>
                    <?php endif; ?>

                    <h1 class="headline"><?php echo $headerHeading; ?></h1>

                    <?php if ($headerSubhead) : ?>
                        <p><?php echo $headerSubhead; ?></p>
                    <?php endif; ?>

                </div>

            </div>

            <a class="scrolldown pulse" href="#content-start" data-vas="fade" data-vas-delay="0.2"></a>

        </header>
        <div id="content-start" aria-hidden="true"></div>

<?php
    endwhile;
endif;
?>