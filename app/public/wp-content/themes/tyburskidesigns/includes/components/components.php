<?php

function layout_get_component( $component, $path = NULL ) {
    $path = $path . '/';

    return get_template_part( 'includes/components/' . $path . $component, '' );
}