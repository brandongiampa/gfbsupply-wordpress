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

require_once get_template_directory() . '/inc/register-sidebars.php';

/**
 * Generate breadcrumbs
 * @author CodexWorld
 * @authorURL www.codexworld.com
 */
function get_breadcrumb() {

    echo '<nav aria-label="breadcrumb">';

        echo '<ol class="breadcrumb">';

            echo '<li class="breadcrumb-item">';

                echo '<a href="' . get_home_url() . '">GFB Supply</a> | ';

            echo '</li>';

    echo '<a href="'.home_url().'" rel="nofollow">GFB Supply</a>';
    if (is_category() || is_single()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        the_category(' &bull; ');
            if (is_single()) {
                echo " &nbsp;&nbsp;&#187;&nbsp;&nbsp; ";
                the_title();
            }
    } elseif (is_page()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;";
        echo the_title();
    } elseif (is_search()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo the_search_query();
        echo '</em>"';
    } elseif (is_author()) {
        echo "&nbsp;&nbsp;&#187;&nbsp;&nbsp;Search Results for... ";
        echo '"<em>';
        echo get_the_author_meta( 'first_name' ) . " " . get_the_author_meta( 'last_name' );
        echo '</em>"';
    }

        echo '</ol>';

    echo '</nav>';

}

?>

