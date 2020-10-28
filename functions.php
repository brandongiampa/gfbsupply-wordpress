<?php

/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

register_nav_menus( array(
    'gfbs_main_menu' => __( 'GFB Supply Main Menu', 'gfb_supply' ),
    'gfbs_wc_product_category_menu' => __( 'GFB Supply WooCommerce Product Category Menu', 'gfb_supply' ),
    'gfbs_logged_in_menu' => __( 'GFB Supply User Logged In Menu', 'gfb_supply' ),
    'gfbs_not_logged_in_menu' => __( 'GFB Supply User NOT Logged In Menu', 'gfb_supply' )   
));

?>

