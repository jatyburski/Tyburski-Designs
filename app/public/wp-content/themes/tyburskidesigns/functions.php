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
    wp_enqueue_script( 'tweenjs', 'https://cdnjs.cloudflare.com/ajax/libs/tweenjs/0.6.1/tweenjs.min.js', array (), false, true);
    wp_enqueue_script( 'tweenmax', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js', array (), false, true);
    wp_enqueue_script( 'scrollmagic', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/ScrollMagic.min.js', array (), false, true);
    wp_enqueue_script( 'scrollmagicanimation', 'https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.5/plugins/animation.gsap.js', array (), false, true);
    wp_enqueue_script( 'main', get_template_directory_uri() . '/dist/app.js', array (), false, true);
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function defer_parsing_of_js( $url ) {

    if ( is_admin() ) return $url;
    if ( false === strpos( $url, '.js' ) ) return $url;
    // if ( strpos( $url, 'jquery.js' ) ) return $url;
    if ( strpos( $url, 'typetura.js' ) ) return $url;
    if ( strpos( $url, 'smush-lazy-load.min.js' ) ) return $url;

    return str_replace( ' src', ' defer src', $url );

}

add_filter( 'script_loader_tag', 'defer_parsing_of_js', 10 );


// -----------------------
// Components
// -----------------------

require_once('includes/components/components.php');
require_once('includes/components/theme-options.php');


// -----------------------
// Navigation
// -----------------------

require_once('includes/functions/nav/breadcrumbs.php');
require_once('includes/functions/nav/bs4navwalker.php');

register_nav_menu('primary', 'Primary Menu');
register_nav_menu('projects', 'Projects Menu');
register_nav_menu('mobile', 'Mobile Menu');


// -----------------------
// Post Types
// -----------------------

require_once('includes/functions/post-types/posts.php');
require_once('includes/functions/post-types/projects.php');

add_theme_support('post-thumbnails', array(
    'projects',
    'page',
));