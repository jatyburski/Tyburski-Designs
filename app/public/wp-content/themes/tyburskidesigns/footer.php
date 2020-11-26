            </main>

            <footer class="row no-gutters footer">
                
                <div class="col-sm-5 d-flex align-items-end align-items-lg-center justify-content-between">
                    <p>
                        c — <?php echo date( 'Y' ); ?>. 
                        <span>All Rights Reserved.</span>
                    </p>
                    <div class="footer__social">
                        <?php if (have_rows( 'social_media', 'option' )) : ?>
                            <p>

                                <?php while ( have_rows( 'social_media', 'option' ) ) : the_row(); ?>
                                    <a href="<?php the_sub_field( 'link' ); ?>" aria-label="<?php the_sub_field( 'platform' ); ?>" rel="nofollow noopener" target="_blank">
                                        <i class="fab fa-<?php the_sub_field( 'platform' ); ?>"></i>
                                    </a>
                                <?php endwhile; ?>

                            </p>
                        <?php endif; ?>
                    </div>
                </div>

                <div class="col-2 position-relative">
                    <div class="footer__bar" role="presentation"></div>
                </div>

                <div class="col-sm-5 d-flex align-items-end align-items-lg-center justify-content-sm-end">
                    <p>
                        Designed &amp; Coded with
                        <i class="fas fa-heart"><span class="sr-only">love</span></i> and 
                        <i class="fas fa-music"><span class="sr-only">music</span></i>
                    </p>
                </div>

            </footer>

        </div>
        <!-- end SITE CONTAINER -->

        <?php layout_get_component( 'scrollspy', 'nav' ); ?>

        <?php wp_footer(); ?>

    </body>
</html>