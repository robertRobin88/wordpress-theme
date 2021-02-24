<?php 
add_filter('wp_nav_menu_args', 'prefix_nav_menu_args');
function prefix_nav_menu_args($args = ''){
    $args['container'] = false;
    return $args;
}

add_theme_support('post-thumbnails');
add_filter('show_admin_bar', '__return_false');
function register_my_menus()
{
    register_nav_menus(
        array(
            'top-menu' => ('Menu nagłówek'),
            'sidebar' => ('Menu boczne'),
        )
        );
}
add_action('init', 'register_my_menus');

?>

