<nav class="d-sm-none tabs__container">
    
    <ul class="d-flex align-items-center justify-content-between m-0 w-100 tabs__nav">
        <?php 
            $nav = wp_get_nav_menu_items( 'Mobile' );
            $nav_items = array_slice( $nav, 0, 2 );
            $arr = [
                'menu-items'    => $nav_items
            ];

            set_query_var( 'tab', $arr );
            layout_get_component( 'tab-menu' , 'nav' );
        ?>
    
        <!-- <li class="tabs__circle">

            <div class="tabs__circle--gooey">
                <input type="checkbox" class="tabs__circle--open" name="tabs__circle--open" id="tabs__circle--open"/>
                <label class="m-0 tabs__circle--inner" for="tabs__circle--open">
                    <span class="tabs__circle__hamburger"></span>
                </label>
                
                <?php if ( have_rows( 'social_media', 'option' ) ) : ?>

                    <?php while ( have_rows( 'social_media', 'option' ) ) : the_row(); ?>
                        <a class="tabs__circle__item" href="<?php the_sub_field( 'link' ); ?>" aria-label="<?php the_sub_field( 'platform' ); ?>" rel="nofollow noopener" target="_blank">
                            <i class="fab fa-<?php the_sub_field( 'platform' ); ?>"></i>
                        </a>
                    <?php endwhile; ?>

                    <svg xmlns="http://www.w3.org/2000/svg" version="1.1">
                        <defs>
                        <filter id="shadowed-goo">
                            <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
                            <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                            <feGaussianBlur in="goo" stdDeviation="3" result="shadow" />
                            <feColorMatrix in="shadow" values="0 0 0 0 0  0 0 0 0 0  0 0 0 0 0  0 0 0 1 -0.2" result="shadow" />
                            <feOffset in="shadow" dx="1" dy="1" result="shadow" />
                            <feComposite in2="shadow" in="goo" result="goo" />
                            <feComposite in2="goo" in="SourceGraphic" result="mix" />
                        </filter>
                        <filter id="goo">
                            <feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10" />
                            <feColorMatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 18 -7" result="goo" />
                            <feComposite in2="goo" in="SourceGraphic" result="mix" />
                        </filter>
                        </defs>
                    </svg>

                <?php endif; ?>
            </div>

        </li> -->

        <?php 
            $nav_items = array_slice($nav, -2);
            $arr = [
                'menu-items'    => $nav_items
            ];
            
            set_query_var( 'tab', $arr );
            layout_get_component( 'tab-menu' , 'nav' );
        ?>

    </ul>

</nav>