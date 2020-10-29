<?php



function gfbs_customize_register( $wp_customize ) {

    require_once get_template_directory() . '/inc/classes/class-gfbs-customize-color-control.php';

    //add panel 
    $wp_customize->add_panel( 'gfbs_panel', array(
        'priority' => 10,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'GFB Supply', 'gfb_supply') ,
        'description' => __( 'Edit your custom theme!', 'gfb_supply' )
    ));

    //add sections 
    $wp_customize->add_section( THEME_COLORS_SECTION, array(
        'priority' => 1,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'GFB Supply Theme Colors', 'gfb_supply'),
        'description' => __( 'PRO TIP: Google "color wheel" to find colors that work well together.', 'gfb_supply' ),
        'panel' => 'gfbs_panel'
    ));
    $wp_customize->add_section( THEME_FONTS_SECTION, array(
        'priority' => 2,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'GFB Supply Theme Fonts', 'gfb_supply'),
        'description' => __( 'PRO TIP: It is best to stick to two font families: a fancy one for headers and a plain one for text.', 'gfb_supply' ),
        'panel' => 'gfbs_panel'
    ));
    $wp_customize->add_section( THEME_HERO_SECTION, array(
        'priority' => 3,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'GFB Supply Theme Hero Image', 'gfb_supply'),
        'description' => __( 'PRO TIP: Make sure your text stands out from your image. Avoid pictures with a lot of words and make sure your overlay covers the image enough for the text to jump out!', 'gfb_supply' ),
        'panel' => 'gfbs_panel'
    ));
    $wp_customize->add_section( THEME_CTA_SECTION, array(
        'priority' => 4,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'GFB Supply Theme Call to Action', 'gfb_supply'),
        'description' => __( 'PRO TIP: Make sure your text stands out from your image. Avoid pictures with a lot of words and make sure your overlay covers the image enough for the text to jump out!', 'gfb_supply' ),
        'panel' => 'gfbs_panel'
    ));

    require_once get_template_directory() . '/inc/customizer/customizer-colors.php';
    require_once get_template_directory() . '/inc/customizer/customizer-fonts.php';
    require_once get_template_directory() . '/inc/customizer/customizer-hero-image.php';
    require_once get_template_directory() . '/inc/customizer/customizer-cta.php';

}
add_action( 'customize_register', 'gfbs_customize_register' );
?>