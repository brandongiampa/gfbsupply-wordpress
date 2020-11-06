<?php

//section
$wp_customize->add_section( "gfbs_showcase_appearance_section", array(
    'priority' => 0,
    'title' => __( 'Appearance', 'gfb_supply'),
    'description' => __( "Customize the appearance of the hero image.", 'gfb_supply' ),
    'panel' => 'gfbs_showcase_subpanel'
));

        //height
        $wp_customize->add_setting( "gfbs_showcase_height", array(
            'default' => 480
        ));
        $wp_customize->add_control( new WP_Customize_Showcase_Height_Control( $wp_customize, "gfbs_showcase_height", array(
            'label' => __( 'Height', 'gfb_supply' ),
            'section' => "gfbs_showcase_appearance_section",
            'settings' => "gfbs_showcase_height",
            'priority' => 0,
        )));

        //background image
        // $wp_customize->add_setting( "gfbs_showcase_bg_image", array(
        //     'default' => get_template_directory_uri() . "/assets/img/toasting.jpg"
        // ));
        // $wp_customize->add_control( new WP_Customize_Image_Control( "gfbs_appearance_family", array(
        //     'label' => __( "Background Image", 'gfb_supply' ),
        //     'section' => "gfbs_showcase_appearance_section",
        //     'settings' => 'gfbs_appearance_family',
        //     'priority' => 1,
        // )));

        

        //font weight
        // $wp_customize->add_setting( "gfbs_appearance_weight", array(
        //     'default' => GFBS_DEFAULT_HEADER_FONT_WEIGHT
        // ));
        // $wp_customize->add_control( new WP_Customize_Font_Weight_Control( $wp_customize, "gfbs_appearance_weight", array(
        //     'label' => __( 'Font Weight', 'gfb_supply' ),
        //     'section' => "gfbs_showcase_appearance_section",
        //     'settings' => "gfbs_appearance_weight",
        //     'priority' => 2
        // )));

        //letter spacing
        // $wp_customize->add_setting( "gfbs_tagline_letter_spacing", array(
        //     'default' => GFBS_DEFAULT_LETTER_SPACING
        // ));
        // $wp_customize->add_control( new WP_Customize_Letter_Spacing_Control( $wp_customize, "gfbs_tagline_letter_spacing", array(
        //     'label' => __( 'Letter Spacing', 'gfb_supply' ),
        //     'section' => "gfbs_showcase_appearance_section",
        //     'settings' => "gfbs_tagline_letter_spacing",
        //     'priority' => 3
        // )));

        //font weight
        // $wp_customize->add_setting( "gfbs_appearance_color", array(
        //     'default' => get_theme_mod( 'gfbs_dark_color', GFBS_DEFAULT_MUTED_LIGHT_COLOR ),
        //     'sanitize_callback' => 'sanitize_hex_color',
        // ));
        // $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, "gfbs_appearance_color", array(
        //     'label' => __( 'Font Color', 'gfb_supply' ),
        //     'section' => "gfbs_showcase_appearance_section",
        //     'settings' => "gfbs_appearance_color",
        //     'priority' => 4
        // )));

?>