<?php 
    $arr = get_query_var( 'tab' ); 

    global $wp_query;
    $post_id = $wp_query->queried_object_id;
?>

<?php foreach ( $arr[ 'menu-items' ] as $nav_item ) : ?>
    <?php $icon = get_field( 'icon', $nav_item ); ?>

    <li>
        <a class="d-block text-center tabs__nav-items<?php echo $post_id == $nav_item->object_id ? ' tabs__nav-items--active' : '' ?>" href="<?php echo $nav_item->url; ?>">
            <i class="d-block fas fa-<?php echo $icon; ?>"></i>
            <?php echo $nav_item->title; ?>
        </a>
    </li>
    
<?php endforeach; ?>