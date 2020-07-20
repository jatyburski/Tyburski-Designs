<?php $arr = get_query_var( 'button' ); ?>

<?php if ( $arr ) : ?>
    <div class="row no-gutters position-relative">
        <div data-aos="fade-down" class="d-flex flex-column position-absolute btn__arrow">
            <?php echo str_repeat( '<span>+</span>', 4 ); ?>
        </div>

        <div class="offset-xl-1 col-xl-10">
            <?php 
                if ( ! $arr[ 'kicker' ] ) {
                    $align = 'center';
                } else {
                    $align = 'start';
                    $icon = '<i class="fal fa-long-arrow-right position-absolute"></i>';
                } 
            ?>
            <a class="d-flex flex-column align-items-<?php echo $align; ?> justify-content-center position-relative btn--lg" href="<?php echo $arr[ 'url' ]; ?>">
                <?php 
                    if ( $arr[ 'kicker' ] ) {
                        echo '<span>' . $arr[ 'kicker' ] . '</span>';
                    }
                    echo $arr[ 'title' ];
                    echo $icon; 
                ?>
            </a>
        </div>
    </div>
<?php endif; ?>