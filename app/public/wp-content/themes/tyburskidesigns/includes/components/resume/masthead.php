<section class="row no-gutters resume">
    <div class="offset-1 col-lg-6 resume__person">
        <h1 data-aos="fade-up"><?php bloginfo( 'name' ); ?></h1>
        <p data-aos="fade-up" data-aos-delay="600"><strong><?php the_field( 'title' ); ?></strong></p>
    </div>

    <aside class="offset-1 col-10 col-lg-3 resume__contact">
        <?php $contact = get_field( 'contact' ); ?>
        <?php if ($contact) : ?>

            <ul class="m-0 p-0">
                <li data-aos="fade-up" class="mb-0">
                    <span><i class="far fa-map-marker-alt"></i><?php echo $contact[ 'location' ]; ?></span>
                </li>
                <li data-aos="fade-up" data-aos-delay="600">
                    <a class="d-inline-block position-relative btn m-0" href="tel:<?php echo preg_replace( '/[^\dxX]/', '', $contact[ 'phone' ] ); ?>">
                        <i class="far fa-phone"></i>
                        <?php echo $contact[ 'phone' ]; ?>
                    </a>
                </li>
                <li data-aos="fade-up" data-aos-delay="700">
                    <a class="d-inline-block position-relative btn m-0" href="mailto:<?php echo $contact['email']; ?>">
                        <i class="far fa-envelope-open-text"></i>
                        <?php echo $contact[ 'email' ]; ?>
                    </a>
                </li>
                <li data-aos="fade-up" data-aos-delay="800">
                    <?php 
                        $url = home_url();
                        $domain = parse_url( $url, PHP_URL_HOST );
                    ?>
                    <a class="d-inline-block position-relative btn m-0" href="<?php echo home_url( '/', 'https' ); ?>">
                        <i class="far fa-link"></i><?php echo $domain; ?>
                    </a>
                </li>
            </ul>

        <?php endif; ?>
    </aside>
</section>