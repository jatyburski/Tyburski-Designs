<?php

// -----------------------
// Scripts
// -----------------------

function add_theme_scripts() {
    wp_enqueue_script( 'aos', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', array (), '2.3.4', true);
    wp_enqueue_script( 'typetura', 'https://cdn.jsdelivr.net/gh/scottkellum/typetura.js@master/js/typetura.min.js', array (), false, true);
    wp_enqueue_script( 'simple-slider', 'https://cdnjs.cloudflare.com/ajax/libs/simple-slider/1.0.0/simpleslider.min.js', array (), '1.0.0', true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/index.js', array (), false, true);
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );


// -----------------------
// Navigation
// -----------------------

require_once('bs4navwalker.php');
register_nav_menu('primary', 'Primary Menu');
register_nav_menu('projects', 'Projects Menu');


// -----------------------
// Custom Post Type
// -----------------------

function create_posttype() {
 
    register_post_type( 'projects',
        array(
            'labels' => array(
                'name' => __( 'Projects' ),
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
            'menu_icon'         => 'dashicons-images-alt2',
            'public'            => true,
            'has_archive'       => true,
            'rewrite'           => array('slug' => 'projects'),
            'show_ui'           => true,
            'show_in_menu'      => true,
            'show_in_nav_menus' => true,
            'menu_position'     => 4,
            'show_in_rest'      => true,
            'taxonomies'  => array( 
                'category',
                'post_tag' 
            ),
 
        )
    );
}

add_action( 'init', 'create_posttype' );


// -----------------------
// Removed Unused Post Type
// -----------------------

function post_remove () { 
   remove_menu_page('edit.php');
}

add_action('admin_menu', 'post_remove');


// -----------------------
// Featured Image
// -----------------------

add_theme_support('post-thumbnails', array(
    'post',
    'page',
));


// -----------------------
// Theme Options
// -----------------------

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-general-settings',
        'capability' => 'edit_posts',
        'redirect' => false
    ));

}


// -----------------------
// Components
// -----------------------

function layout_get_component($component) {
    return get_template_part('components/' . $component, '');
}


// -----------------------
// Breadcrumbs
// -----------------------

function breadcrumbs() {
    global $wp_query;
    if (!is_front_page()) {
        echo '<ol class="breadcrumb p-0 m-0">';
        if (is_category() || is_single()) {
            if (is_single()) {
                echo '<li class="breadcrumb-item">' . get_the_title() . '</a></li>';
            }
            else {
                the_category('<span>/</span>');
            }
        } 
        elseif (is_page()) {
            echo '<li class="breadcrumb-item">' . get_the_title() . '</a></li>';
        }
        echo "</ol>";
    }
}


// -----------------------
// Pattern
// -----------------------

function pattern_rectangle($rows, $columns) { 
    for ($horizontal = 1; $horizontal <= $rows; $horizontal++) { 
        for ($vertical = 1; $vertical <= $columns; $vertical++) { 
            if ($horizontal == 1 || $horizontal == $rows ||  
                $vertical == 1 || $vertical == $columns)          
                echo("+ ");          
            else
                echo("+ ");          
        } 
        echo("\n"); 
    } 
} 