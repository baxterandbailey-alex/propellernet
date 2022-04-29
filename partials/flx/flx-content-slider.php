<?php
    $sectionTitle = get_sub_field('section_title');
    $introText = get_sub_field('intro_text');
    $bgColour = get_sub_field('background_colour');
?>

<section class="contentSlider bg-<?php if ($bgColour) : echo $bgColour; endif; ?>">

    <?php if ($sectionTitle) : ?>
        <h3 class="font-freight font-large"><?php echo $sectionTitle; ?></h3>
    <?php endif; ?>
    <?php if ($introText) : ?>
        <p class="contentSlider__intro font-baseticaLight font-reg"><?php echo $introText; ?></p>
    <?php endif; ?>
    <div class="contentSlider__slider">
        <div class="splide-two">
            <div class="splide__track">
                <div class="splide__list">
                    <?php if ( have_rows('slider_items')) : 
                        while ( have_rows('slider_items') ) : the_row();
                        $image = get_sub_field('item_image');
                        $title = get_sub_field('item_title');
                        $text = get_sub_field('item_text');
                        $link = get_sub_field('item_link');
                        $linkText = get_sub_field('link_text');
                    ?>
                        <div class="contentSlider__item splide__slide">
                            <?php if ($image ): ?>
                                <img src="<?php echo $image; ?>" alt="">
                            <?php endif; ?>
                            <?php if ($title) : ?>
                                <h4 class="font-freight font-large"><?php echo $title; ?></h4>
                            <?php endif; ?>
                            <?php if ($text) : ?>
                                <p><?php echo $text; ?></p>
                            <?php endif; ?>
                            <?php if ($link && $linkText) : ?>
                                <a href="<?php echo $link ?>" class="btn"><?php echo $linkText ?></a>
                            <?php endif; ?>
                        </div>

                    <?php endwhile; endif; ?>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo get_template_directory_uri()?>/node_modules/@splidejs/splide/dist/js/splide.min.js"></script>
    <script>new Splide( '.splide-two', {
            type   : 'loop',
            perPage: 3,
            breakpoints: {
                768: {
                    perPage: 1,
                },
                1024: {
                    perPage: 2,
                },
            },
            perMove: 1,
            padding: '1rem'
    } ).mount();</script>
</section>