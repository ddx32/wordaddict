<?php

function create_post_types() {
    register_post_type( 'issue',
        array(
            'labels' => array(
                'name' => __( 'Issues' ),
                'singular_name' => __( 'Issue' )
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'issue')
        )
    );
}

add_action( 'init', 'create_post_types' );