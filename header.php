<?php

/**
 * Site: header
 *
 * @package BBWP
 */

 $headerImg = get_field('header_image');
 $headerTitle = get_field('header_title');
 $headerText = get_field('header_text');
 $headerLink = get_field('header_link');

 $serviceTitle = get_field('service_title');
 $serviceImage = get_field('service_image');

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri()?>/node_modules/@splidejs/splide/dist/css/splide.min.css">

    <?php
    // Favicon
    get_template_part('partials/site/site', 'favicon');
    ?>

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <?php wp_body_open(); ?>

    <a class="skip-link screen-reader-text" href="#site-content"><?php esc_html_e('Skip to content', 'bbwp'); ?></a>

    <!-- SERVICES HEADER -->
    <?php if( $serviceTitle ) : ?>
        <header class="nav-down nav service-header">
            <?php get_template_part('partials/site/site', 'navbar'); ?>
            <div class="service-header__content">
                <div class="service-header__image">
                    <img class="service-header__bracket" src="<?php echo get_template_directory_uri().'/assets/image/black-bracket-left.png'; ?>">
                    <img class="service-header__icon" src="<?php echo $serviceImage; ?>" alt="servie icon">
                    <img class="service-header__bracket" src="<?php echo get_template_directory_uri().'/assets/image/black-bracket-right.png'; ?>">
                </div>

                <div class="service-header__title">
                    <h2 class="font-freightItalic font-intro service-header__service">SERVICES</h2>
                    <h2 class="font-freight font-intro"><?php echo $serviceTitle; ?></h2>
                </div>
               
            </div>
        </header>

        <div class="process__backBtn">
            <img src="<?php echo get_template_directory_uri().'/assets/image/left-arrow.png'; ?>">
            <a class="font-baseticaLight" href="<?php echo site_url('/what-we-do'); ?>">ALL SERVICES</a>
        </div>
    <?php else : ?>

    <!-- SITE HEADER -->
    <header id="site-header" class="nav-down nav">
        <?php get_template_part('partials/site/site', 'navbar'); ?>
        <?php if ( $headerImg ) : ?>
            <img src="<?php echo $headerImg; ?>" alt="header" class="header__background">
        <?php endif; ?>
        <div class="header__content">

            <?php if ( $headerTitle ) : ?>
                <div class="header__quote">
                    <img class="header__left-bracket" src="<?php echo get_template_directory_uri().'/assets/image/white-bracket-left.png'; ?>">
                    <h2 class="white-text font-freight font-xl"><?php echo $headerTitle; ?></h2>
                    <img class="header__right-bracket" src="<?php echo get_template_directory_uri().'/assets/image/white-bracket-right.png'; ?>">
                </div>
            <?php endif; ?>
            <?php if ( $headerText ) : ?>
                <p class="white-text font-baseticaLight font-reg header__subText"><?php echo $headerText; ?></p>
            <?php endif; ?>
            <?php if( $headerLink ) : ?>
                <div class="header__btnContainer">
                    <a class="white-text" href="<?php echo $headerLink; ?>">SEE OUR</a>
                    <img src="<?php echo get_template_directory_uri().'/assets/image/white-btn-arrow.png'; ?>" alt="">
                </div>

            <?php endif; ?>
        </div>
    </header>
    <?php endif; ?>

    <div class="navbar-menu">
        <?php
        // Desktop
        wp_nav_menu(array(
            'theme_location'    => 'menu-1',
            'menu_id'           => 'menu-main',
            'container'         => false
        ));
        ?>
    </div>

    <main id="site-content">