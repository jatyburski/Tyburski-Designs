<section class="row no-gutters position-relative about" id="hero">
    <div class="col-xl-6 d-flex flex-column align-items-start justify-content-center about__hero">
        <h2 data-aos="fade-up">I'm <span><?php bloginfo('name'); ?></span>
        </h2>

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