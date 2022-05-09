<?php
$introTitle = get_sub_field('title');
$introText = get_sub_field('text');
$introOffest = get_sub_field('text_offset');
$whatWeDo = get_sub_field('what_we_did');
$bgColour = get_sub_field('background_colour');
$textColour = get_sub_field('text_colour');
?>

<section class="intro bg-<?php if($bgColour) : echo $bgColour; endif;?>">
    <?php if ($introTitle) : ?>
        <div class="intro-title <?php if ($textColour === 'white') : ?>white-text<?php endif; ?>">
            <div class="font-freight font-intro"><?php echo $introTitle; ?></div>
        </div>
    <?php endif; ?>

    <?php if (!$whatWeDo && $introText) : ?>
        <div class="intro-text <?php if ($introOffest) : echo $introOffest; endif; ?>">
            <p class="<?php if ($textColour === 'white') : ?>white-text<?php endif; ?>"><?php echo $introText; ?></p>
        </div>
    <?php endif; ?>
    
    <?php if($whatWeDo) : ?>
    <div class="intro__what-we-do">
        <?php if ($introText) : ?>
            <div class="<?php if ($textColour === 'white') : ?>white-text<?php endif; ?>">
                <p><?php echo $introText; ?></p>
            </div>
        <?php endif; ?>
        <div class="intro__what-we-do-title">
            <p class="font-baseticaMedium <?php if ($textColour === 'white') : ?>white-text<?php endif; ?>">What we did</p>
        </div>
        <div class="intro__what-we-do-container <?php if ($textColour === 'white') : ?>white-text<?php endif; ?>">
            <?php if( have_rows('what_we_did') ):
                    while( have_rows('what_we_did') ) : the_row();
                    $item = get_sub_field('item');?>
                    <p><?php echo $item; ?></p>
            <?php
                endwhile;
            endif;
            ?>
        </div>

        <?php endif; ?>
    </div>
</section>