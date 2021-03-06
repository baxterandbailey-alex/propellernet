<?php 
    $imageOne = get_sub_field('image_one');
    $imageTwo = get_sub_field('image_two');
    $imageThree = get_sub_field('image_three');
    $wordOne = get_sub_field('word_one');
    $wordTwo = get_sub_field('word_two');
    $wordThree = get_sub_field('word_three');
    $title = get_sub_field('title');
?>

<section class="three-words-images">
    <?php if ($title) :?>
        <h4 class="three-words-images__title font-freight font-large"><?php echo $title; ?></h4>
    <?php endif; ?>
    <div class="three-words-images__container">
        <div class="three-words-images__text">
            <a href="<?php echo site_url('/meet-the-team'); ?>">
                <p class="three-words-images__text-one font-freight"><?php echo $wordOne; ?></p>
                <p class="three-words-images__text-two font-freight"><?php echo $wordTwo; ?></p>
                <p class="three-words-images__text-three font-freight"><?php echo $wordThree; ?></p>
            </a>
        </div>
        <img class="three-words-images__image-one" src="<?php echo $imageOne; ?>" alt="">

        <img class="three-words-images__image-two" src="<?php echo $imageTwo; ?>" alt="">

        <img class="three-words-images__image-three" src="<?php echo $imageThree; ?>" alt="">

    </div>
</section>