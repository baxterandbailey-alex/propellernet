<?php
$txtColumns = get_sub_field('columns');
$txtContent = get_sub_field('content_single_text');
$txtColumnOne = get_sub_field('column_one_text');
$txtColumnTwo = get_sub_field('column_two_text');
$txtHeading = get_sub_field('heading_text');
$txtSubheading = get_sub_field('subheading_text');
?>
<section class="flx flx-text" data-vas="fade">

    <?php if ($txtColumns === 'one') : ?>

        <div class="flx-text__column rich-text">
            <?php echo $txtContent; ?>
        </div>

    <?php else : ?>

        <?php if ($txtHeading) : ?>
            <h2 class="heading"><?php echo $txtHeading; ?></h2>
        <?php endif; ?>

        <?php if ($txtSubheading) : ?>
            <h3 class="subheading"><?php echo $txtSubheading; ?></h3>
        <?php endif; ?>

        <div class="flx-text_wrap">
            <div class="flx-text__column rich-text">
                <?php echo $txtColumnOne; ?>
            </div>
            <div class="flx-text__column rich-text">
                <?php echo $txtColumnTwo; ?>
            </div>
        </div>

    <?php endif; ?>

</section>