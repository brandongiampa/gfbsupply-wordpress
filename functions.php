<?php

require_once( get_template_directory() . '/inc/global-constants.php');
require_once( get_template_directory() . '/inc/global-defaults.php');

/**
 * Register Custom Navigation Walker
 */
function gfbs_register_navwalker(){
	require_once get_template_directory() . '/inc/classes/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'gfbs_register_navwalker' );

require_once get_template_directory() . '/inc/customize-register.php';

require_once get_template_directory() . '/inc/enqueue-scripts.php';

register_nav_menus( array(
    'gfbs_main_menu' => __( 'GFB Supply Main Menu', THEME_NAMESPACE ),
    'gfbs_wc_product_category_menu' => __( 'GFB Supply WooCommerce Product Category Menu', THEME_NAMESPACE ),
    'gfbs_logged_in_menu' => __( 'GFB Supply User Logged In Menu', THEME_NAMESPACE ),
    'gfbs_not_logged_in_menu' => __( 'GFB Supply User NOT Logged In Menu', THEME_NAMESPACE )   
));

if ( class_exists( 'WooCommerce' ) ){
    require_once get_template_directory() . '/inc/wc-modifications.php';
}

register_sidebar(array(
    'name' => 'Footer Left',
    'description' => 'Widgets placed here will appear directly above the footer on the left, or at the top for smaller devices.'
));
register_sidebar(array(
    'name' => 'Footer Right',
    'description' => 'Widgets placed here will appear directly above the footer on the right, or at the bottom for smaller devices.'
));

?>

