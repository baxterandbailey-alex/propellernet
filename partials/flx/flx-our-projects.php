<?php
$projectsSectionTitle = get_sub_field('title');
?>

<section class="our-projects">

    <?php if ($projectsSectionTitle) : ?>
        <div class="our-projects__header">
            <h2 class="font-freight font-large"><?php echo $projectsSectionTitle; ?></h2>
            <a class="baseticaLight" href="<?php echo site_url('/our-work'); ?>">VIEW ALL</a>
        </div>
    <?php endif; ?>

    <div class="splide">
    <div class="splide__track">
        <div class="splide__list">
            <?php if( have_rows('slides')): 
                while( have_rows('slides') ) : the_row();
                $slideImg = get_sub_field('project_image');
                $slideProject = get_sub_field('project_title');
                $slideLink = get_sub_field('project_link');
                $overlay = get_sub_field('image_overlay');
                ?>
            <div class="splide__slide" data-splide-interval="10000">
                <?php if ($overlay) : ?>
                    <div class="img-overlay"></div>
                <?php endif; ?>
                <figure class="splide__img">
                    <img src="<?php echo $slideImg; ?>" alt="">
                </figure>
                <div class="splide__link">
                    <a href="<?php echo $slideLink; ?>">see <?php echo $slideProject; ?>'s case study</a>
                                        <img src="<?php echo get_template_directory_uri().'/assets/image/white-btn-arrow.png'; ?>" alt="">
                </div>
                <div class="splide__title">
                    <img class="header__left-bracket" src="<?php echo get_template_directory_uri().'/assets/image/white-bracket-left.png'; ?>">
                        <p class="font-beyondInfinity"><?php echo $slideProject; ?></p>
                    <img class="header__right-bracket" src="<?php echo get_template_directory_uri().'/assets/image/white-bracket-right.png'; ?>">
                </div>
            </div>

            <?php endwhile; endif; ?>
        </div>
    </div>
    </div>
    <script src="<?php echo get_template_directory_uri()?>/node_modules/@splidejs/splide/dist/js/splide.min.js"></script>
    <script>new Splide( '.splide', {
        type: 'loop',
        perPage: 1,
        autoplay: true
    } ).mount();</script>
</section>