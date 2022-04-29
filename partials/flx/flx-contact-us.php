<?php

$map = get_sub_field('map');
$twitter = get_field('options_social_twitter', 'option');
$facebook = get_field('options_social_facebook', 'option');
$linkedin = get_field('options_social_linkedin', 'option');
$instagram = get_field('options_social_instagram', 'option');
$address = get_field('address', 'option');
$phone = get_field('phone_number', 'option');
$email = get_field('email', 'option');
?>

<div class="contact-us">
    <?php if ($map) : ?>
        <img src="<?php echo $map ?>" alt="map of office location">
    <?php endif; ?>

    <div class="contact-us__details">
        <?php if ($phone) : ?>
            <div class="contact-us__contactBox">
                <p class="font-baseticaMedium font-reg">Call us:</p>
                <p class="font-baseticaLight font-reg"><?php echo $phone ?></p>
            </div>
        <?php endif; ?>
        <?php if ($email) : ?>
            <div class="contact-us__contactBox">
                <p class="font-baseticaMedium font-reg">Emails:</p>
                <a class="font-baseticaLight font-reg" href="mailto:<?php echo $email ?>" target="_blank"><?php echo $email ?></a>
            </div>
        <?php endif; ?>
        <?php if ($address) : ?>
            <div class="contact-us__contactBox">
                <p class="font-baseticaMedium font-reg">Visit us:</p>
                <p class="font-baseticaLight font-reg"><?php echo $address ?></p>
            </div>
        <?php endif; ?>
            <div class="contact-us__contactBox">
                <p class="font-baseticaMedium font-reg">Follow us:</p>
                <?php if($instagram) : ?>
                    <a class="font-baseticaLight font-reg" href="<?php echo $instagram ?>">Instagram</a>
                <?php endif; ?>
                <?php if($twitter ) : ?>
                    <a class="font-baseticaLight font-reg" href="<?php echo $twitter ?>">Twitter</a>
                <?php endif; ?>
                <?php if($facebook) : ?>
                    <a class="font-baseticaLight font-reg" href="<?php echo $facebook ?>">Facebook</a>
                <?php endif; ?>
                <?php if($linkedin) : ?>
                    <a class="font-baseticaLight font-reg" href="<?php echo $linkedin ?>">Linkedin</a>
                <?php endif; ?>
            </div>
    </div>
</div>
