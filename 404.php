<?php

/**
 * 404 page
 *
 * @package BBWP
 */

get_header();
?>

<header class="header header-light">

    <div class="header-light__bg bg-parallax">

    </div>

    <div class="header-light__content">
        <h1 data-vas="fade"><?php _e('404', 'bbwp'); ?></h1>
        <a class="scrolldown pulse" href="#content-start" data-vas="fade" data-vas-delay="0.2"></a>
    </div>

</header>
<div id="content-start" aria-hidden="true"></div>

<div class="container">
    <section class="error-404">
        <h2><?php _e('Sorry, no content found', 'bbwp'); ?></h2>
        <p><?php _e('Please use the menus above or below to find content.', 'bbwp'); ?></p>
    </section>
</div>

<?php
get_footer();
