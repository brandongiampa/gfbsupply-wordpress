<?php

$wp_customize->add_section( 'gfbs_showcase_text_section', array(
    'title' => __( 'Text', 'gfb_supply' ),
    'description' => __( 'Input the marketing slogan you would like to have front and center.', 'gfb_supply' ),
    'panel' => 'gfbs_showcase_subpanel',
    'priority' => 1
) );

$wp_customize->add_setting( 'gfbs_showcase_text_headline', array(
    'default' => 'Premium Beer for Premium People'
) );
$wp_customize->add_control( 'gfbs_showcase_text_headline', array(
    'label' => __( 'Headline', 'gfb_supply' ),
    'type' => 'text',
    'section' => 'gfbs_showcase_text_section',
    'priority' => 1
) );

$wp_customize->add_setting( 'gfbs_showcase_text_tagline', array(
    'default' => 'Premium Gluten Free Malts'
) );
$wp_customize->add_control( 'gfbs_showcase_text_tagline', array(
    'label' => __( 'Tagline', 'gfb_supply' ),
    'type' => 'text',
    'section' => 'gfbs_showcase_text_section',
    'priority' => 2
) );

$wp_customize->add_setting( 'gfbs_showcase_text_button', array(
    'default' => 'Visit Store'
) );
$wp_customize->add_control( 'gfbs_showcase_text_button', array(
    'label' => __( 'Button Text', 'gfb_supply' ),
    'type' => 'text',
    'section' => 'gfbs_showcase_text_section',
    'priority' => 3
) );

$wp_customize->add_setting( 'gfbs_showcase_text_button_url', array(
    'default' => 'Visit Store'
) );
$wp_customize->add_control( 'gfbs_showcase_text_button_url', array(
    'label' => __( 'Button URL', 'gfb_supply' ),
    'type' => 'text',
    'section' => 'gfbs_showcase_text_section',
    'priority' => 3
) );

?>