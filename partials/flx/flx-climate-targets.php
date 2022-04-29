<?php 
    $title = get_sub_field('title');
    $intro = get_sub_field('intro');
    $bgColour = get_sub_field('background_colour');
    $textColor = get_sub_field('text_colour');
?>

<section class="climate bg-<?php if($bgColour) : echo $bgColour; endif;?>">
    <div class="climate__content">
        <div class="climate__heading <?php if ($textColor === 'white') : ?>white-text<?php endif; ?>">
            <?php if ($title) : ?>
                <h4 class="font-freight font-large"><?php echo $title; ?></h4>
            <?php endif; ?>
            <?php if ($intro) : ?>
                <p class="font-baseticaLight climate__intro font-reg"><?php echo $intro; ?></p>
            <?php endif; ?>
        </div>
        <div class="climate__targets">
        <?php $num = 1 ?>
        <?php
        if( have_rows('targets') ):
            while( have_rows('targets') ) : the_row();
                $number = get_sub_field('target_number');
                $colour = get_sub_field('target_colour');
                $textColour = get_sub_field('target_text_colour');
                $title = get_sub_field('target_title');
                $text = get_sub_field('target_sub_text');
                ?>
                <div class="climate__targetItem">
                    
                    <div class="climate__number bg-<?php if($colour) : echo $colour; endif;?><?php echo ' climate__dot'.($num++) ;?>">
                        <p class="font-beyondInfinity <?php if ($textColour === 'white') : ?>white-text<?php endif; ?>"><?php echo $number ?></p>
                    </div>

                    <div class="climate__subText <?php if ($textColor === 'white') : ?>white-text<?php endif; ?>">
                        <p class="font-baseticaMedium"><?php echo $title; ?></p>
                        <p class="font-baseticaLight"><?php echo $text; ?></p>
                    </div>
                </div>
                <?php
            endwhile;
        endif;
        ?>
        </div>
    </div>
</section>