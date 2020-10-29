<?php
    //primary color
    $wp_customize->add_setting( 'gfbs_primary_color', array(
        'default' => '#df6900',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gfbs_primary_color', array(
        'label' => __( 'Primary Color', 'gfb_supply' ),
        'section' => 'gfbs_theme_colors',
        'description' => __( 'Main branding color.', 'gfb_supply' )
    )));

    //secondary color
    $wp_customize->add_setting( 'gfbs_secondary_color', array(
        'default' => '#FF8213',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gfbs_secondary_color', array(
        'label' => __( 'Secondary Color', 'gfb_supply' ),
        'section' => 'gfbs_theme_colors',
        'description' => __( 'Secondary branding color.', 'gfb_supply' )
    )));

    //info color
    $wp_customize->add_setting( 'gfbs_info_color', array(
        'default' => '#1390FF',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gfbs_info_color', array(
        'label' => __( 'Info Color', 'gfb_supply' ),
        'section' => 'gfbs_theme_colors',
        'description' => __( 'Color to indicate informing customer.', 'gfb_supply' )
    )));

    //success color
    $wp_customize->add_setting( 'gfbs_success_color', array(
        'default' => '#07DF00',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gfbs_success_color', array(
        'label' => __( 'Success Color', 'gfb_supply' ),
        'section' => 'gfbs_theme_colors',
        'description' => __( 'Indicates error-free submission, upload, etc. Usually green.', 'gfb_supply' )
    )));

    //danger color
    $wp_customize->add_setting( 'gfbs_danger_color', array(
        'default' => '#DF0007',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gfbs_danger_color', array(
        'label' => __( 'Danger Color', 'gfb_supply' ),
        'section' => 'gfbs_theme_colors',
        'description' => __( 'Indicates error. Usually red.', 'gfb_supply' )
    )));

    //warning color
    $wp_customize->add_setting( 'gfbs_warning_color', array(
        'default' => '#DFD800',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gfbs_warning_color', array(
        'label' => __( 'Warning Color', 'gfb_supply' ),
        'section' => 'gfbs_theme_colors',
        'description' => __( 'Indicates potential error or bad practice. Usually yellow.', 'gfb_supply' )
    )));

    //light color
    $wp_customize->add_setting( 'gfbs_light_color', array(
        'default' => '#f8f9fa',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gfbs_light_color', array(
        'label' => __( 'Light Color', 'gfb_supply' ),
        'section' => 'gfbs_theme_colors',
        'description' => __( 'Default color for light backgrounds, text on dark backgrounds.', 'gfb_supply' )
    )));

    //dark color
    $wp_customize->add_setting( 'gfbs_dark_color', array(
        'default' => '#0f0700',
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gfbs_dark_color', array(
        'label' => __( 'Dark Color', 'gfb_supply' ),
        'section' => 'gfbs_theme_colors',
        'description' => __( 'Default color for dark backgrounds, text on light backgrounds.', 'gfb_supply' )
    )));
    ?>