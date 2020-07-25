<?php if ( have_rows( 'images_w_caption' ) ) :?>
    <?php while ( have_rows( 'images_w_caption' ) ) : the_row(); ?>

        <figure class="row mb-0 no-gutters project__img-container">

                <ul class="col-12 m-0 position-relative project__img">

                    <?php $shots = get_sub_field( 'gallery' ); ?>

                    <?php foreach( $shots as $shot ) : ?>
                        <li class="large-image">
                            <?php echo wp_get_attachment_image( $shot, 'full' ); ?>
                        </li>
                    <?php endforeach; ?>

                </ul>


            <?php $caption = get_sub_field( 'caption' ); ?>
            <?php if ($caption) : ?>

                <?php
                    global $sections;

                    preg_match_all( '#<h3>(.*?)</h3>#', $caption, $matches );

                    $title = implode( ' ', $matches[1] );
                    $lowercase = strtolower( $title );
                    $id = strtr( $lowercase, ' ', '-' );
                    $sections[] = $id;
                ?>

                <figcaption id="<?php echo $id; ?>" class="offset-1 offset-lg-3 col-10 col-lg-6 project__img-caption">
                    <?php echo $caption; ?>
                </figcaption>
                
            <?php endif; ?>
            
        </figure>
        
    <?php endwhile; ?>
<?php endif; ?>