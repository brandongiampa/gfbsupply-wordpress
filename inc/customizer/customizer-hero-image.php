<?php

//hero image
$wp_customize->add_setting( 'gfbs_hero_image_image', array(
    'default' => get_template_directory_uri() . '/assets/img/toasting.jpg',
    'sanitize_callback' => 'sanitize_hex_color',
));
$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,
        'hero-image',
        array(
            'label'      => __( 'Upload hero image.', 'gfb_supply' ),
            'section'    => 'gfbs_theme_hero_image',
            'settings'   => 'gfbs_hero_image_image',
            'context'    => 'your_setting_context',
        )
    )
);

//overlay color
$wp_customize->add_setting( 'gfbs_hero_overlay_color', array(
    'default' => "#000000",
    'sanitize_callback' => 'sanitize_hex_color',
));
$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gfbs_hero_overlay_color', array(
    'label' => __( 'Hero Image Overlay Color', 'gfb_supply' ),
    'section' => 'gfbs_theme_hero_image',
    'description' => __( 'Color of opaque screen darkening image.', 'gfb_supply' )
)));



//overlay opacity
$wp_customize->add_setting( "gfbs_hero_overlay_opacity", array(
    'default' => '.7',
    'type' => 'theme_mod'
));
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    get_theme_mod( 'gfbs_hero_overlay_opacity' ) ? get_theme_mod( 'gfbs_hero_overlay_opacity' ) : '.7',
    array(
       'label'      => __( 'Overlay Opacity', 'gfb_supply' ), 
       'description' => __( 'Level of how dark or transparent your overlay should be.', 'gfb_supply' ),
       'settings'   => "gfbs_hero_overlay_opacity",
       'section'    => 'gfbs_theme_hero_image', 
       'type'    => 'select',
       'choices' => array(
           '.1' => '10%',
           '.15' => '15%',
           '.2' => '20%',
           '.25' => '20%',
           '.3' => '30%',
           '.35' => '35%',
           '.4' => '40%',
           '.45' => '45%',
           '.5' => '50%',
           '.55' => '55%',
           '.6' => '60%',
           '.65' => '65%',
           '.7' => '70%',
           '.75' => '75%',
           '.8' => '80%',
           '.85' => '85%',
           '.9' => '90%',
           '.95' => '95%',
           '1' => '100%'
       ),
       'panel' => 'gfbs_panel'
   )
) );

//height
$wp_customize->add_setting( "gfbs_hero_image_height", array(
    'sanitize_callback' => 'absint',
    'default' => 600,
    'type' => 'theme_mod'
));
$wp_customize->add_control( new WP_Customize_Control(
    $wp_customize,
    get_theme_mod( 'gfbs_hero_image_height' ) ? get_theme_mod( 'gfbs_hero_image_height' ) : 600,
    array(
       'label'      => __( 'Overlay Opacity', 'gfb_supply' ), 
       'description' => __( 'Height of image showcase.', 'gfb_supply' ),
       'settings'   => "gfbs_hero_image_height",
       'section'    => 'gfbs_theme_hero_image', 
       'type'    => 'number',
       'panel' => 'gfbs_panel'
   )
) );



?>