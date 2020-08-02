            </main>

            <footer class="row no-gutters footer">
                
                <div class="col-sm-5 d-flex align-items-end align-items-lg-center justify-content-between">
                    <p>
                        &copy; <?php echo date( 'Y' ); ?> 
                        <span><?php bloginfo( 'name' ); ?></span>. 
                        All Rights Reserved.
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

        <?php global $sections; ?>

        <?php if ( $sections ) : ?>
            <nav id="scrollspy" class="position-fixed scrollspy">
                <ul class="nav flex-column">
                    
                    <?php foreach( $sections as $id ) : ?>
 
                        <li class="nav-item">
                            <a class="d-block nav-link" href="#<?php echo $id; ?>">
                                <?php 
                                    $title = strtr( $id, '-', ' ' );
                                    $ignore = array (
                                        "is",
                                        "to",
                                        "the",
                                        "a",
                                        "and",
                                        "on",
                                        "as",
                                        "an",
                                        "at",
                                        "for",
                                        "of"
                                    );
                                    $pattern = "~^[a-z]+|\b(?|" . implode("|", $ignore) . ")\b(*SKIP)(*FAIL)|[a-z]+~";
                                    
                                    echo preg_replace_callback(
                                        $pattern, function( $m ) {
                                            return ucfirst( $m[0] );
                                        }, 
                                        $title 
                                    );
                                ?>
                            </a>
                        </li>

                    <?php endforeach; ?>

                </ul>
            </nav>
        <?php endif; ?>

        <?php wp_footer(); ?>

    </body>
</html>