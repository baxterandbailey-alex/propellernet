<?php 

$title = get_sub_field('title');
$text = get_sub_field('text');
$link = get_sub_field('link');
$linkText = get_sub_field('link_text');
$img = get_sub_field('image');

?>

<section class="work-link">
    <div class="work-link__textBox">
        <h4 class="font-freight font-large"><?php echo $title; ?></h4>
        <p class="font-baseticaLight font-mid"><?php echo $text; ?></p>
        <a class="btn-white" href="<?php echo $link ?>"><?php echo $linkText; ?></a>
    </div>
    <figure>
        <img src="<?php echo $img ?>" alt="">
    </figure>
</section>