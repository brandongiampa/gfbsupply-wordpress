<?php



function gfbs_customize_register( $wp_customize ) {

    //classes for custom controls 
    require_once get_template_directory() . '/inc/classes/class-wp-customize-letter-spacing-control.php';
    require_once get_template_directory() . '/inc/classes/class-wp-customize-font-size-control.php';
    require_once get_template_directory() . '/inc/classes/class-wp-customize-font-weight-control.php';
    require_once get_template_directory() . '/inc/classes/class-wp-customize-navbar-height-control.php';
    require_once get_template_directory() . '/inc/classes/class-wp-customize-showcase-height-control.php';
    require_once get_template_directory() . '/inc/classes/class-wp-customize-opacity-control.php';

    //constat values for reuse
    require_once get_template_directory() . '/inc/customizer/customizer-constants.php';

    //main panel
    $wp_customize->add_panel( 'gfbs_main_panel', array(
        'priority' => 0,
        'capability' => 'edit_theme_options',
        'theme_supports' => '',
        'title' => __( 'GFB Supply', 'gfb_supply') ,
        'description' => __( 'Edit your custom theme!', 'gfb_supply' )
    ));

    //subpanels
    $wp_customize->add_panel( 'gfbs_globals_subpanel', array(
        'priority' => 0,
        'title' => __( 'Global Styles', 'gfb_supply') ,
        'description' => __( 'Set the templates for colors and fonts to be applied everywhere you do not override them.', 'gfb_supply' ),
        'panel'     =>      'gfbs_main_panel'
    ));

            //general page settings
            require_once get_template_directory() . '/inc/customizer/globals/customizer-general-page-settings-section.php';

            //colors 
            require_once get_template_directory() . '/inc/customizer/globals/customizer-colors-section.php';

            //h1 
            require_once get_template_directory() . '/inc/customizer/globals/customizer-h1-section.php';
            //h2
            require_once get_template_directory() . '/inc/customizer/globals/customizer-h2-section.php';
            //h3
            require_once get_template_directory() . '/inc/customizer/globals/customizer-h3-section.php';
            //h4 
            require_once get_template_directory() . '/inc/customizer/globals/customizer-h4-section.php';
            //h5 
            require_once get_template_directory() . '/inc/customizer/globals/customizer-h5-section.php';
            //h6 
            require_once get_template_directory() . '/inc/customizer/globals/customizer-h6-section.php';
            //p 
            require_once get_template_directory() . '/inc/customizer/globals/customizer-p-section.php';

    //navbar
    $wp_customize->add_panel( 'gfbs_navbar_subpanel', array(
        'priority' => 1,
        'title' => __( 'Navbar', 'gfb_supply') ,
        'description' => __( 'Customize your navigation bar.', 'gfb_supply' ),
        'panel'     =>      'gfbs_main_panel'
    ));
            
    require_once get_template_directory() . '/inc/customizer/navbar/customizer-navbar-appearance-section.php';
    require_once get_template_directory() . '/inc/customizer/navbar/customizer-navbar-branding-section.php';
    require_once get_template_directory() . '/inc/customizer/navbar/customizer-navbar-links-section.php';
             
    $wp_customize->add_panel( 'gfbs_showcase_subpanel', array(
        'priority' => 2,
        'title' => __( 'Showcase (Hero Image)', 'gfb_supply') ,
        'description' => __( 'Customize your showcase.', 'gfb_supply' ),
        'panel'     =>      'gfbs_main_panel'
    ));

    require_once get_template_directory() . '/inc/customizer/customizer-showcase-appearance-section.php';
    require_once get_template_directory() . '/inc/customizer/customizer-showcase-text-section.php';  
    require_once get_template_directory() . '/inc/customizer/customizer-showcase-headline-font-section.php';
    require_once get_template_directory() . '/inc/customizer/customizer-showcase-tagline-font-section.php';


    $wp_customize->add_panel( 'gfbs_blog_subpanel', array(
        'priority' => 3,
        'title' => __( 'Blog', 'gfb_supply') ,
        'description' => __( 'Customize the pages displaying your blogs and archives.', 'gfb_supply' ),
        'panel'     =>      'gfbs_main_panel'
    ));
    $wp_customize->add_panel( 'gfbs_footer_subpanel', array(
        'priority' => 4,
        'title' => __( 'Footer', 'gfb_supply') ,
        'description' => __( 'Customize your showcase.', 'gfb_supply' ),
        'panel'     =>      'gfbs_main_panel'
    ));
    if ( class_exists( 'WooCommerce' ) ) {
        $wp_customize->add_panel( 'gfbs_woocommerce_subpanel', array(
            'priority' => 5,
            'title' => __( 'WooCommerce Styling', 'gfb_supply') ,
            'description' => __( 'Customize product display to fit your brand.', 'gfb_supply' ),
            'panel'     =>      'gfbs_main_panel'
        ));
    }
    
    // require_once get_template_directory() . '/inc/customizer-subpanels/customizer-subpanel-globals.php';

}
add_action( 'customize_register', 'gfbs_customize_register' );

function gfbs_int_to_px( $inputInt ) {
    return $inputInt . "px";
}
function gfbs_px_to_int( $inputInt ) {
    $arr = str_split( $intputInt );
    array_pop( $arr );
    array_pop( $arr );
    $output = implode( $arr );
    return intval( $output );
}
?>