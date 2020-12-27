<button data-aos="fade-right" data-aos-delay="100" id="#nav-fullscreen" class="border-0 position-fixed nav-fullscreen--trigger js-nav-fullscreen--trigger">
    <span class="position-absolute nav-fullscreen--trigger__icon" aria-hidden="true"></span>
    <span class="sr-only">Menu</span>
</button>

<div id="nav-fullscreen" class="position-fixed text-center text-xl-left nav-fullscreen">
    <div class="nav-fullscreen__content">
        <div class="container-fluid p-0 d-flex flex-column">

            <div class="row no-gutters position-absolute navbar">
                <nav class="col-xl-6 d-flex align-items-start">
                    <?php layout_get_component( 'logo' , 'nav' ); ?>
                </nav>
            </div>

            <div class="row no-gutters flex-grow-1 align-items-end">

                <div class="order-xl-3 offset-1 offset-xl-0 col-10 h-lg-100">
                    <?php
                        wp_nav_menu([
                            'menu'            => 'Projects',
                            'theme_location'  => 'Projects',
                            'container_class' => 'nav-fullscreen__projects',
                            'menu_class'      => 'navbar-nav',
                            'fallback_cb'     => 'bs4navwalker::fallback',
                            'walker'          => new bs4navwalker()
                        ]);
                    ?>
                </div>

                <div class="order-xl-2 offset-1 offset-xl-0 col-10 col-xl-1">
                    <?php
                        wp_nav_menu([
                            'menu'            => 'Primary',
                            'theme_location'  => 'Primary',
                            'container_class' => 'nav-fullscreen__nav',
                            'menu_class'      => 'navbar-nav d-flex align-items-center align-items-xl-start',
                            'depth'           => 1,
                            'fallback_cb'     => 'bs4navwalker::fallback',
                            'walker'          => new bs4navwalker()
                        ]);
                    ?>
                </div>

                <div class="order-lg-1 offset-1 offset-xl-0 col-10 col-xl-1">
                    <?php if ( have_rows( 'social_media', 'option' ) ) : ?>
                        <ul class="text-center p-0 nav-fullscreen__social">
                            
                            <?php while ( have_rows( 'social_media', 'option' ) ) : the_row(); ?>
                                <li>
                                    <a href="<?php the_sub_field( 'link' ); ?>" aria-label="<?php the_sub_field( 'platform' ); ?>" rel="nofollow noopener" target="_blank">
                                        <i class="fab fa-<?php the_sub_field( 'platform' ); ?>"></i>
                                    </a>
                                </li>
                            <?php endwhile; ?>

                        </ul>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </div>
</div>