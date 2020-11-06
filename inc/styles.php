<?php require_once get_template_directory() . "/inc/styles/global-styles.php"; ?>
<?php require_once get_template_directory() . "/inc/styles/navbar-styles.php"; ?>
<?php require_once get_template_directory() . "/inc/styles/showcase-styles.php"; ?>
<?php require_once get_template_directory() . "/inc/styles/breadcrumb-styles.php"; ?>
<style>



@media only screen and (min-width: 992px) {
    .hero-text h1 {
        font-size: <?php echo get_theme_mod( 'gfbs_headline_font_size', 64 ) . "px" ; ?>  !important; 
    }
    .hero-text p {
        font-size: <?php echo get_theme_mod( 'gfbs_tagline_font_size', 28 ) . "px" ; ?>  !important; 
    }
}
@media only screen and (max-width: 991px) {
    .hero-text h1 {
        font-size: <?php echo get_theme_mod( 'gfbs_headline_font_size_tablet', 56 ) . "px" ; ?>  !important; 
    }
    .hero-text p {
        font-size: <?php echo get_theme_mod( 'gfbs_tagline_font_size_tablet', 24 ) . "px" ; ?>  !important; 
    }
}
@media only screen and (max-width: 767px) {
    .hero-text h1 {
        font-size: <?php echo get_theme_mod( 'gfbs_headline_font_size_mobile', 48 ) . "px" ; ?>  !important; 
    }
    .hero-text p {
        font-size: <?php echo get_theme_mod( 'gfbs_tagline_font_size_mobile', 20 ) . "px" ; ?>  !important; 
    }
}
ul.dropdown-menu li a {
    color: white;
}
.navbar-brand {
    font-family: <?php echo get_theme_mod( 'gfbs_branding_font' ); ?>;
    color: <?php echo get_theme_mod( 'gfbs_branding_font_color' ); ?>;
    font-size: <?php echo get_theme_mod( 'gfbs_branding_font_size' ); ?>;
    font-weight: <?php echo get_theme_mod( 'gfbs_branding_font_weight' ); ?>;
    letter-spacing: <?php echo get_theme_mod( 'gfbs_branding_font_spacing' ); ?>;
}
#gfbs-main-menu {
    font-family: <?php echo get_theme_mod( 'gfbs_navbar_main_font' ); ?>;
    color: <?php echo get_theme_mod( 'gfbs_navbar_main_font_color' ); ?>;
    font-size: <?php echo get_theme_mod( 'gfbs_navbar_main_font_size' ); ?>;
    font-weight: <?php echo get_theme_mod( 'gfbs_navbar_main_font_weight' ); ?>;
    letter-spacing: <?php echo get_theme_mod( 'gfbs_navbar_main_font_spacing' ); ?>;
}
#gfbs-account-menu {
    font-family: <?php echo get_theme_mod( 'gfbs_navbar_account_font' ); ?>;
    color: <?php echo get_theme_mod( 'gfbs_navbar_account_font_color' ); ?>;
    font-size: <?php echo get_theme_mod( 'gfbs_navbar_account_font_size' ); ?>;
    font-weight: <?php echo get_theme_mod( 'gfbs_navbar_account_font_weight' ); ?>;
    letter-spacing: <?php echo get_theme_mod( 'gfbs_navbar_account_font_spacing' ); ?>;
}
.nav-link {
    font-family: <?php echo get_theme_mod( 'gfbs_navbar_links_font_family', 'Roboto' ); ?> !important;
    font-weight: <?php echo get_theme_mod( 'gfbs_navbar_links_font_weight', 400 ); ?> !important;
    font-size: <?php echo get_theme_mod( 'gfbs_navbar_links_font_size', 12 ); ?> !important;
    letter-spacing: <?php echo get_theme_mod( 'gfbs_navbar_links_letter_spacing', 0 ); ?> !important;
    color: <?php echo get_theme_mod( 'gfbs_navbar_links_font_color' ); ?> !important;
}
li.active .nav-link {
    color: <?php echo get_theme_mod( 'gfbs_navbar_links_active_font_color' ); ?> !important;
}
.nav-link:hover {
    text-decoration: underline;
}
nav.navigation.pagination {
    background-color: <?php echo get_theme_mod( 'gfbs_muted_light_color', GFBS_DEFAULT_MUTED_LIGHT_COLOR ); ?> ;
}
.navigation.pagination .nav-links a {
    color: <?php echo get_theme_mod( 'gfbs_dark_color', GFBS_DEFAULT_DARK_COLOR ); ?>!important;
}
</style>

