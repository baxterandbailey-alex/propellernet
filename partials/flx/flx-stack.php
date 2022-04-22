<?php

$stack_id = get_sub_field('content_stack_item');

if (get_sub_field('content_stack_item') != '' && get_post_status($stack_id) == 'publish') {

    // Flexible content START

    if (have_rows('flexible_content', $stack_id)) :
        while (have_rows('flexible_content', $stack_id)) : the_row();
            get_template_part('partials/content', 'flexible-rows');
        endwhile;
    endif;
}
