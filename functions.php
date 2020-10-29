<?php

/**
 * Register Custom Navigation Walker
 */
function gfbs_register_navwalker(){
	require_once get_template_directory() . '/inc/classes/class-wp-bootstrap-navwalker.php';
}
add_action( 'after_setup_theme', 'gfbs_register_navwalker' );

require_once get_template_directory() . '/inc/customize-register.php';

function gfbs_enqueue_scripts() {
    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '4.5.3', true );
    wp_enqueue_style( 'style_and_bootstrap', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
}
add_action( 'wp_enqueue_scripts', 'gfbs_enqueue_scripts');

function gfbs_admin_scripts() {
    wp_enqueue_style( 'google_fonts', 'https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,700;1,400;1,700&family=Grenze+Gotisch:wght@100;200;300;400;500;600;700;800;900&family=Oswald:wght@200;300;400;500;600;700&family=Play:wght@400;700&family=Righteous&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap' );
    wp_enqueue_style( 'admin_styles', get_template_directory_uri() . '/admin/style.css' );
}
add_action( 'admin_enqueue_scripts', 'gfbs_admin_scripts', 1000);


register_nav_menus( array(
    'gfbs_main_menu' => __( 'GFB Supply Main Menu', 'gfb_supply' ),
    'gfbs_wc_product_category_menu' => __( 'GFB Supply WooCommerce Product Category Menu', 'gfb_supply' ),
    'gfbs_logged_in_menu' => __( 'GFB Supply User Logged In Menu', 'gfb_supply' ),
    'gfbs_not_logged_in_menu' => __( 'GFB Supply User NOT Logged In Menu', 'gfb_supply' )   
));

?>

