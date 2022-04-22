<?php $anchor = nelson_clean_anchor(get_sub_field('anchor_text')); ?>

<div class="flx flx-anchor" id="<?php echo $anchor; ?>">
    <?php if (current_user_can('edit_posts')) { ?>
        <span><?php echo '#' . $anchor; ?></span>
    <?php } ?>
</div>