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

    <a href="<?php echo $link; ?>">
        <div class="full-img-link__content">
            <?php if ( $title ) : ?>
                <h3 class="font-freight font-xl white-text"><?php echo $title; ?></h3>
            <?php endif; ?>

            <?php if ( $arrow ) : ?>
                <img class="full-img-link__arrow" src="<?php echo get_template_directory_uri().'/assets/image/long-white-arrow.png'; ?>">
            <?php endif; ?>

            <?php if ( $text ) : ?>
                <div class="white-text font-baseticaLight font-reg"><?php echo $text; ?></div>
            <?php endif; ?>

            <?php if ( $buttonText ) : ?>
                <a href="<?php echo $link; ?>" class="btn-white">
                    <?php if ( $buttonText ) : ?>
                        <?php echo $buttonText; ?>
                    <?php endif; ?>
                </a>
            <?php endif; ?>
        </div>
    </a>

</section>
