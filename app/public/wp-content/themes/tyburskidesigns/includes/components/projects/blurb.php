<?php
    $content = get_sub_field( 'blurb' ); 

    preg_match_all( '#<h2>(.*?)</h2>#', $content, $matches );

    $title = implode( ' ', $matches[1] );

    $lowercase = strtolower( $title );
    $id = strtr( $lowercase, ' ', '-' );
    $id_array = get_query_var( 'id' );
    var_dump($id_array);

    set_query_var( 'id', $id );
?>

<div id="<?php echo $id; ?>" class="offset-1 offset-lg-3 col-10 col-lg-6">
    <?php 
        echo $content;

        wp_reset_query();
    ?>
</div>