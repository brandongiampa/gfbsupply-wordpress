<?php

//add section
$wp_customize->add_section( "gfbs_navbar_links_section", array(
    'priority' => 2,
    'title' => __( 'Links', 'gfb_supply'),
    'description' => __( "Customize appearance of navbar links.", 'gfb_supply' ),
    'panel' => 'gfbs_navbar_subpanel'
));

        //navbar_links font
        $wp_customize->add_setting( 'gfbs_navbar_links_font_family', array(
            'default' => 'Righteous'
        ));
        $wp_customize->add_control( 'gfbs_navbar_links_font_family', array(
            'label' => __( 'Font Family', 'gfb_supply' ),
            'section' => 'gfbs_navbar_links_section',
            'description' => __( 'Set font family of Links.', 'gfb_supply' ),
            'type' => 'select',
            'choices' => GFBS_FONT_FAMILY_ARRAY
        ));

        //navbar_links font size
        $wp_customize->add_setting( 'gfbs_navbar_links_font_size', array(
            'default' => 24,
            'sanitize_callback' => 'gfbs_int_to_px',
        ));
        $wp_customize->add_control( new WP_Customize_Font_Size_Control( $wp_customize, 'gfbs_navbar_links_font_size', array(
            'label' => __( 'Font Size', 'gfb_supply' ),
            'section' => 'gfbs_navbar_links_section',
            'description' => __( 'Set the color.', 'gfb_supply' )
        )));

        //navbar_links letter spacing
        $wp_customize->add_setting( 'gfbs_navbar_links_letter_spacing', array(
            'default' => GFBS_DEFAULT_LETTER_SPACING,
            'sanitize_callback' => 'gfbs_int_to_px',
        ));
        $wp_customize->add_control( new WP_Customize_Letter_Spacing_Control( $wp_customize, 'gfbs_navbar_links_letter_spacing', array(
            'label' => __( 'Letter Spacing', 'gfb_supply' ),
            'section' => 'gfbs_navbar_links_section',
            'description' => __( 'Customize the width of the gap between letters.', 'gfb_supply' )
        )));

        //navbar_links font color
        $wp_customize->add_setting( 'gfbs_navbar_links_font_color', array(
            'default' => GFBS_DEFAULT_MUTED_LIGHT_COLOR,
            'sanitize_callback' => 'sanitize_hex_color',
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gfbs_navbar_links_font_color', array(
            'label' => __( 'Font Color', 'gfb_supply' ),
            'section' => 'gfbs_navbar_links_section',
            'description' => __( 'The color of the navbar links.', 'gfb_supply' )
        )));

        //navbar_links:active font color
        $wp_customize->add_setting( 'gfbs_navbar_links_active_font_color', array(
            'default' => GFBS_DEFAULT_LIGHT_COLOR,
            'sanitize_callback' => 'sanitize_hex_color',
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gfbs_navbar_links_active_font_color', array(
            'label' => __( 'Active Font Color', 'gfb_supply' ),
            'section' => 'gfbs_navbar_links_section',
            'description' => __( 'The color of the link for the current page.', 'gfb_supply' )
        )));


?>