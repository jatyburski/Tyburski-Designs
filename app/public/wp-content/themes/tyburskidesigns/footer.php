        </main>

        <footer class="row no-gutters footer">
            
            <div class="col-lg-5 d-flex align-items-center justify-content-between">
                <p>&copy; <?php echo date('Y'); ?> <span><?php bloginfo('name'); ?></span></p>
                <div class="footer--social">
                    <?php if (have_rows('social_media', 'option')) : ?>
                        <p>
                            <?php while (have_rows('social_media', 'option')) : the_row(); ?>
                                <a href="<?php the_sub_field('link'); ?>" target="_blank">
                                    <i class="fab fa-<?php the_sub_field('platform'); ?>"></i>
                                </a>
                            <?php endwhile; ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>

            <div class="col-lg-2 position-relative">
                <div class="footer--bar"></div>
            </div>

            <div class="col-lg-5 d-flex align-items-center justify-content-end">
                <p>Design &amp; Developed with <i class="fas fa-heart"></i> and <i class="fas fa-music"></i></p>
            </div>

        </footer>

        </div>

        
        <div id="#nav-fullscreen" class="nav-fullscreen--trigger js-nav-fullscreen--trigger">
            <span class="nav-fullscreen--trigger-icon" aria-hidden="true"></span>
        </div>

        <div id="nav-fullscreen" class="nav-fullscreen">
            <div class="nav-fullscreen--content">
                <div class="container-fluid p-0 h-100 d-flex flex-column">

                    <section class="row no-gutters navbar">
                        <nav class="col-lg-6 d-flex align-items-start">
                            <a class="navbar-brand p-0 m-0" href="/"><?php echo get_bloginfo('name'); ?><span><?php echo get_bloginfo('description'); ?></span></a>
                        </nav>
                    </section>

                    <section class="row no-gutters flex-grow-1 align-items-end">

                        <div class="col-lg-1">
                            <?php if (have_rows('social_media', 'option')) : ?>
                                <ul class="text-center p-0 nav-fullscreen--social">
                                    <?php while (have_rows('social_media', 'option')) : the_row(); ?>
                                        <li>
                                            <a href="<?php the_sub_field('link'); ?>" target="_blank">
                                                <i class="fab fa-<?php the_sub_field('platform'); ?>"></i>
                                            </a>
                                        </li>
                                    <?php endwhile; ?>
                                </ul>
                            <?php endif; ?>
                        </div>

                        <div class="col-lg-1">
                            <?php
                                wp_nav_menu([
                                    'menu'            => 'Primary',
                                    'theme_location'  => 'Primary',
                                    'container'       => 'div',
                                    'container_id'    => 'bs4navbar',
                                    'container_class' => 'nav-fullscreen--nav',
                                    'menu_id'         => false,
                                    'menu_class'      => 'navbar-nav',
                                    'depth'           => 1,
                                    'fallback_cb'     => 'bs4navwalker::fallback',
                                    'walker'          => new bs4navwalker()
                                ]);
                            ?>
                        </div>

                        <div class="col-lg-10 h-100">
                        <?php
                                wp_nav_menu([
                                    'menu'            => 'Projects',
                                    'theme_location'  => 'Projects',
                                    'container'       => 'div',
                                    'container_id'    => 'bs4navbar',
                                    'container_class' => 'nav-fullscreen--projects',
                                    'menu_id'         => false,
                                    'menu_class'      => 'navbar-nav',
                                    'fallback_cb'     => 'bs4navwalker::fallback',
                                    'walker'          => new bs4navwalker()
                                ]);
                            ?>
                        </div>

                    </section>
                </div>
            </div>
        </div>

        <?php wp_footer(); ?>

    </body>
</html>