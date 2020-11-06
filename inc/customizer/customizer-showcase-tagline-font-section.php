<?php

//section
$wp_customize->add_section( "gfbs_tagline_font_section", array(
    'priority' => 3,
    'title' => __( 'Tagline', 'gfb_supply'),
    'description' => __( "Customize the font of the tagline.", 'gfb_supply' ),
    'panel' => 'gfbs_showcase_subpanel'
));

        //font family
        $wp_customize->add_setting( "gfbs_tagline_font_family", array(
            'default' => 'Roboto'
        ));
        $wp_customize->add_control( "gfbs_tagline_font_family", array(
            'label' => __( "Font Family", 'gfb_supply' ),
            'section' => "gfbs_tagline_font_section",
            'settings' => "gfbs_tagline_font_family",
            'priority' => 0,
            'type' => 'select',
            'choices' => GFBS_FONT_FAMILY_ARRAY
        ));

        //font size full 
        $wp_customize->add_setting( "gfbs_tagline_font_size", array(
            'default' => 28
        ));
        $wp_customize->add_control( new WP_Customize_Font_Size_Control( $wp_customize, "gfbs_tagline_font_size", array(
            'label' => __( 'Font Size (Desktop)', 'gfb_supply' ),
            'section' => "gfbs_tagline_font_section",
            'settings' => "gfbs_tagline_font_size",
            'priority' => 1,
        )));

        //font size tablet 
        $wp_customize->add_setting( "gfbs_tagline_font_size_tablet", array(
            'default' => 24
        ));
        $wp_customize->add_control( new WP_Customize_Font_Size_Control( $wp_customize, "gfbs_tagline_font_size_tablet", array(
            'label' => __( 'Font Size (Tablet)', 'gfb_supply' ),
            'section' => "gfbs_tagline_font_section",
            'settings' => "gfbs_tagline_font_size_tablet",
            'priority' => 1,
        )));

        //font size mobile 
        $wp_customize->add_setting( "gfbs_tagline_font_size_mobile", array(
            'default' => 20
        ));
        $wp_customize->add_control( new WP_Customize_Font_Size_Control( $wp_customize, "gfbs_tagline_font_size_mobile", array(
            'label' => __( 'Font Size (Mobile)', 'gfb_supply' ),
            'section' => "gfbs_tagline_font_section",
            'settings' => "gfbs_tagline_font_size_mobile",
            'priority' => 1,
        )));

        //font weight
        $wp_customize->add_setting( "gfbs_tagline_font_weight", array(
            'default' => GFBS_DEFAULT_HEADER_FONT_WEIGHT
        ));
        $wp_customize->add_control( new WP_Customize_Font_Weight_Control( $wp_customize, "gfbs_tagline_font_weight", array(
            'label' => __( 'Font Weight', 'gfb_supply' ),
            'section' => "gfbs_tagline_font_section",
            'settings' => "gfbs_tagline_font_weight",
            'priority' => 2
        )));

        //letter spacing
        $wp_customize->add_setting( "gfbs_tagline_letter_spacing", array(
            'default' => GFBS_DEFAULT_LETTER_SPACING
        ));
        $wp_customize->add_control( new WP_Customize_Letter_Spacing_Control( $wp_customize, "gfbs_tagline_letter_spacing", array(
            'label' => __( 'Letter Spacing', 'gfb_supply' ),
            'section' => "gfbs_tagline_font_section",
            'settings' => "gfbs_tagline_letter_spacing",
            'priority' => 3
        )));

        //font weight
        $wp_customize->add_setting( "gfbs_tagline_font_color", array(
            'default' => get_theme_mod( 'gfbs_dark_color', GFBS_DEFAULT_MUTED_LIGHT_COLOR ),
            'sanitize_callback' => 'sanitize_hex_color',
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, "gfbs_tagline_font_color", array(
            'label' => __( 'Font Color', 'gfb_supply' ),
            'section' => "gfbs_tagline_font_section",
            'settings' => "gfbs_tagline_font_color",
            'priority' => 4
        )));

?>