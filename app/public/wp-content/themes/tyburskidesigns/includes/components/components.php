<?php

function layout_get_component( $component, $path = '', $id = '' ) {
    $path = $path . '/';

    if ( $id ) {
        set_query_var( 'id', $id );
    }

    return get_template_part( 'includes/components/' . $path . $component, '' );
}