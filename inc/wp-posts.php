<?php
////---------- WP: ADD CUSTOM POST TYPES ----------////

// Stack CPT
function bbwp_cpt_stack()
{
    register_post_type(
        'stack',
        array(
            'label'         => 'Stacks',
            'labels'        => array(
                'name'          => __('Content Stacks'),
                'singular_name' => __('Stack')
            ),
            'public'        => false,
            'has_archive'   => false,
            'show_ui'       => true,
            'show_in_menu'  => true,
            'menu_position' => 20,
            'menu_icon'     => 'dashicons-images-alt2',
            'rewrite'       => array(
                'slug'       => 'stack',
                'with_front' => false
            )
        )
    );
}
add_action('init', 'bbwp_cpt_stack');

// PROJECTS

function project_custom_posts() {

	$args = array(
		'labels' => array (
			'name' => 'Projects',
			'singular_name' => 'Project',
		),
		'public' => true,
      
		'has_archive' => true,
		'menu_icon' => 'dashicons-portfolio',
        'supports' => array('title', 'thumbnail', 'custom-fields', 'excerpt'),
        'rewrite'   => array('slug' => 'our-work'),
	);

	register_post_type( 'projects', $args);
}

add_action('init', 'project_custom_posts');