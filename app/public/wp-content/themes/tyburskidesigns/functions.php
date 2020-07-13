<?php

// -----------------------
// Scripts
// -----------------------

function add_theme_scripts() {
    wp_enqueue_script( 'aos', 'https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js', array (), '2.3.4', true);
    wp_enqueue_script( 'typetura', 'https://cdn.jsdelivr.net/gh/scottkellum/typetura.js@master/js/typetura.min.js', array (), false, true);
    wp_enqueue_script( 'parallax', 'https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js', array (), '1.0.0', true);
    wp_enqueue_script( 'font-awesome', 'https://kit.fontawesome.com/ce83ebeb69.js', array (), false, true);
    wp_enqueue_script( 'handle-bars', 'https://cdnjs.cloudflare.com/ajax/libs/handlebars.js/1.0.0.beta6/handlebars.min.js', array (), false, true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/js/index.js', array (), false, true);
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function add_async_attribute($tag, $handle) {
    $scripts_to_async = array('jquery', 'font-awesome');
    
    foreach($scripts_to_async as $async_script) {
       if ($async_script === $handle) {
          return str_replace(' src', ' async src', $tag);
       }
    }
    return $tag;
 }

 add_filter('script_loader_tag', 'add_async_attribute', 10, 2);


// -----------------------
// Navigation
// -----------------------

require_once('bs4navwalker.php');
register_nav_menu('primary', 'Primary Menu');
register_nav_menu('projects', 'Projects Menu');
register_nav_menu('mobile', 'Mobile Menu');


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
    'projects',
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
        if (is_home() || is_single()) {
            if (is_home()) {
                echo '<li class="breadcrumb-item text-uppercase p-0" aria-current="page">' . get_the_title(get_option('page_for_posts', true)) . '</li>';
            }
            else {
                echo '<li class="breadcrumb-item breadcrumb-item--truncate text-uppercase p-0"><a href="' . get_post_type_archive_link('post') . '">' . get_the_title(get_option('page_for_posts', true)) . '</a></li><li class="breadcrumb-item d-none d-md-block text-uppercase p-0" aria-current="page">' . get_the_title() . '</li>';
            }
        }
        if (is_404()) {
            echo '<li class="breadcrumb-item text-uppercase p-0" aria-current="page">Page Not Found</li>';
        }
        elseif (is_page()) {
            echo '<li class="breadcrumb-item text-uppercase p-0" aria-current="page">' . get_the_title() . '</a></li>';
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


// -----------------------
// Remove Default Pre Titles
// -----------------------

add_filter( 'get_the_archive_title', 'remove_pre_title' );

function remove_pre_title( $title ) {
	if ( is_category() ) {
		$title = single_cat_title( '', false );
	} elseif ( is_tag() ) {
		$title = single_tag_title( '', false );
	} elseif ( is_post_type_archive() ) {
		$title = post_type_archive_title( '', false );
	} elseif ( is_tax() ) {
		$title = single_term_title( '', false );
	} elseif ( is_home() ) {
		$title = single_post_title( '', false );
	}
	return $title;
}