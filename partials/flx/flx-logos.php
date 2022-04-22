<section class="flx flx-logos">

    <?php if (get_sub_field('heading')) : ?>
        <div class="flx-logos__heading" data-vas="fade">
            <h2><?php the_sub_field('heading'); ?></h2>
        </div>
    <?php endif; ?>

    <?php if (have_rows('logos')) : ?>
        <div class="flx-logos__logos" data-vas="fade">
            <?php
            while (have_rows('logos')) : the_row();
                $logosImg = get_sub_field('logo');
                $logosLink = get_sub_field('logo_link');
                if ($logosLink) :
            ?>
                    <a class="flx-logos__logos-item" href="<?php echo $logosLink['url']; ?>" target="<?php echo $logosLink['target']; ?>">
                        <img src="<?php echo $logosImg; ?>">
                    </a>
                <?php else : ?>
                    <div class="flx-logos__logos-item">
                        <img src="<?php echo $logosImg; ?>">
                    </div>
            <?php
                endif;
            endwhile;
            ?>
        </div>
    <?php endif; ?>

</section>