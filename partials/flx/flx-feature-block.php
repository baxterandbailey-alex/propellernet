<?php
$fbImage = get_sub_field('image');
$fbHeader = get_sub_field('header');
$fbText = get_sub_field('text');
$fbButton = get_sub_field('button');
$fbOrder = get_sub_field('order');
$fbBackgroundColour = get_sub_field('background_colour');

?>

<section class="feature-block <?php if ($fbOrder) : ?>reverse<?php endif; ?> bg-<?php if ($fbBackgroundColour) : echo $fbBackgroundColour; endif;?>">
    <div class="feature-block__grid">
        <div class="feature-block__img ">
            <?php if ($fbImage) : ?>
            <figure>
                <img src="<?php echo $fbImage; ?>" alt="">
            </figure>
            <?php endif; ?>
        </div>

        <div class="feature-block__content">
            <?php if ($fbHeader) : ?>
                <div class="feature-block__header font-xl font-freight">
                    <?php echo $fbHeader; ?>
                </div>
            <?php endif; ?>

            <?php if ($fbText) : ?>
                <div class="feature-block__text font-reg">
                    <?php echo $fbText; ?>
                    <?php if ($fbButton) : ?>
                        <a href="<?php echo $fbButton; ?>" class="feature-block__link btn">SEE OUR</a>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        </div>
    </div>
    
</section>