<?php if ( class_exists( 'WooCommerce' ) ): ?>

    <style>

    .onsale {
        background-color: <?php echo get_theme_mod( 'gfbs_wc_onsale_bg_color', get_theme_mod( 'gfbs_primary_color', GFBS_DEFAULT_PRIMARY_COLOR ) ); ?> !important;
        color: <?php echo get_theme_mod( 'gfbs_wc_onsale_font_color', get_theme_mod( 'gfbs_light_color', GFBS_DEFAULT_LIGHT_COLOR ) ); ?> !important;
        font-family: <?php echo get_theme_mod( 'gfbs_wc_onsale_font_family', get_theme_mod( 'gfbs_p_font_family', GFBS_DEFAULT_P_FONT_FAMILY ) ); ?> !important;
        letter-spacing: 1px;
    }
    .woocommerce-loop-product__title {
        color: <?php echo $gfbs_dark_color ?> !important;
        font-weight: <?php echo get_theme_mod( 'gfbs_wc_title_font_weight', get_theme_mod( 'gfbs_h3_font_weight', GFBS_DEFAULT_H3_FONT_WEIGHT ) ); ?> !important;;
        font-family: <?php echo get_theme_mod( 'gfbs_wc_title_font_family', get_theme_mod( 'gfbs_h3_font_family', GFBS_DEFAULT_H3_FONT_FAMILY ) ); ?> !important;
        font-size: 1.1em !important;
    }   
    .woocommerce-loop-product__link p {
        color: <?php //echo $gfbs_dark_color ?> !important;
    }
    .price {
        color: <?php //echo $gfbs_dark_color ?> !important;
    }
    bdi {
        border: none;
    }
    ins {
        text-decoration: none !important;
    }
    .woocommerce-Price-amount, .amount {
        font-weight: 700;
        color: <?php echo get_theme_mod( 'gfbs_dark_color', GFBS_DEFAULT_DARK_COLOR ); ?> !important;
    }
    del .woocommerce-Price-amount, del .amount {
        font-weight: 400;
    }
    ins .woocommerce-Price-amount {
        color: <?php echo get_theme_mod( 'gfbs_primary_color', GFBS_DEFAULT_PRIMARY_COLOR ); ?>!important;
        font-weight: 700;
    }
    .shop-nav-column {
        background-color: <?php echo get_theme_mod( 'gfbs_muted_light_color', GFBS_DEFAULT_MUTED_LIGHT_COLOR ); ?> !important;
    }
    .menu-product-category-menu-container .menu-item a {
        color: <?php echo get_theme_mod( 'gfbs_dark_color', GFBS_DEFAULT_DARK_COLOR ); ?> !important; 
        font-weight: 700;
    }
    .menu-product-category-menu-container .sub-menu .menu-item a {
        font-weight: 600;
    }
    .menu-product-category-menu-container .sub-menu .menu-item-has-children .menu-item a {
        font-weight: 400;
    }
    .woocommerce-message {
        border-top-color: <?php echo get_theme_mod( 'gfbs_success_color', GFBS_DEFAULT_SUCCESS_COLOR ); ?> !important;
    }
    .woocommerce-message::before {
        color: <?php echo get_theme_mod( 'gfbs_success_color', GFBS_DEFAULT_SUCCESS_COLOR ); ?> !important;
    }
    .restore-item {
        color: <?php echo get_theme_mod( 'gfbs_danger_color', GFBS_DEFAULT_DANGER_COLOR ); ?> !important;
    }
    .woocommerce-error {
        border-top-color: <?php echo get_theme_mod( 'gfbs_danger_color', GFBS_DEFAULT_DANGER_COLOR ); ?> !important;
    }
    .woocommerce-error::before {
        color: <?php echo get_theme_mod( 'gfbs_danger_color', GFBS_DEFAULT_DANGER_COLOR ); ?> !important;
    }
    .woocommerce-info {
        border-top-color: <?php echo get_theme_mod( 'gfbs_info_color', GFBS_DEFAULT_INFO_COLOR ); ?> !important;
    }
    .woocommerce-info::before {
        color: <?php echo get_theme_mod( 'gfbs_info_color', GFBS_DEFAULT_INFO_COLOR ); ?> !important;
    }
    .remove.remove_from_cart_button, .woocommerce a.remove {
        color: <?php echo get_theme_mod( 'gfbs_danger_color', GFBS_DEFAULT_DANGER_COLOR ); ?> !important;
    }
    .remove.remove_from_cart_button:hover, .woocommerce a.remove:hover {
        background-color: <?php echo get_theme_mod( 'gfbs_danger_color', GFBS_DEFAULT_DANGER_COLOR ); ?> !important;
    }
    .added_to_cart.wc-forward {
        margin-left: 12px;
    }
    .woocommerce-tabs a {
        color: <?php echo get_theme_mod( 'gfbs_dark_color', GFBS_DEFAULT_DARK_COLOR ); ?> !important;
    }
    a.checkout-button {
        color: <?php echo get_theme_mod( 'gfbs_light_color', GFBS_DEFAULT_LIGHT_COLOR ); ?> !important;
    }
    </style>

<?php endif; ?>