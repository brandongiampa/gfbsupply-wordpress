<?php 

$wp_customize->add_section( "gfbs_navbar_branding_section", array(
                'priority' => 1,
                'title' => __( 'Branding', 'gfb_supply'),
                'description' => __( "If you have uploaded a logo, you can ignore this section.", 'gfb_supply' ),
                'panel' => 'gfbs_navbar_subpanel'
            ));

                    //branding font
                    $wp_customize->add_setting( 'gfbs_branding_font_family', array(
                        'default' => 'Righteous'
                    ));
                    $wp_customize->add_control( 'gfbs_branding_font_family', array(
                        'label' => __( 'Font Family', 'gfb_supply' ),
                        'section' => 'gfbs_navbar_branding_section',
                        'description' => __( 'Set font family of branding.', 'gfb_supply' ),
                        'type' => 'select',
                        'choices' => GFBS_FONT_FAMILY_ARRAY
                    ));

                    //branding font size
                    $wp_customize->add_setting( 'gfbs_branding_font_size', array(
                        'default' => 32,
                        'sanitize_callback' => 'gfbs_int_to_px',
                    ));
                    $wp_customize->add_control( new WP_Customize_Font_Size_Control( $wp_customize, 'gfbs_branding_font_size', array(
                        'label' => __( 'Font Size', 'gfb_supply' ),
                        'section' => 'gfbs_navbar_branding_section',
                        'description' => __( 'Set the color.', 'gfb_supply' )
                    )));

                    //branding letter spacing
                    $wp_customize->add_setting( 'gfbs_branding_letter_spacing', array(
                        'default' => GFBS_DEFAULT_BRANDING_LETTER_SPACING,
                        'sanitize_callback' => 'gfbs_int_to_px',
                    ));
                    $wp_customize->add_control( new WP_Customize_Letter_Spacing_Control( $wp_customize, 'gfbs_branding_letter_spacing', array(
                        'label' => __( 'Letter Spacing', 'gfb_supply' ),
                        'section' => 'gfbs_navbar_branding_section',
                        'description' => __( 'Customize the width of the gap between letters.', 'gfb_supply' )
                    )));

                    //branding font color
                    $wp_customize->add_setting( 'gfbs_branding_font_color', array(
                        'default' => GFBS_DEFAULT_BRANDING_FONT_COLOR,
                        'sanitize_callback' => 'sanitize_hex_color',
                    ));
                    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gfbs_branding_font_color', array(
                        'label' => __( 'Font Color', 'gfb_supply' ),
                        'section' => 'gfbs_navbar_branding_section',
                        'description' => __( 'The color of the name of your company/website at the top left cornenr..', 'gfb_supply' )
                    )));

?>