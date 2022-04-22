<?php
$accHeading = get_sub_field('heading');
?>
<section class="flx flx-accordion">

    <?php if ($accHeading) : ?>
        <h2><?php echo $accHeading; ?></h2>
    <?php endif; ?>

    <?php
    if (have_rows('accordion_rows')) :
        $ac = 0;
    ?>
        <div class="flx-accordion__rows">
            <?php
            while (have_rows('accordion_rows')) : the_row();
                $ac++;
                $accRowHead = get_sub_field('heading');
                $accRowContent = get_sub_field('content');
            ?>
                <div class="flx-accordion__row" data-vas="fade" data-vas-delay="0.<?php echo $ac; ?>">
                    <div class="flx-accordion__row-heading">
                        <h3><span><?php echo str_pad($ac, 2, '0', STR_PAD_LEFT); ?>.</span><?php echo $accRowHead; ?></h3>
                    </div>
                    <div class="flx-accordion__row-content rich-text">
                        <?php echo $accRowContent; ?>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    <?php endif; ?>

</section>