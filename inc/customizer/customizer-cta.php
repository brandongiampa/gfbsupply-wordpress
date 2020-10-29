<?php

//headline text
$wp_customize->add_setting( "gfbs_cta_headline_text", array(
    'default' => __( 'Premium Malts for Premium People', THEME_NAMESPACE ),
    'type' => 'theme_mod'
));
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    get_theme_mod( 'gfbs_cta_headline_text' ) ? get_theme_mod( 'gfbs_cta_headline_text' ) : get_bloginfo( 'name' ),
    array(
       'label'      => __( 'Headline Text', THEME_NAMESPACE ), 
       'description' => __( 'Main text of front page, advertising hook.', THEME_NAMESPACE ),
       'settings'   => "gfbs_cta_headline_text",
       'section'    => THEME_CTA_SECTION, 
       'type'    => 'text',
       'panel' => THEME_PANEL
   )
) );

//headline font family
$wp_customize->add_setting( "gfbs_cta_headline_font_family", array(
    'default' => 'Roboto',
    'type' => 'theme_mod'
));
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    "gfbs_cta_headline_font_family",
    array(
       'description' => __( 'Headline Font Family' , THEME_NAMESPACE ),
       'settings'   => "gfbs_cta_headline_font_family",
       'section'    => THEME_CTA_SECTION, 
       'type'    => 'select',
       'choices' => GFBS_FONT_FAMILY_ARRAY,
       'panel' => THEME_PANEL
   )
) );

//headline color
$wp_customize->add_setting( 'gfbs_cta_headline_color', array(
    'default' => get_theme_mod( 'gfbs_light_color' ) ? get_theme_mod( 'gfbs_light_color' ) : '#ffffff',
    'sanitize_callback' => 'sanitize_hex_color',
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gfbs_cta_headline_color', array(
    'section' => THEME_CTA_SECTION,
    'description' => __( 'Color of main text.', THEME_NAMESPACE )
)));

//headline font size
$wp_customize->add_setting( "gfbs_cta_headline_font_size", array(
    'default' => '52px',
    'type' => 'theme_mod'
));
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    "gfbs_cta_headline_font_size",
    array(
       'settings'   => "gfbs_cta_headline_font_size",
       'section'    => THEME_CTA_SECTION, 
       'type'    => 'select',
       'choices' => GFBS_FONT_SIZES_ARRAY,
       'panel' => THEME_PANEL
   )
) );

// headline font weight
$wp_customize->add_setting( "gfbs_cta_headline_font_weight", array(
    'default' => $weight,
    'type' => 'theme_mod'
));
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    "gfbs_cta_headline_font_weight",
    array(
       'settings'   => "gfbs_cta_headline_font_weight",
       'section'    => THEME_CTA_SECTION, 
       'type'    => 'select',
       'choices' => GFBS_FONT_WEIGHTS_ARRAY,
       'panel' => THEME_PANEL
   )
) );

//tagline text
$wp_customize->add_setting( "gfbs_cta_tagline_text", array(
    'default' => __( 'Unique malts for the best of taste.', THEME_NAMESPACE ),
    'type' => 'theme_mod'
));
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    get_theme_mod( 'gfbs_cta_tagline_text' ) ? get_theme_mod( 'gfbs_cta_tagline_text' ) : get_bloginfo( 'description' ),
    array(
       'label'      => __( 'Tagline Text', THEME_NAMESPACE ), 
       'description' => __( 'Subtext of front page, advertising punchline.', THEME_NAMESPACE ),
       'settings'   => "gfbs_cta_tagline_text",
       'section'    => THEME_CTA_SECTION, 
       'type'    => 'text',
       'panel' => THEME_PANEL
   )
) );

//tagline font family
$wp_customize->add_setting( "gfbs_cta_tagline_font_family", array(
    'default' => 'Roboto',
    'type' => 'theme_mod'
));
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    "gfbs_cta_tagline_font_family",
    array(
       'description' => __( 'Tagline Font Family' , THEME_NAMESPACE ),
       'settings'   => "gfbs_cta_tagline_font_family",
       'section'    => THEME_CTA_SECTION, 
       'type'    => 'select',
       'choices' => GFBS_FONT_FAMILY_ARRAY,
       'panel' => THEME_PANEL
   )
) );

//tagline color
$wp_customize->add_setting( 'gfbs_cta_tagline_color', array(
    'default' => get_theme_mod( 'gfbs_light_color' ) ? get_theme_mod( 'gfbs_light_color' ) : '#ffffff' ,
    'sanitize_callback' => 'sanitize_hex_color',
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gfbs_cta_tagline_color', array(
    'description' => __( 'Tagline Font Color', THEME_NAMESPACE ),
    'section' => THEME_CTA_SECTION,
    'description' => __( 'Color of small text beneath headline.', THEME_NAMESPACE )
)));

//tagline font size
$wp_customize->add_setting( "gfbs_cta_tagline_font_size", array(
    'default' => '20px',
    'type' => 'theme_mod'
));
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    "gfbs_cta_tagline_font_size",
    array(
        'description' => __( 'Tagline Font Size', THEME_NAMESPACE),
       'settings'   => "gfbs_cta_tagline_font_size",
       'section'    => THEME_CTA_SECTION, 
       'type'    => 'select',
       'choices' => GFBS_FONT_SIZES_ARRAY,
       'panel' => THEME_PANEL
   )
) );

// tagline font weight
$wp_customize->add_setting( "gfbs_cta_tagline_font_weight", array(
    'default' => $weight,
    'type' => 'theme_mod'
));
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    "gfbs_cta_tagline_font_weight",
    array(
       'settings'   => "gfbs_cta_tagline_font_weight",
       'description' => __( 'Tagline Font Weight', THEME_NAMESPACE ),
       'section'    => THEME_CTA_SECTION, 
       'type'    => 'select',
       'choices' => GFBS_FONT_WEIGHTS_ARRAY,
       'panel' => THEME_PANEL
   )
) );

//button text
$wp_customize->add_setting( "gfbs_cta_button_text", array(
    'default' => __( 'Unique malts for the best of taste.', THEME_NAMESPACE ),
    'type' => 'theme_mod'
));
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    get_theme_mod( 'gfbs_cta_button_text' ) ? get_theme_mod( 'gfbs_cta_button_text' ) : 'View Store',
    array(
       'label'      => __( 'Button Text', THEME_NAMESPACE ), 
       'description' => __( 'Text shown on "Call to Action" button.', THEME_NAMESPACE ),
       'settings'   => "gfbs_cta_button_text",
       'section'    => THEME_CTA_SECTION, 
       'type'    => 'text',
       'panel' => THEME_PANEL
   )
) );

//cta button color
$wp_customize->add_setting( 'gfbs_cta_button_color', array(
    'default' => get_theme_mod( 'gfbs_primary_color' ) ? get_theme_mod( 'gfbs_primary_color' ) : '#df6900' ,
    'sanitize_callback' => 'sanitize_hex_color',
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gfbs_cta_button_color', array(
    'section' => THEME_CTA_SECTION,
    'description' => __( 'Color of "Call to Action" button.', THEME_NAMESPACE )
)));

//cta button text color
$wp_customize->add_setting( 'gfbs_cta_button_text_color', array(
    'default' => get_theme_mod( 'gfbs_light_color' ) ? get_theme_mod( 'gfbs_light_color' ) : '#ffffff' ,
    'sanitize_callback' => 'sanitize_hex_color',
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gfbs_cta_button_text_color', array(
    'section' => THEME_CTA_SECTION,
    'description' => __( 'Color of "Call to Action" text.', THEME_NAMESPACE )
)));

?>