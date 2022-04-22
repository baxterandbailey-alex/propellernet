<?php

/**
 * Content: Flexible
 * 
 * @package BBWP
 */

if (have_rows('flx')) :
    while (have_rows('flx')) : the_row();

        get_template_part('partials/flx/flx', 'rows');

    endwhile;
endif;
