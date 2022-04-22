<?php
$ibImageNumber = get_sub_field('number_of_images');
$ibImageSingle = get_sub_field('image_single');
$ibImageOne = get_sub_field('image_one');
$ibImageTwo = get_sub_field('image_two');
$ibOverlay = get_sub_field('overlay_content');
$ibWidth = get_sub_field('width');
$ibOpacity = get_sub_field('overlay_background_opacity');
?>
<section class="flx flx-imagebanner <?php echo $ibWidth; ?>" data-vas="fade">

    <?php if ($ibImageNumber === 'one') : ?>

        <figure class="flx-imagebanner__image-single">

            <?php echo wp_get_attachment_image($ibImageSingle, 'full'); ?>

            <div class="flx-imagebanner__bgoverlay" <?php if ($ibOpacity) : ?>style="opacity: <?php echo $ibOpacity; ?>;" <?php endif; ?>></div>

            <?php if ($ibOverlay) : ?>
                <div class="flx-imagebanner__content">
                    <div class="flx-imagebanner__content-inner rich-text">
                        <?php echo $ibOverlay; ?>
                    </div>
                </div>
            <?php endif; ?>

        </figure>

    <?php else : ?>

        <div class="flx-imagebanner__image-wrap">

            <figure class="flx-imagebanner__image image-one">
                <?php echo wp_get_attachment_image($ibImageOne, 'full'); ?>
            </figure>
            <figure class="flx-imagebanner__image image-two">
                <?php echo wp_get_attachment_image($ibImageTwo, 'full'); ?>
            </figure>

            <div class="flx-imagebanner__bgoverlay" <?php if ($ibOpacity) : ?>style="opacity: <?php echo $ibOpacity; ?>;" <?php endif; ?>></div>

            <?php if ($ibOverlay) : ?>
                <div class="flx-imagebanner__content">
                    <div class="flx-imagebanner__content-inner rich-text">
                        <?php echo $ibOverlay; ?>
                    </div>
                </div>
            <?php endif; ?>

        </div>

    <?php endif; ?>

</section>