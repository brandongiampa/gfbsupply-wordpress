<style>
body {
    background-color: <?php echo get_theme_mod( 'gfbs_light_color', GFBS_DEFAULT_LIGHT_COLOR ); ?> !important;
}
.navbar-brand{
    font-family: <?php echo get_theme_mod( 'gfbs_navbar_branding_font_family', GFBS_DEFAULT_BRANDING_FONT_FAMILY ); ?> !important;
    font-weight: <?php echo get_theme_mod( 'gfbs_navbar_branding_font_weight', GFBS_DEFAULT_H1_FONT_WEIGHT ); ?> !important;
    font-size: <?php echo get_theme_mod( 'gfbs_navbar_branding_font_size', GFBS_DEFAULT_BRANDING_FONT_SIZE ); ?> !important;
    color: <?php echo get_theme_mod( 'gfbs_navbar_branding_font_color', GFBS_DEFAULT_LIGHT_COLOR ); ?> !important;
    letter-spacing: <?php echo get_theme_mod( 'gfbs_navbar_branding_letter_spacing', GFBS_DEFAULT_BRANDING_LETTER_SPACING ); ?> !important;
}
header nav a, footer nav a {
    font-family: <?php echo get_theme_mod( 'gfbs_navbar_link_font_family', GFBS_DEFAULT_P_FONT_FAMILY ); ?> !important;
    font-weight: <?php echo get_theme_mod( 'gfbs_navbar_link_font_weight', GFBS_DEFAULT_NAVBAR_LINK_FONT_WEIGHT ); ?> !important;
    font-size: <?php echo get_theme_mod( 'gfbs_navbar_link_font_size', GFBS_DEFAULT_NAVBAR_LINK_FONT_SIZE ); ?> !important;
    color: <?php echo get_theme_mod( 'gfbs_navbar_link_font_color', GFBS_DEFAULT_LIGHT_COLOR ); ?> !important;
    letter-spacing: <?php echo get_theme_mod( 'gfbs_navbar_link_letter_spacing', GFBS_DEFAULT_BRANDING_LETTER_SPACING ); ?> !important;
}

