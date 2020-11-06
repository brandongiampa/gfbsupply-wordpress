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
.page-content a  {
    font-weight: <?php echo get_theme_mod( 'gfbs_links_font_weight', 500 ); ?> !important;
    color: <?php echo get_theme_mod( 'gfbs_links_font_color', GFBS_DEFAULT_PRIMARY_COLOR ); ?> !important;
}
.footer-sidebars a, footer a {
    font-weight: <?php echo get_theme_mod( 'gfbs_links_font_weight', GFBS_DEFAULT_LINKS_FONT_WEIGHT ); ?> !important;
    color: <?php echo get_theme_mod( 'gfbs_links_dark_color', GFBS_DEFAULT_DARK_COLOR ); ?> !important;
}
a:hover div {
    text-decoration: none !important;
}

.text-primary {
    color: <?php echo get_theme_mod( 'gfbs_primary_color', GFBS_DEFAULT_PRIMARY_COLOR ); ?> !important;
}

/*button primary*/
.btn-primary, .btn-outline-primary, .button.add_to_cart_button  {
    border-color: <?php echo get_theme_mod( 'gfbs_primary_color', GFBS_DEFAULT_PRIMARY_COLOR ); ?> !important;
}
.btn-outline-primary {
    color: <?php echo get_theme_mod( 'gfbs_primary_color', GFBS_DEFAULT_PRIMARY_COLOR ); ?> !important;
}
.btn-primary, .button.add_to_cart_button, .checkout-button.button, .single_add_to_cart_button.button {
    background-color: <?php echo get_theme_mod( 'gfbs_primary_color', GFBS_DEFAULT_PRIMARY_COLOR ); ?> !important; 
}
.button.add_to_cart_button {
    color: <?php echo get_theme_mod( 'gfbs_light_color', GFBS_DEFAULT_LIGHT_COLOR ); ?>!important;
}
.btn-outline-primary:hover {
    background-color: <?php echo get_theme_mod( 'gfbs_primary_color', GFBS_DEFAULT_PRIMARY_COLOR ); ?> !important; 
    color: <?php echo get_theme_mod( 'gfbs_light_color', GFBS_DEFAULT_LIGHT_COLOR ); ?> !important; 
}
.btn-primary:active, .button.add_to_cart_button:active {
    border-color: <?php echo get_theme_mod( 'gfbs_secondary_color', GFBS_DEFAULT_SECONDARY_COLOR ); ?> !important;
}

/*button secondary*/
.btn-secondary, .btn-outline-secondary {
    border-color: <?php echo get_theme_mod( 'gfbs_secondary_color', GFBS_DEFAULT_SECONDARY_COLOR ); ?> !important;
}
.btn-outline-secondary {
    color: <?php echo get_theme_mod( 'gfbs_secondarycolor', GFBS_DEFAULT_SECONDARY_COLOR ); ?> !important;
}
.btn-secondary {
    background-color: <?php echo get_theme_mod( 'gfbs_secondary_color', GFBS_DEFAULT_SECONDARY_COLOR ); ?> !important; 
}
.btn-outline-secondary:hover {
    background-color: <?php echo get_theme_mod( 'gfbs_secondary_color', GFBS_DEFAULT_SECONDARY_COLOR ); ?> !important; 
    color: <?php echo get_theme_mod( 'gfbs_light_color', GFBS_DEFAULT_LIGHT_COLOR ); ?> !important; 
}

/*button success*/
ul.dropdown-menu, ul.dropdown-menu li {
    background-color: <?php echo get_theme_mod( 'gfbs_navbar_bg_color', GFBS_DEFAULT_DARK_COLOR ); ?>;
}
.btn-success, .btn-outline-success {
    border-color: <?php echo get_theme_mod( 'gfbs_success_color', GFBS_DEFAULT_SUCCESS_COLOR ); ?> !important;
}
.btn-outline-success {
    color: <?php echo get_theme_mod( 'gfbs_success_color', GFBS_DEFAULT_SUCCESS_COLOR ); ?> !important;
}
.btn-success {
    background-color: <?php echo get_theme_mod( 'gfbs_success_color', GFBS_DEFAULT_SUCCESS_COLOR ); ?> !important; 
}
.btn-outline-success:hover {
    background-color: <?php echo get_theme_mod( 'gfbs_success_color', GFBS_DEFAULT_SUCCESS_COLOR ); ?> !important; 
    color: <?php echo get_theme_mod( 'gfbs_light_color', GFBS_DEFAULT_LIGHT_COLOR ); ?> !important; 
}


</style>