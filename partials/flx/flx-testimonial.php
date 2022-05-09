<?php
$bgColour = get_sub_field('background_colour');
$testimonialText = get_sub_field('testimonial_text');
$testimonialAuthor = get_sub_field('testimonial_author');
?>

<section class="testimonial bg-<?php if ($bgColour) : echo $bgColour; endif;?>">

<div class="testimonial__container">

        <?php if ($bgColour === 'light-green') : ?>
            <img class="testimonial__left-bracket" src="<?php echo get_template_directory_uri().'/assets/image/black-bracket-left.png'; ?>">
            <img class="testimonial__right-bracket" src="<?php echo get_template_directory_uri().'/assets/image/black-bracket-right.png'; ?>">
        <?php elseif ($bgColour === 'dark-gray' || $bgColour === 'mid-green') : ?>
            <img class="testimonial__left-bracket" src="<?php echo get_template_directory_uri().'/assets/image/green-bracket-left.png'; ?>">
            <img class="testimonial__right-bracket" src="<?php echo get_template_directory_uri().'/assets/image/green-bracket-right.png'; ?>">
        <?php endif; ?>

    <div class="testimonial__text-box">

        <?php if ($testimonialText) : ?>
            <div class="testimonial__text font-large font-freight <?php if ($bgColour === 'dark-gray' || $bgColour === 'mid-green') :?> white-text <?php endif;?>">
                <?php echo $testimonialText?>
            <div>
        <?php endif; ?>
        <?php if ($testimonialAuthor) : ?>
            <p class="testimonial__author font-baseticaMedium font-mid <?php if ($bgColour === 'dark-gray'|| $bgColour === 'mid-green' ) :?> white-text <?php endif;?>">
                <?php echo $testimonialAuthor?>
            <p>
        <?php endif; ?>
    </div>

</div>
</section>