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