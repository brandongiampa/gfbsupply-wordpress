<?php

$wp_customize->add_section( "gfbs_navbar_appearance_section", array(
    'priority' => 0,
    'title' => __( 'Appearance', 'gfb_supply'),
    'description' => __( "Customize the appearance of the navbar.", 'gfb_supply' ),
    'panel' => 'gfbs_navbar_subpanel'
));
        //bg color
        $wp_customize->add_setting( 'gfbs_navbar_bg_color', array(
            'default' => GFBS_DEFAULT_NAVBAR_BG_COLOR,
            'sanitize_callback' => 'sanitize_hex_color',
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gfbs_navbar_bg_color', array(
            'label' => __( 'Background Color', 'gfb_supply' ),
            'section' => 'gfbs_navbar_appearance_section',
            'description' => __( 'Default color for alternate backgrounds, understated text on dark backgrounds.', 'gfb_supply' )
        )));
        //navbar height
        $wp_customize->add_setting( 'gfbs_navbar_height', array(
            'default' => GFBS_DEFAULT_NAVBAR_HEIGHT
        ));
        $wp_customize->add_control( new WP_Customize_Navbar_Height_Control( $wp_customize, 'gfbs_navbar_height', array(
            'label' => __( 'Navbar Height', 'gfb_supply' ),
            'section' => 'gfbs_navbar_appearance_section',
            'description' => __( 'Set height of navigation bar at the top of the screen.', 'gfb_supply' )
        )));

?>