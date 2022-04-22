<?php

/**
 * Site: footer
 *
 * @package BBWP
 */

$ctaText = get_field('cta_text', 'option');
$ctaLink = get_field('cta_link', 'option');
$logo = get_field('logo', 'option');
$address = get_field('address', 'option');
$phone = get_field('phone_number', 'option');
$twitter = get_field('options_social_twitter', 'option');
$facebook = get_field('options_social_facebook', 'option');
$linkedin = get_field('options_social_linkedin', 'option');
$youtube = get_field('options_social_youtube', 'option');
$instagram = get_field('options_social_instagram', 'option');
$bCorpLogo = get_field('b_corp_logo', 'option');


?>
</main>
<section class="cta bg-light-green">
    <p class="cta__text font-large font-freight"><?php echo $ctaText; ?></p>
    <a class="btn" href="<?php echo $ctaLink ?>">GET IN TOUCH</a>
</section>
<footer id="site-footer" class="bg-dark-green">

    <img src="<?php echo $logo; ?>" alt="Logo">
    <div class="footer__grid">
        <!-- WHAT WE DO -->
        <div class="footer__what-we-do">
            <p class="footer__header">What we do</p>
            <div class="footer__links">
            <?php if( have_rows('what_we_do_links', 'option')) :
                    while( have_rows('what_we_do_links', 'option') ) : the_row();
                    $link = get_sub_field('link');
                    $linkText = get_sub_field('link_title');?>
                    <a href="<?php echo $link; ?>"><?php echo $linkText; ?></a>
            <?php endwhile; endif; ?>
            </div>
        </div>
        <div class="footer__middleCol">
            <!-- ABOUT US -->
            <div class="footer__about-us">
                <p class="footer__header">About us</p>
                <div class="footer__links">
                <?php if( have_rows('about_us_links', 'option')) :
                        while( have_rows('about_us_links', 'option') ) : the_row();
                        $link = get_sub_field('link');
                        $linkText = get_sub_field('link_title');?>
                        <a href="<?php echo $link; ?>"><?php echo $linkText; ?></a>
                <?php endwhile; endif; ?>
                </div>
            </div>
            <!-- OUR WORK -->
            <div class="footer__our-work">
                <p class="footer__header">Our work</p>
                <div class="footer__links">
                <?php if( have_rows('our_work_links', 'option')) :
                        while( have_rows('our_work_links', 'option') ) : the_row();
                        $link = get_sub_field('link');
                        $linkText = get_sub_field('link_title');?>
                        <a href="<?php echo $link; ?>"><?php echo $linkText; ?></a>
                <?php endwhile; endif; ?>
            </div>
        </div>

        </div>


        <!-- CONTACT -->
        <div class="footer__contact">
            <p class="footer__header">Contact</p>
            <p>Propellernet</p>
            <p><?php echo $address; ?></p>
            <br />
            <?php if ($phone) : ?>
                <a href="<?php echo $phone ?>"><?php echo $phone ?></a>
            <?php endif; ?>
            <?php if ($instagram) : ?>
                <a href="<?php echo $instagram; ?>">Instagram</a>
            <?php endif; ?>
            <?php if ($twitter) : ?>
                <a href="<?php echo $twitter; ?>">Twitter</a>
            <?php endif; ?>
            <?php if ($facebook) : ?>
                <a href="<?php echo $facebook; ?>">Facebook</a>
            <?php endif; ?>
            <?php if ($linkedin) : ?>
                <a href="<?php echo $linkedin; ?>">LinkedIn</a>
            <?php endif; ?>
            <?php if ($youtube) : ?>
                <a href="<?php echo $youtube; ?>">YouTube</a>
            <?php endif; ?>
        </div>
    </div>

    <div class="footer__policys">
        <div class="footer__policys--links">
            <p>&copy; <?php echo date("Y"); ?> Propellernet</p>
            <a href="#">Terms and Conditions</a>
            <a href="#">Cookies</a>
        </div>
        <div class="footer__policys--img">
            <img src="<?php echo $bCorpLogo ?>" alt="">
        </div>
    </div>

</footer>

<?php wp_footer(); ?>

</body>

</html>