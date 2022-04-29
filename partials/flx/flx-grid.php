<?php 
$gridTitle = get_sub_field('title');
$gridSubText = get_sub_field('sub_text');
$gridColumns = get_sub_field('grid_columns');
$gridBgColour = get_sub_field('background_colour');
$alignment = get_sub_field('grid_alignment');
?>

<section class="grid bg-<?php if ($gridBgColour) : echo $gridBgColour; endif;?>">
    <?php if($gridTitle) : ?>
        <p class="grid__title font-freight font-large"><?php echo $gridTitle; ?></p>
    <?php endif; ?>

    <?php if($gridSubText) : ?>
        <div class="grid__text font-freight font-xl"><?php echo $gridSubText; ?></div>
    <?php endif; ?>
    

    <div class="grid__conatiner grid__<?php if ($gridColumns) : echo $gridColumns; endif; ?>">
        <?php
        if( have_rows('grid_item') ):
            while( have_rows('grid_item') ) : the_row();
                $itemImage = get_sub_field('grid_item_image');
                $itemTitle = get_sub_field('grid_item_title');
                $itemText = get_sub_field('grid_item_text');
                $itemLink = get_sub_field('grid_item_link');
                $itemLinkText = get_sub_field('grid_item_link_text');
                ?>
                <div class="grid-item <?php if ($alignment === 'centre') : echo 'grid-item__centre'; endif ?>">
                    <!-- Grid Image -->
                    <?php if($itemImage) : ?>
                        <figure class="grid-item__img">
                            <img src="<?php echo $itemImage; ?>" alt="">
                        </figure>
                    <?php endif; ?>
                    <!-- Grid Title -->
                    <?php if($itemTitle) : ?>
                        <p class="grid-item__title"><?php echo $itemTitle; ?></p>
                    <?php endif; ?>
                    <!-- Grid Text -->
                    <?php if($itemText) : ?>
                        <p class="grid-item__text"><?php echo $itemText; ?></p>
                    <?php endif; ?>
                    <!-- Grid Link -->
                    <?php if($itemLink) : ?>
                        <a href="<?php echo $itemLink ?>" class="grid-item__link btn">
                            <?php if($itemLinkText) : echo $itemLinkText; endif ;?>
                        </a>
                    <?php endif; ?>
                </div>
                <?php
            endwhile;
        endif;
        ?>
    </div>
</section>
