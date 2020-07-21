<?php 
    get_header();

    layout_get_component( 'hero', 'about' );

    layout_get_component( 'content', 'about' );

    layout_get_component( 'goals', 'about' );

    layout_get_component( 'image-fullwidth', 'about' );

    layout_get_component( 'awards', 'about' );

    $button_lg = get_field( 'connect' );
    $button_arr = $button_lg[ 'link' ];
    $arr = [
        'kicker' => $button_lg[ 'kicker' ],
        'url' => $button_arr[ 'url' ],
        'title' => $button_arr[ 'title' ]
    ];

    set_query_var( 'button', $arr );
    layout_get_component( 'button-lg' ); 

    get_footer(); 
?>