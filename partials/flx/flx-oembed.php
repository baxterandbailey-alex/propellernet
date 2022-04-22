<?php
$oemMedia = get_sub_field('media_url');
$oemWidth = get_sub_field('width');
$oemAspect = get_sub_field('aspect_ratio');
?>
<section class="flx flx-oembed <?php echo $oemWidth; ?>" data-vas="fade">

    <?php
    if ($oemAspect) :
        $padding = ($oemAspect['aspect_ratio_height'] / $oemAspect['aspect_ratio_width']) * 100;
    ?>

        <div class="flx-oembed__wrap" style="padding-bottom: <?php echo $padding; ?>%;">
            <?php echo $oemMedia; ?>
        </div>

    <?php else : ?>

        <div class="flx-oembed__wrap">
            <?php echo $oemMedia; ?>
        </div>

    <?php endif; ?>

</section>