<?php 

$image = get_sub_field('image');
$title = get_sub_field('title');
$arrow = get_sub_field('arrow');
$text = get_sub_field('text');
$link = get_sub_field('link');
$buttonText = get_sub_field('button_text');    

?>


<section class="full-img-link">
    <?php if ( $image ) : ?>
        <figure class="full-img-link__bg">
            <img src="<?php echo $image; ?>" alt="">
        </figure>
    <?php endif; ?>

    <div class="full-img-link__content">
        <?php if ( $title ) : ?>
            <h3 class="font-freight font-xl white-text"><?php echo $title; ?></h3>
        <?php endif; ?>

        <?php if ( $arrow ) : ?>
            <p>arrow</p>
        <?php endif; ?>

        <?php if ( $text ) : ?>
            <p><?php echo $text; ?></p>
        <?php endif; ?>

        <?php if ( $link ) : ?>
            <a href="<?php echo $link; ?>">LINK</a>
        <?php endif; ?>

        <?php if ( $buttonText ) : ?>
            <p><?php echo $buttonText; ?></p>
        <?php endif; ?>
    </div>

</section>