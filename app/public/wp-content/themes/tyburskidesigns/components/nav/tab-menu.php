<?php 
    $arr = get_query_var( 'tab' ); 

    global $post;
    $post_id = $post->ID;
?>

<?php foreach ( $arr[ 'menu-items' ] as $nav_item ) : ?>
    <?php $icon = get_field( 'icon', $nav_item ); ?>

    <li>
        <?php if (( $post_id == $nav_item->object_id ) || is_home() == $nav_item->object_id) : ?>

            <a class="d-block text-center tabs__nav-items tabs__nav-items--active" href="<?php echo $nav_item->url; ?>">
                <i class="d-block fas fa-<?php echo $icon; ?>"></i>
                <?php echo $nav_item->title; ?>
            </a>

        <?php else : ?>

            <a class="d-block text-center tabs__nav-items" href="<?php echo $nav_item->url; ?>">
                <i class="d-block fal fa-<?php echo $icon; ?>"></i>
                <?php echo $nav_item->title; ?>
            </a>

        <?php endif; ?>
    </li>
    
<?php endforeach; ?>