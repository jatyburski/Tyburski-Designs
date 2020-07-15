<?php if ( have_rows( 'images_w_caption' ) ) :?>
    <?php while ( have_rows( 'images_w_caption' ) ) : the_row(); ?>

        <figure class="row no-gutters">

            <?php $shots = get_sub_field( 'gallery' ); ?>
            <?php if ( $shots ) : ?>

                <ul class="col-12 position-relative project__img">

                    <?php foreach( $shots as $shot ) : ?>
                        <li><?php echo wp_get_attachment_image( $shot, 'full' ); ?> </li>
                    <?php endforeach; ?>
                    
                </ul>

            <?php endif; ?>

            <figcaption class="offset-1 offset-lg-3 col-10 col-lg-6 project__img-caption">
                <?php the_sub_field( 'caption' ); ?>
            </figcaption>
            
        </figure>
        
    <?php endwhile; ?>
<?php endif; ?>