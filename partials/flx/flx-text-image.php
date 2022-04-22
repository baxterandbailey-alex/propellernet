<?php
$tiImage = get_sub_field('image');
$tiLink = get_sub_field('link');
$tiOrder = get_sub_field('order');
$sectionHeader = get_sub_field('section_header');
$textTitle = get_sub_field('text_title');
$bgColour = get_sub_field('background_colour');
?>
<section class="flx flx-textimage <?php if ($tiOrder) : ?>reverse<?php endif; ?> bg-<?php if($bgColour) : echo $bgColour; endif;?>">

    <?php if ($sectionHeader) : ?>
        <h3 class="font-freight font-large"><?php echo $sectionHeader; ?></h3>
    <?php endif; ?>

    <div class="flx-textimage__container">
        <figure class="flx-textimage__image" data-vas="fade" data-vas-delay="0.2">
            <?php echo wp_get_attachment_image($tiImage, 'full'); ?>
        </figure>

        <div class="flx-textimage__content rich-text" data-vas="fade">
            <?php if ($textTitle) : ?>
                <h4 class="font-freight font-text-title"><?php echo $textTitle; ?></h4>
            <?php endif; ?>

            <div class="font-baseticaLight font-reg">
                <?php the_sub_field('content'); ?>
            </div>


            <?php if ($tiLink) : ?>
                <a class="btn btn-block btn-mtop" href="<?php echo $tiLink['url']; ?>" target="<?php echo $tiLink['target']; ?>" title="<?php echo $tiLink['title']; ?>"><?php echo $tiLink['title']; ?></a>
            <?php endif; ?>
        </div>
    </div>

   
</section>
