<?php

//section
$wp_customize->add_section( "gfbs_headline_font_section", array(
    'priority' => 1,
    'title' => __( 'Headline', 'gfb_supply'),
    'description' => __( "Customize the font of the headline.", 'gfb_supply' ),
    'panel' => 'gfbs_showcase_subpanel'
));

        //font family
        $wp_customize->add_setting( "gfbs_headline_font_family", array(
            'default' => 'Righteous'
        ));
        $wp_customize->add_control( "gfbs_headline_font_family", array(
            'label' => __( "Font Family", 'gfb_supply' ),
            'section' => "gfbs_headline_font_section",
            'settings' => "gfbs_headline_font_family",
            'priority' => 0,
            'type' => 'select',
            'choices' => GFBS_FONT_FAMILY_ARRAY
        ));

        //font size full
        $wp_customize->add_setting( "gfbs_headline_font_size", array(
            'default' => 64
        ));
        $wp_customize->add_control( new WP_Customize_Font_Size_Control( $wp_customize, "gfbs_headline_font_size", array(
            'label' => __( 'Font Size (Full Screen)', 'gfb_supply' ),
            'section' => "gfbs_headline_font_section",
            'settings' => "gfbs_headline_font_size",
            'priority' => 1,
        )));

        //font size tablet
        $wp_customize->add_setting( "gfbs_headline_font_size_tablet", array(
            'default' => 64
        ));
        $wp_customize->add_control( new WP_Customize_Font_Size_Control( $wp_customize, "gfbs_headline_font_size_tablet", array(
            'label' => __( 'Font Size (Tablet)', 'gfb_supply' ),
            'section' => "gfbs_headline_font_section",
            'settings' => "gfbs_headline_font_size_tablet",
            'priority' => 2
        )));

        //font size mobile
        $wp_customize->add_setting( "gfbs_headline_font_size_mobile", array(
            'default' => 40
        ));
        $wp_customize->add_control( new WP_Customize_Font_Size_Control( $wp_customize, "gfbs_headline_font_size_mobile", array(
            'label' => __( 'Font Size (Mobile)', 'gfb_supply' ),
            'section' => "gfbs_headline_font_section",
            'settings' => "gfbs_headline_font_size_mobile",
            'priority' => 3
        )));

        //font weight
        $wp_customize->add_setting( "gfbs_headline_font_weight", array(
            'default' => GFBS_DEFAULT_HEADER_FONT_WEIGHT
        ));
        $wp_customize->add_control( new WP_Customize_Font_Weight_Control( $wp_customize, "gfbs_headline_font_weight", array(
            'label' => __( 'Font Weight', 'gfb_supply' ),
            'section' => "gfbs_headline_font_section",
            'settings' => "gfbs_headline_font_weight",
            'priority' => 4
        )));

        //letter spacing
        $wp_customize->add_setting( "gfbs_headline_letter_spacing", array(
            'default' => GFBS_DEFAULT_LETTER_SPACING
        ));
        $wp_customize->add_control( new WP_Customize_Letter_Spacing_Control( $wp_customize, "gfbs_headline_letter_spacing", array(
            'label' => __( 'Letter Spacing', 'gfb_supply' ),
            'section' => "gfbs_headline_font_section",
            'settings' => "gfbs_headline_letter_spacing",
            'priority' => 5
        )));

        //font weight
        $wp_customize->add_setting( "gfbs_headline_font_color", array(
            'default' => get_theme_mod( 'gfbs_dark_color', GFBS_DEFAULT_LIGHT_COLOR ),
            'sanitize_callback' => 'sanitize_hex_color',
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, "gfbs_headline_font_color", array(
            'label' => __( 'Font Color', 'gfb_supply' ),
            'section' => "gfbs_headline_font_section",
            'settings' => "gfbs_headline_font_color",
            'priority' => 6
        )));

?>