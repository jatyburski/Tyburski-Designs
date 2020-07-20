<?php

function create_posttype() {
 
    register_post_type( 'projects',
        array(
            'labels' => array(
                'name'          => __( 'Projects' ),
                'singular_name' => __( 'Project' )
            ),
            'supports' => array(
                'title', 
                'editor', 
                'excerpt', 
                'thumbnail', 
                'custom-fields',
                'page-attributes'
            ),
            'menu_name'         => 'Projects',
            'menu_icon'         => 'dashicons-images-alt2',
            'public'            => true,
            'has_archive'       => false,
            'rewrite'           => array('slug' => 'projects'),
            'show_ui'           => true,
            'show_in_menu'      => true,
            'show_in_nav_menus' => true,
            'menu_position'     => 4,
            'show_in_rest'      => true,
            'taxonomies'        => array( 
                'category',
                'post_tag' 
            ),
 
        )
    );
}

add_action( 'init', 'create_posttype' );