<?php
    $header = get_sub_field('header');
    $text = get_sub_field('text');
    $image = get_sub_field('image');
    $bgColour = get_sub_field('background_colour');
    $blockColour = get_sub_field('block_colour');
    $textColour = get_sub_field('text_colour');
    $order = get_sub_field('order');
?>

<section class="block-text-image bg-<?php if($bgColour) : echo $bgColour; endif; if ($order) : ?> reverse<?php endif; ?> block-<?php if($blockColour) : echo $blockColour; endif;?> ">

    <div class="block-text-image__content">
        <div class="block-text-image__image-box">
            <img src="<?php echo $image; ?>" alt="">
        </div>
        <div class="block-text-image__text-box <?php if ($textColour === 'white') : ?>white-text<?php endif; ?>">
            <h4 class="font-freight font-text-title "><?php echo $header; ?></h4>
            <p class="font-reg"><?php echo $text; ?></p>
        </div>

    </div>

</section>
