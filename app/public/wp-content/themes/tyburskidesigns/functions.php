<?php

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
// Modules
// -----------------------

function layout_get_module($module) {
    return get_template_part('modules/' . $module, '');
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
    $horizontal;  
    $vertical; 
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