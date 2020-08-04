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
                echo get_the_title( get_option( 'page_for_posts', true ) );
            } else {
                echo '<a href="' . get_post_type_archive_link( 'post' ) . '">' . get_the_title( get_option( 'page_for_posts', true ) ) . '</a>';
            }
            
            echo '</li>';

            if ( is_single() ) {
                echo '<li class="' . $breadcrumb_classes . ' d-none d-sm-block">' . get_the_title() . '</li>';
            }

        } elseif ( is_page() ) {
            echo '<li class="' . $breadcrumb_classes . '">' . get_the_title() . '</li>';
        }

        echo "</ol>";

    }
}