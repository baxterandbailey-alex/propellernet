<?php
$title = get_sub_field('title');
$textBox = get_sub_field('text_box');
$caseStudyName = get_sub_field('case_study_name');
$caseStudyLink = get_sub_field('case_study_link');
$caseStudyImage = get_sub_field('case_study_image');
$caseStudyService = get_sub_field('case_study_service');
$backgroundColour = get_sub_field('background_colour');
?>

<section class="process bg-<?php if($backgroundColour) : echo $backgroundColour; endif;?>">
    <?php if ($title) : ?>
        <h3 class="process__title font-freight font-large"><?php echo $title; ?></h3>
    <?php endif; ?>

    <?php if ($textBox) : ?>
        <div class="process__textbox font-baseticaLight font-reg"><?php echo $textBox; ?></div>
    <?php endif; ?>

    <?php if ($caseStudyName) : ?>
        <div class="process__casestudy">
            <img class="process__img" src="<?php echo $caseStudyImage; ?>" alt="">
            <div class="process__service">
                <p class="white-text font-baseticaMedium font-small"><?php echo $caseStudyService; ?></p>
                <p class="white-text font-baseticaLight font-small">CASE STUDY</p>
            </div>
            <div class="process__casestudyName">
                <img  src="<?php echo get_template_directory_uri().'/assets/image/white-bracket-left.png'; ?>">
                <p class="font-beyondInfinity white-text"><?php echo $caseStudyName; ?></p>
                <img  src="<?php echo get_template_directory_uri().'/assets/image/white-bracket-right.png'; ?>">
            </div>
            <div class="process__link">
                <a class="white-text font-baseticaLight font-reg" href="<?php echo $caseStudyLink; ?>">See <?php echo $caseStudyName; ?> case study</a>
                <img class="service-header__bracket" src="<?php echo get_template_directory_uri().'/assets/image/white-btn-arrow.png'; ?>">
            </div>
        </div>
    <?php endif; ?>
</section>