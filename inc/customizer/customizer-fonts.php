<?php

class FontToChange {
    private $name;
    private $size;
    private $weight;
    private $family;
    private $title;
    private $description;
    private $spacing;

    public function __construct( $name, $size, $weight, $family = 'roboto', $spacing = '0px' ) {
        $this->name = $name;
        $this->size = $size;
        $this->weight = $weight;
        $this->family = $family;
        $this->spacing = $spacing;
    }

    public function setTitle( $title ) {
        $this->title = $title;
    }

    public function setDescription( $description ) {
        $this->description = $description;
    }

    public function getName(){
        return $this->name;
    }

    public function getSize(){
        return $this->size;
    }
    public function getWeight(){
        return $this->weight;
    }
    public function getFamily(){
        return $this->family;
    }
    public function getTitle(){
        return $this->title;
    }
    public function getDescription(){
        return $this->description;
    }
    public function getSpacing(){
        return $this->spacing;
    }
}

//branding font
$gfbs_branding_font = new FontToChange( 'branding', '24px', '700', 'righteous' );
$gfbs_branding_font->setTitle( 'Branding Header Font' );
$gfbs_branding_font->setDescription( 'Font for company name at top left (if not using image).' );

//main nav links
$gfbs_navbar_main_font = new FontToChange( 'navbar_main', '16px', '500' );
$gfbs_navbar_main_font->setTitle( 'Navbar Site Links' );
$gfbs_navbar_main_font->setDescription( 'Site navigation links next to branding.' );

//account nav links
$gfbs_navbar_account_font = new FontToChange( 'navbar_account', '14px', '500' );
$gfbs_navbar_account_font->setTitle( 'Navbar Account Links' );
$gfbs_navbar_account_font->setDescription( 'My account, login, etc.' );

//h1
$gfbs_h1_font = new FontToChange( 'h1', '32px', '700', 'righteous' );
$gfbs_h1_font->setTitle( 'Header 1' );
$gfbs_h1_font->setDescription( 'These are usually the biggest, main headers.' );

//h2
$gfbs_h2_font = new FontToChange( 'h2', '24px', '700', 'righteous' );
$gfbs_h2_font->setTitle( 'Header 2' );
$gfbs_h2_font->setDescription( 'Headers of secondary importance.' );

//h3
$gfbs_h3_font = new FontToChange( 'h3', '20px', '600' );
$gfbs_h3_font->setTitle( 'Header 3' );
$gfbs_h3_font->setDescription( '' );

//h4
$gfbs_h4_font = new FontToChange( 'h4', '18px', '600' );
$gfbs_h4_font->setTitle( 'Header 4' );
$gfbs_h4_font->setDescription( '' );

//h5
$gfbs_h5_font = new FontToChange( 'h5', '16px', '600' );
$gfbs_h5_font->setTitle( 'Header 5' );
$gfbs_h5_font->setDescription( '' );

//h6
$gfbs_h6_font = new FontToChange( 'h6', '14px', '600' );
$gfbs_h6_font->setTitle( 'Header 6' );
$gfbs_h6_font->setDescription( '' );

//paragraph
$gfbs_p_font = new FontToChange( 'p', '16px', '400' );
$gfbs_p_font->setTitle( 'Paragraph' );
$gfbs_p_font->setDescription( '' );

$fonts_to_change = array(
    $gfbs_branding_font,
    $gfbs_navbar_main_font,
    $gfbs_navbar_account_font,
    $gfbs_h1_font,
    $gfbs_h2_font,
    $gfbs_h3_font,
    $gfbs_h4_font,
    $gfbs_h5_font,
    $gfbs_h6_font,
    $gfbs_p_font
);

