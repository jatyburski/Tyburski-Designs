<?php

function breadcrumbs() {

    global $post;
    $breadcrumb_classes = 'breadcrumb-item p-0 text-uppercase';

    if ( ! is_front_page() ) {

        echo '<ol class="breadcrumb p-0 m-0">';  

        if ( is_404() ) {
            echo '<li class="' . $breadcrumb_classes . '">Page Not Found</li>';
        }

        elseif ( is_home() || is_single() ) {

            echo '<li class="' . $breadcrumb_classes . ( is_single() ? ' breadcrumb-item--truncate' : '' ) . '">';
            
            if ( is_home() == ! $post->post_parent ) {
                echo '<h1>' . get_the_title( get_option( 'page_for_posts', true ) ) . '</h1>';
            } 
            else {
                echo '<a href="' . get_post_type_archive_link( 'post' ) . '">' . get_the_title( get_option( 'page_for_posts', true ) ) . '</a>';
            }
            
            echo '</li>';

            if ( is_single() ) {
                echo '<li class="' . $breadcrumb_classes . ' d-none d-sm-block"><h1>' . get_the_title() . '</h1></li>';
            }

        } elseif ( is_page() ) {
            echo '<li class="' . $breadcrumb_classes . '"><h1>' . get_the_title() . '</h1></li>';
        }

        echo "</ol>";

    }
}