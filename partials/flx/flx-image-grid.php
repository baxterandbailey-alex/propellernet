<?php 
$gridTitle = get_sub_field('title');
$gridSubText = get_sub_field('sub_text');
$gridColumns = get_sub_field('grid_columns');
?>

<section class="grid bg-<?php if ($gridBgColour) : echo $gridBgColour; endif;?>">
    <?php if($gridTitle) : ?>
        <p class="grid__title font-freight font-large"><?php echo $gridTitle; ?></p>
    <?php endif; ?>

    <?php if($gridSubText) : ?>
        <div class="grid__text font-freight font-xl"><?php echo $gridSubText; ?></div>
    <?php endif; ?>
    

        <div class="grid__conatiner">
            <div class="grid__img-container grid__<?php if ($gridColumns) : echo $gridColumns; endif; ?>">
            <?php
            if( have_rows('grid_image') ):
                while( have_rows('grid_image') ) : the_row();
                    $image = get_sub_field('image');
                    ?>
                    <div class="grid-item">
                        <!-- Grid Image -->
                        <?php if($image) : ?>
                            <figure class="grid-item__img">
                                <img src="<?php echo $image; ?>" alt="">
                            </figure>
                        <?php endif; ?>
                    </div>
                    <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</section>
