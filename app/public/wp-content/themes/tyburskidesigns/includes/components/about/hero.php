<section class="row no-gutters position-relative about">
    <div class="col-xl-6 d-flex flex-column align-items-start justify-content-center about__hero">
        <h1 data-aos="fade-up">I am <span><?php bloginfo('name'); ?></span>
        </h1>

            <ul class="m-0 p-0 d-flex flex-column flex-md-row align-items-start">

                <?php $titles = get_field( 'titles' ); ?>

                <?php foreach ( $titles as $title ) : ?>
                    <li data-aos="fade-up">
                        <?php echo $title[ 'title' ]; ?>
                    </li>
                <?php endforeach; ?>

            </ul>
    </div>

    <div class="col-xl-6 h-100 overflow-hidden about__image">
        <?php the_post_thumbnail( 'large', array( 'data-aos' => 'zoom-out', 'data-aos-delay' => '800' ) ); ?>
    </div>

    <div class="position-absolute mouse" role="presentation">
        <div class="d-block mouse__scroll"></div>
    </div>
</section>