<?php

//section
$wp_customize->add_section( "gfbs_h2_section", array(
    'priority' => $i,
    'title' => __( 'Secondary Header (H2) Styles', 'gfb_supply'),
    'description' => __( "Customize the appearance of page headers.", 'gfb_supply' ),
    'panel' => 'gfbs_globals_subpanel'
));

        //font family
        $wp_customize->add_setting( "gfbs_h2_font_family", array(
            'default' => GFBS_DEFAULT_H2_FONT_FAMILY
        ));
        $wp_customize->add_control( "gfbs_h2_font_family", array(
            'label' => __( "Font Family", 'gfb_supply' ),
            'section' => "gfbs_h2_section",
            'settings' => "gfbs_h2_font_family",
            'priority' => 0,
            'type' => 'select',
            'choices' => GFBS_FONT_FAMILY_ARRAY
        ));

        //font size
        $wp_customize->add_setting( "gfbs_h2_font_size", array(
            'default' => GFBS_DEFAULT_H2_FONT_SIZE,
            'sanitize_callback' => 'gfbs_int_to_px'
        ));
        $wp_customize->add_control( new WP_Customize_Font_Size_Control( $wp_customize, "gfbs_h2_font_size", array(
            'label' => __( 'Font Size', 'gfb_supply' ),
            'section' => "gfbs_h2_section",
            'settings' => "gfbs_h2_font_size",
            'priority' => 1,
        )));

        //font weight
        $wp_customize->add_setting( "gfbs_h2_font_weight", array(
            'default' => GFBS_DEFAULT_HEADER_FONT_WEIGHT
        ));
        $wp_customize->add_control( new WP_Customize_Font_Weight_Control( $wp_customize, "gfbs_h2_font_weight", array(
            'label' => __( 'Font Weight', 'gfb_supply' ),
            'section' => "gfbs_h2_section",
            'settings' => "gfbs_h2_font_weight",
            'priority' => 2
        )));

        //letter spacing
        $wp_customize->add_setting( "gfbs_h2_letter_spacing", array(
            'default' => GFBS_DEFAULT_LETTER_SPACING,
            'sanitize_callback' => 'gfbs_int_to_px'
        ));
        $wp_customize->add_control( new WP_Customize_Letter_Spacing_Control( $wp_customize, "gfbs_h2_letter_spacing", array(
            'label' => __( 'Letter Spacing', 'gfb_supply' ),
            'section' => "gfbs_h2_section",
            'settings' => "gfbs_h2_letter_spacing",
            'priority' => 3
        )));

        //font weight
        $wp_customize->add_setting( "gfbs_h2_font_color", array(
            'default' => get_theme_mod( 'gfbs_dark_color', GFBS_DEFAULT_LIGHT_COLOR ),
            'sanitize_callback' => 'sanitize_hex_color',
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, "gfbs_h2_font_color", array(
            'label' => __( 'Font Color', 'gfb_supply' ),
            'section' => "gfbs_h2_section",
            'settings' => "gfbs_h2_font_color",
            'priority' => 4
        )));

?>