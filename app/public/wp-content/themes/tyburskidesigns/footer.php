        </main>

        <footer class="row no-gutters footer">
            
            <div class="col-lg-5 d-flex align-items-center justify-content-between">
                <p>&copy; <?php echo date('Y'); ?> <span><?php bloginfo('name'); ?></span>. All Rights Reserved.</p>
                <div class="footer--social">
                    <?php if (have_rows('social_media', 'option')) : ?>
                        <p>
                            <?php while (have_rows('social_media', 'option')) : the_row(); ?>
                                <a href="<?php the_sub_field('link'); ?>" rel="nofollow noopener" target="_blank">
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
                <p>Designed &amp; Hand Coded with <i class="fas fa-heart"></i> and <i class="fas fa-music"></i></p>
            </div>

        </footer>

        </div>

        <?php wp_footer(); ?>

    </body>
</html>