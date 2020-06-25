<?php $arr = get_query_var('button'); ?>

<?php if ( $arr ) : ?>
    <section class="row no-gutters position-relative">
        <?php layout_get_component('arrow'); ?>

        <div class="offset-1 col-10">
            <?php 
                if ($arr['kicker']) {
                    $align = 'start';
                    $icon = '<i class="far fa-long-arrow-right position-absolute"></i>';
                } else {
                    $align = 'center';
                } 
            ?>
            <a class="d-flex flex-column align-items-<?php echo $align; ?> justify-content-center position-relative btn--large" href="<?php echo $arr['url']; ?>">
                <?php 
                    if ($arr['kicker']) {
                        echo '<span>' . $arr['kicker'] . '</span>';
                    }
                    echo $arr['title'];
                    echo $icon; 
                ?>
            </a>
        </div>
    </section>
<?php endif; ?>