h1 {
    font-family: <?php echo get_theme_mod( 'gfbs_h1_font_family', GFBS_DEFAULT_H1_FONT_FAMILY ); ?> !important;
    font-weight: <?php echo get_theme_mod( 'gfbs_h1_font_weight', GFBS_DEFAULT_HEADER_FONT_WEIGHT ); ?> !important;
    font-size: <?php echo get_theme_mod( 'gfbs_h1_font_size', GFBS_DEFAULT_H1_FONT_SIZE ); ?> !important;
    color: <?php echo get_theme_mod( 'gfbs_h1_font_color', GFBS_DEFAULT_DARK_COLOR ); ?> !important;
    letter-spacing: <?php echo get_theme_mod( 'gfbs_h1_letter_spacing', GFBS_DEFAULT_LETTER_SPACING ); ?> !important;
}
h2 {
    font-family: <?php echo get_theme_mod( 'gfbs_h2_font_family', GFBS_DEFAULT_H2_FONT_FAMILY ); ?> !important;
    font-weight: <?php echo get_theme_mod( 'gfbs_h2_font_weight', GFBS_DEFAULT_HEADER_FONT_WEIGHT ); ?> !important;
    font-size: <?php echo get_theme_mod( 'gfbs_h2_font_size', GFBS_DEFAULT_H2_FONT_SIZE ); ?> !important;
    color: <?php echo get_theme_mod( 'gfbs_h2_font_color', GFBS_DEFAULT_DARK_COLOR ); ?> !important;
    letter-spacing: <?php echo get_theme_mod( 'gfbs_h2_letter_spacing', GFBS_DEFAULT_LETTER_SPACING ); ?> !important;
}
h3 {
    font-family: <?php echo get_theme_mod( 'gfbs_h3_font_family', GFBS_DEFAULT_H3_FONT_FAMILY ); ?> !important;
    font-weight: <?php echo get_theme_mod( 'gfbs_h3_font_weight', GFBS_DEFAULT_HEADER_FONT_WEIGHT ); ?> !important;
    font-size: <?php echo get_theme_mod( 'gfbs_h3_font_size', GFBS_DEFAULT_H3_FONT_SIZE ); ?> !important;
    color: <?php echo get_theme_mod( 'gfbs_h3_font_color', GFBS_DEFAULT_DARK_COLOR ); ?> !important;
    letter-spacing: <?php echo get_theme_mod( 'gfbs_h3_letter_spacing', GFBS_DEFAULT_LETTER_SPACING ); ?> !important;
}
h4 {
    font-family: <?php echo get_theme_mod( 'gfbs_h4_font_family', GFBS_DEFAULT_H4_FONT_FAMILY ); ?> !important;
    font-weight: <?php echo get_theme_mod( 'gfbs_h4_font_weight', GFBS_DEFAULT_HEADER_FONT_WEIGHT ); ?> !important;
    font-size: <?php echo get_theme_mod( 'gfbs_h4_font_size', GFBS_DEFAULT_H4_FONT_SIZE ); ?> !important;
    color: <?php echo get_theme_mod( 'gfbs_h4_font_color', GFBS_DEFAULT_DARK_COLOR ); ?> !important;
    letter-spacing: <?php echo get_theme_mod( 'gfbs_h4_letter_spacing', GFBS_DEFAULT_LETTER_SPACING ); ?> !important;
}
h5 {
    font-family: <?php echo get_theme_mod( 'gfbs_h5_font_family', GFBS_DEFAULT_H5_FONT_FAMILY ); ?> !important;
    font-weight: <?php echo get_theme_mod( 'gfbs_h5_font_weight', GFBS_DEFAULT_HEADER_FONT_WEIGHT ); ?> !important;
    font-size: <?php echo get_theme_mod( 'gfbs_h5_font_size', GFBS_DEFAULT_H5_FONT_SIZE ); ?> !important;
    color: <?php echo get_theme_mod( 'gfbs_h5_font_color', GFBS_DEFAULT_DARK_COLOR ); ?> !important;
    letter-spacing: <?php echo get_theme_mod( 'gfbs_h5_letter_spacing', GFBS_DEFAULT_LETTER_SPACING ); ?> !important;
}
h6 {
    font-family: <?php echo get_theme_mod( 'gfbs_h6_font_family', GFBS_DEFAULT_H6_FONT_FAMILY ); ?> !important;
    font-weight: <?php echo get_theme_mod( 'gfbs_h6_font_weight', GFBS_DEFAULT_HEADER_FONT_WEIGHT ); ?> !important;
    font-size: <?php echo get_theme_mod( 'gfbs_h6_font_size', GFBS_DEFAULT_H6_FONT_SIZE ); ?> !important;
    color: <?php echo get_theme_mod( 'gfbs_h6_font_color', GFBS_DEFAULT_DARK_COLOR ); ?> !important;
    letter-spacing: <?php echo get_theme_mod( 'gfbs_h6_letter_spacing', GFBS_DEFAULT_LETTER_SPACING ); ?> !important;
}
p {
    font-family: <?php echo get_theme_mod( 'gfbs_p_font_family', GFBS_DEFAULT_P_FONT_FAMILY ); ?> !important;
    font-weight: <?php echo get_theme_mod( 'gfbs_p_font_weight', GFBS_DEFAULT_TEXT_FONT_WEIGHT ); ?> !important;
    font-size: <?php echo get_theme_mod( 'gfbs_p_font_size', GFBS_DEFAULT_P_FONT_SIZE ); ?> !important;
    color: <?php echo get_theme_mod( 'gfbs_p_font_color', GFBS_DEFAULT_DARK_COLOR ); ?> !important;
    letter-spacing: <?php echo get_theme_mod( 'gfbs_p_letter_spacing', GFBS_DEFAULT_LETTER_SPACING ); ?> !important;
}


.text-primary {
    color: <?php //echo $gfbs_primary_color; ?> !important;
}
ul.dropdown-menu, ul.dropdown-menu li {
    background-color: rgb(33, 37, 41);
}
ul.dropdown-menu li a {
    color: white;
}
#navbar-main {
    background-color: <?php echo get_theme_mod( 'gfbs_dark_color' ); ?> !important;
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
</style>

<?php if ( class_exists( 'WooCommerce' ) ): ?>

    <style>

    .onsale {
        background-color: <?php echo get_theme_mod( 'gfbs_wc_onsale_bg_color', get_theme_mod( 'gfbs_primary_color', GFBS_DEFAULT_PRIMARY_COLOR ) ); ?> !important;
        background-color: <?php echo get_theme_mod( 'gfbs_wc_onsale_font_color', get_theme_mod( 'gfbs_light_color', GFBS_DEFAULT_LIGHT_COLOR ) ); ?> !important;
        font-family: <?php echo get_theme_mod( 'gfbs_wc_onsale_font_family', get_theme_mod( 'gfbs_p_font_family', GFBS_DEFAULT_P_FONT_FAMILY ) ); ?> !important
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
        color: <?php //echo $gfbs_dark_color; ?> !important;
    }
    ins .woocommerce-Price-amount {
        color: <?php //echo $gfbs_primary_color; ?> !important;
        font-weight: 700;
    }
    .menu-product-category-menu-container .menu-item a {
        color: <?php //echo $gfbs_dark_color; ?> !important; 
        font-weight: 700;
    }
    .menu-product-category-menu-container .sub-menu .menu-item a {
        font-weight: 600;
    }
    .menu-product-category-menu-container .sub-menu .menu-item-has-children .menu-item a {
        font-weight: 400;
    }
    </style>

<?php endif; ?>