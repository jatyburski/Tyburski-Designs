<?php
    global $sections;

    $content = get_sub_field( 'blurb' ); 

    preg_match_all( '#<h2>(.*?)</h2>#', $content, $matches );

    $title = implode( ' ', $matches[1] );
    $lowercase = strtolower( $title );
    $id = strtr( $lowercase, ' ', '-' );
    $sections[] = $id;
?>

<div id="<?php echo $id; ?>" class="offset-1 offset-lg-3 col-10 col-lg-6">
    <?php echo $content; ?>
</div>