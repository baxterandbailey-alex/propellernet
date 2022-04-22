<?php

/**
 * Site: Header select
 * 
 * @package BBWP
 */

$headerSelect = get_field('header_select'); // hero, image, light
if ($headerSelect) :

    if ($headerSelect == 'hero') :
        get_template_part('partials/header', 'hero');

    elseif ($headerSelect == 'image') :
        get_template_part('partials/header', 'image');

    elseif ($headerSelect == 'light') :
        get_template_part('partials/header', 'light');

    endif;

endif;