//arrays of dropdown options 
$gfbs_font_family_array = array(
    'arimo' => 'Arimo',
    'grenze_gotisch' => 'Grenze Gotisch',
    'oswald' => 'Oswald',
    'play' => 'Play',
    'righteous' => 'Righteous',
    'roboto' => 'Roboto'
);
$gfbs_font_sizes_array = array(
    '10px' => '10px',
    '12px' => '12px',
    '14px' => '14px',
    '16px' => '16px',
    '18px' => '18px',
    '20px' => '20px',
    '24px' => '24px',
    '28px' => '28px',
    '32px' => '32px',
    '36px' => '36px',
    '40px' => '40px',
    '44px' => '44px',
    '48px' => '48px',
    '52px' => '52px',
    '56px' => '56px',
    '60px' => '60px',
    '64px' => '64px',
    '68px' => '68px',
    '72px' => '72px',
);
$gfbs_font_weights_array = array(
    '100' => '100 (Thin)',
    '200' => '200',
    '300' => '300',
    '400' => '400 (Standard)',
    '500' => '500',
    '600' => '600',
    '700' => '700 (Bold)',
    '800' => '800',
    '900' => '900' 
);
$gfbs_font_spacings_array = array(
    '0px' => '0px',
    '1px' => '1px',
    '2px' => '2px',
    '3px' => '3px',
    '4px' => '4px',
    '5px' => '5px', 
    '6px' => '6px',
    '7px' => '7px',
    '8px' => '8px'
);


foreach ( $fonts_to_change as $font_to_change ) {

    $name = $font_to_change->getName();
    $size = $font_to_change->getSize();
    $weight = $font_to_change->getWeight();
    $family = $font_to_change->getFamily();
    $title = $font_to_change->getTitle();
    $description = $font_to_change->getDescription();
    $color = get_theme_mod( "gfbs_${name}_font_color" ) ? get_theme_mod( "gfbs_${name}_font_color" ) : get_theme_mod( "gfbs_dark_color" );
    $spacing = get_theme_mod( "gfbs_${name}_font_spacing" ) ? get_theme_mod( "gfbs_${name}_font_spacing" ) : $font_to_change->getSpacing();
    
    //family
    $wp_customize->add_setting( "gfbs_${name}_font", array(
        'default' => $family,
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        "gfbs_${name}_font_family",
        array(
           'label'      => __( $title, 'gfb_supply' ), 
           'description' => __( $description, 'gfb_supply' ),
           'settings'   => "gfbs_${name}_font",
           'section'    => THEME_FONTS_SECTION, 
           'type'    => 'select',
           'choices' => $gfbs_font_family_array,
           'panel' => THEME_PANEL
       )
    ) );
    //size
    $wp_customize->add_setting( "gfbs_${name}_font_size", array(
        'default' => $size,
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        "gfbs_${name}_font_size",
        array(
           'settings'   => "gfbs_${name}_font_size",
           'section'    => THEME_FONTS_SECTION, 
           'type'    => 'select',
           'choices' => $gfbs_font_sizes_array,
           'panel' => THEME_PANEL
       )
    ) );
    //weight
    $wp_customize->add_setting( "gfbs_${name}_font_weight", array(
        'default' => $weight,
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        "gfbs_${name}_font_weight",
        array(
           'settings'   => "gfbs_${name}_font_weight",
           'section'    => THEME_FONTS_SECTION, 
           'type'    => 'select',
           'choices' => $gfbs_font_weights_array,
           'panel' => THEME_PANEL
       )
    ) );
    //color
    $wp_customize->add_setting( "gfbs_${name}_font_color", array(
        'default' => $color,
        'sanitize_callback' => 'sanitize_hex_color',
    ));
    $wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, "gfbs_${name}_font_color", array(
        'section' => THEME_FONTS_SECTION,
    )));
    //letter-spacing
    $wp_customize->add_setting( "gfbs_${name}_font_spacing", array(
        'default' => $spacing,
        'type' => 'theme_mod'
    ));
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        "gfbs_${name}_font_spacing",
        array(
           'settings'   => "gfbs_${name}_font_spacing",
           'section'    => THEME_FONTS_SECTION, 
           'type'    => 'select',
           'choices' => $gfbs_font_spacings_array,
           'panel' => THEME_PANEL
       )
    ) );
}

?>