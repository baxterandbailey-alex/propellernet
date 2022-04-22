<?php
$ctaContent = get_sub_field('content');
$ctaLink = get_sub_field('link');
$ctaImage = get_sub_field('image');
$ctaTheme = get_sub_field('theme');
?>
<section class="flx flx-cta" data-vas="fade">

    <div class="flx-cta__wrap <?php echo $ctaTheme; ?><?php if ($ctaImage) : ?> has-image<?php endif; ?>">

        <div class="flx-cta__content rich-text <?php echo $ctaTheme; ?><?php if ($ctaImage) : ?> has-image<?php endif; ?>">
            <?php echo $ctaContent; ?>

            <?php if ($ctaLink) : ?>
                <a class="btn btn-block btn-mtop" href="<?php echo $ctaLink['url']; ?>" target="<?php echo $ctaLink['target']; ?>" title="<?php echo $ctaLink['title']; ?>"><?php echo $ctaLink['title']; ?></a>
            <?php endif; ?>
        </div>

        <?php if ($ctaImage) : ?>
            <figure class="flx-cta__image">
                <?php echo wp_get_attachment_image($ctaImage, 'large'); ?>
            </figure>
        <?php endif; ?>

    </div>

</section>