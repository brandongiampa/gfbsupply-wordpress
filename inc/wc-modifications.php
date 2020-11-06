<?php

function gfbs_modify_wc() {
    add_action( 'woocommerce_before_main_content', 'gfbs_open_container_row', 5 );

    function gfbs_open_container_row() {
        echo '<div class="container shop-content"><div class="row">';
    }

    add_action( 'woocommerce_after_main_content', 'gfbs_close_container_row', 5 );

    function gfbs_close_container_row() {
        echo '</div></div>';
    }

    remove_action( 'woocommerce_sidebar', 'woocommerce_get_sidebar' );//pass priority as third argument if not 10 

    if ( is_shop() ){
        add_action( 'woocommerce_before_main_content', 'gfbs_add_sidebar_tags', 6 );
        function gfbs_add_sidebar_tags() {
            echo '<div class="sidebar-shop col-lg-3 col-md-4 order-2 order-md-1">';
        }

        add_action( 'woocommerce_before_main_content', 'gfbs_get_product_menu_sidebar', 7 );

        function gfbs_get_product_menu_sidebar() {
            echo '<h3>Categories</h3>';
            wp_nav_menu(array(
                'theme_location' => 'gfbs_wc_product_category_menu',
                'menu_class' => 'list-group'
            ));
        }

        add_action( 'woocommerce_before_main_content', 'gfbs_close_sidebar_tags', 8 );
        function gfbs_close_sidebar_tags() {
            echo '</div>';
        }
    }

    add_action( 'woocommerce_before_main_content', 'gfbs_add_shop_tags', 9 );
    function gfbs_add_shop_tags() {
        if ( is_shop() ){
            echo '<div class="col-lg-9 col-md-8 order-1 order-md-2">';
        }
        else {
            echo '<div class="col">';
        }
    }

    if ( is_product() ) {
        add_action( 'woocommerce_after_main_content', 'gfbs_wc_add_related_products', 5 );
        function gfbs_wc_add_related_products() {
            echo '<div class="container">';
            do_shortcode('[related_products limit=”4″]');
            echo '</div>';
        }
    }

    add_action( 'woocommerce_after_main_content', 'gfbs_close_shop_tags', 4 );
    function gfbs_close_shop_tags() {
        echo '</div>';
    }

    // add_filter( 'woocommerce_show_page_title', 'gfbs_remove_shop_title' );
    // function gfbs_remove_shop_title() {
    //     return false;
    // }

    add_action( 'woocommerce_after_shop_loop_item_title', 'the_excerpt', 1);

    function gfbs_echo_hr() {
        echo '<hr>';
    }
    add_action( 'woocommerce_before_shop_loop', 'gfbs_echo_hr', 11 );

    function gfbs_add_description_header() {
        echo 'Description: ';
    }
    add_action( 'woocommerce_before_main_content', 'gfbs_add_description_header', 11 );
}
add_action( 'wp', 'gfbs_modify_wc');
?>