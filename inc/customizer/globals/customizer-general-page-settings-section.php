<?php

//general page settings
$wp_customize->add_section( 'gfbs_general_page_section', array(
    'priority' => 0,
    'title' => __( 'General Page Settings', 'gfb_supply'),
    'description' => __( 'PRO TIP: Google "color wheel" to find colors that work well together.', 'gfb_supply' ),
    'panel' => 'gfbs_globals_subpanel'
));
        //background color
        $wp_customize->add_setting( 'gfbs_background_color', array(
            'default' => GFBS_DEFAULT_LIGHT_COLOR,
            'sanitize_callback' => 'sanitize_hex_color',
        ));
        $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'gfbs_background_color', array(
            'label' => __( 'Background Color', 'gfb_supply' ),
            'section' => 'gfbs_general_page_section',
            'description' => __( 'Site background color.', 'gfb_supply' )
        )));

?>