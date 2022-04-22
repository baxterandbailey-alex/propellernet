<?php
$introTitle = get_sub_field('title');
$introText = get_sub_field('text');
$introOffest = get_sub_field('text_offset');
$whatWeDo = get_sub_field('what_we_did');
?>

<section class="intro">
    <?php if ($introTitle) : ?>
        <div class="intro-title">
            <h2 class="font-freight font-intro"><?php echo $introTitle; ?></h2>
        </div>
    <?php endif; ?>

    <?php if (!$whatWeDo && $introText) : ?>
        <div class="intro-text <?php if ($introOffest) : echo $introOffest; endif; ?>">
            <p><?php echo $introText; ?></p>
        </div>
    <?php endif; ?>
    
    <?php if($whatWeDo) : ?>
    <div class="intro__what-we-do">
        <?php if ($introText) : ?>
            <div>
                <p><?php echo $introText; ?></p>
            </div>
        <?php endif; ?>
        <div class="intro__what-we-do-title">
            <p class="font-baseticaMedium">What we did</p>
        </div>
        <div class="intro__what-we-do-container">
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
