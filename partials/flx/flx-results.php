<?php
    $title = get_sub_field('title');
    $introText = get_sub_field('intro_text');
?>

<section class="results bg-light-green">
    <p class="font-freight font-large"><?php echo $title; ?></p>
    <p class="font-baseticaLight font-reg"><?php echo $introText; ?></p>
    <div class="results__container">
        <?php
            if( have_rows('results') ):
                while( have_rows('results') ) : the_row();
                $number = get_sub_field('result_number');
                $text = get_sub_field('result_text');

                ?>
                <div class="results__item">
                    <img  src="<?php echo get_template_directory_uri().'/assets/image/black-bracket-left.png'; ?>">
                    <div class="results__text-box">
                        <p class="font-beyondInfinity results__numbers"><?php echo $number;?> %</p>
                        <p><?php echo $text;?></p>
                    </div>    
                    <img  src="<?php echo get_template_directory_uri().'/assets/image/black-bracket-right.png'; ?>">
                </div>

        <?php endwhile; endif; ?>
    </div>
</section>
