<?php if ( have_rows( 'images_w_caption' ) ) :?>
    <?php while ( have_rows( 'images_w_caption' ) ) : the_row(); ?>

        <figure class="row mb-0 no-gutters w-100">
            <ul class="offset-lg-1 col-lg-10 position-relative project__img">

                <?php $shots = get_sub_field( 'gallery' ); ?>
                <?php foreach( $shots as $shot ) : ?>

                    <?php 
                        $set = get_sub_field( 'set_position' );
                        $position = get_sub_field( 'img_position' );
                        $img_attributes = wp_get_attachment_image_src( $shot, 'full' );
                    ?>

                    <?php if( ( $position == 'right' ) && ( 'true' == $set ) ) : ?>
                        <li class="d-none d-lg-block"></li>
                    <?php endif; ?>

                        <li class="position-relative w-100<?php if ( 'true' == $set ) : echo $postion ? ' project__img--left' : ' project__img--right'; endif; ?>" 
                            style="--aspect-ratio:<?php echo $img_attributes[2] . '/' . $img_attributes[1]; ?>;">

                            <div data-aos="reveal-right" class="position-absolute project__img--reveal"></div>
                            <?php echo wp_get_attachment_image( $shot, 'full', '', array( 'class' => 'position-absolute project-img' ) ); ?>

                        </li>

                    <?php if( ( $position == 'left' ) && ( 'true' == $set ) ) : ?>
                        <li class="d-none d-lg-block"></li>
                    <?php endif; ?>
                    
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