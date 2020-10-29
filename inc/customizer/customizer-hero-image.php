<?php
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
            'context'    => 'your_setting_context'
        )
    )
);

?>