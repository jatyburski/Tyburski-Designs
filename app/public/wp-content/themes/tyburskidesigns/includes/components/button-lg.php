<div class="row no-gutters position-relative">

    <div data-aos="fade-down" class="d-flex flex-column position-absolute btn__arrow">
        <?php echo str_repeat( '<span aria-hidden="true">+</span>', 4 ); ?>
    </div>

    <div class="offset-xl-1 col-xl-10">
        <?php $arr = get_query_var( 'button' ); ?>

        <a class="d-flex flex-column align-items-<?php echo $arr[ 'kicker' ] ? ' start' : 'center' ?> justify-content-center position-relative btn--lg" href="<?php echo $arr[ 'url' ]; ?>">
            
            <?php 
                if ( $arr[ 'kicker' ] ) {
                    echo '<span>' . $arr[ 'kicker' ] . '</span>';
                    echo '<i class="fal fa-long-arrow-right position-absolute"></i>'; 
                }

                echo $arr[ 'title' ];
            ?>

        </a>
    </div>

</div>