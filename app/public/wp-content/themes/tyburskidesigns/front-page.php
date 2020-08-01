<?php get_header(); ?>

    <section data-aos="fade-in" class="row no-gutters position-relative front-page" id="test">

        <div class="col-xl-6 d-flex flex-column align-items-start justify-content-center order-xl-2 front-page__content">
            <div data-aos="fade-up">
                <h1><?php the_field( 'title' ); ?></h1>
                
                <?php the_field( 'content' ); ?>

                <ul class="d-flex p-0 front-page__buttons">

                    <?php $buttons = get_field( 'buttons' ); ?>
                    <?php foreach( $buttons as $button ) : ?>

                        <li>
                            <a class="d-inline-block m-0 position-relative btn" href="<?php echo $button[ 'link' ][ 'url' ]; ?>">
                                <?php echo $button[ 'link' ][ 'title' ]; ?>
                            </a>
                        </li>

                    <?php endforeach; ?>
                    
                </ul>
            </div>
        </div>

        <div class="col-xl-6 h-100 position-relative order-xl-1 overflow-hidden front-page__image">
            <?php the_post_thumbnail( 'large', array( 'data-aos' => 'zoom-out', 'data-aos-delay' => '800' ) ); ?>
        </div>

        <div class="front-page__pattern" role="presentation"></div>

    </section>

<?php get_footer(); ?>