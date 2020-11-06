<?php

class GFBS_Customizer_Section {
    private $name;
    private $wp_customize;
    private $title;
    private $description;
    private $panel;

    function __construct( $wp_customize, $name, $title, $panel, $priority ) {
        $this->wp_customize = $wp_customize;
        $this->title = $title;
        $this->panel = $panel;
        $this->priority = $priority;
    }

    public function set_description( $description ) {
        $this->description = $description;
    }

    public function add() {
        $this->wp_customize->add_section( $this->name, array(
            'priority' => $this->priority,
            'title' => __( $this->title, 'gfb_supply'),
            'description' => __( $this->description, 'gfb_supply' ),
            //'panel' => $this->panel
        ));
    }
}

class GFBS_Customizer_Setting {
    private $wp_customize;
    private $setting_name;
    private $default;
    private $sanitize_callback;

    public function __construct( $wp_customize, $setting_name, $default, $sanitize_callback = false ) {
        $this->wp_customize = $wp_customize;
        $this->title = $title;
        $this->default = $default;
        $this->sanitize_callback = $sanitize_callback;
    }

    public function add() {
        if ( $sanitize_callback ) {
            $this->wp_customize->add_setting( $this->setting_name, array(
                'default' => $this->default,
                'sanitize_callback' => $this->sanitize_callback
            ));
        }
        else {
            $this->wp_customize->add_setting( $this->setting_name, array(
                'default' => $this->default
            ));
        }
    }

    public function create_control( $type, $label, $description, $section, $panel = "" ) {

        switch  ( $type ) {
            case 'font_family': {
                $this->wp_customize->add_control( $this->setting_name, array(
                    'label' => __( $label, 'gfb_supply' ),
                    'section' => $section,
                    'description' => __( $description, 'gfb_supply' ),
                    'type' => 'select',
                    'choices' => GFBS_FONT_FAMILY_ARRAY
                ));
                break;
            }
            case 'text': {
                $this->wp_customize->add_control( $this->setting_name, array(
                    'label' => __( $label, 'gfb_supply' ),
                    'section' => $section,
                    'description' => __( $description, 'gfb_supply' ),
                    'type' => 'text'
                ));
                break;
            }
            case 'font_size': {
                $this->wp_customize->add_control( new WP_Customize_Font_Size_Control( $this->wp_customize, 
                "gfbs_" . $this->name . "_font_size", array(
                    'label' => __( $label, 'gfb_supply' ),
                    'section' => $section,
                    'description' => __( $description, 'gfb_supply' )
                )));
                break;
            }
            case 'font_weight': {
                $this->wp_customize->add_control( new WP_Customize_Font_Weight_Control( $this->wp_customize, 
                "gfbs_" . $this->name . "_font_weight", array(
                    'label' => __( $label, 'gfb_supply' ),
                    'section' => $section,
                    'description' => __( $description, 'gfb_supply' )
                )));
                break;
            }
            case 'font_color': {
                $this->wp_customize->add_control( new WP_Customize_Color_Control( $this->wp_customize, 
                "gfbs_" . $this->name . "_font_color", array(
                    'label' => __( $label, 'gfb_supply' ),
                    'section' => $section,
                    'description' => __( $description, 'gfb_supply' )
                )));
                break;
            }
            case 'bg_color': {
                $this->wp_customize->add_control( new WP_Customize_Color_Control( $this->wp_customize, 
                "gfbs_" . $this->name . "_bg_color", array(
                    'label' => __( $label, 'gfb_supply' ),
                    'section' => $section,
                    'description' => __( $description, 'gfb_supply' )
                )));
                break;
            }
            case 'color': {
                $this->wp_customize->add_control( new WP_Customize_Color_Control( $this->wp_customize, 
                "gfbs_" . $this->name . "_color", array(
                    'label' => __( $label, 'gfb_supply' ),
                    'section' => $this->section,
                    'description' => __( $description, 'gfb_supply' )
                )));
                break;
            }
            case 'letter_spacing': {
                $this->wp_customize->add_control( new WP_Customize_Letter_Spacing_Control( $this->wp_customize, 
                "gfbs_" . $this->name . "_letter_spacing", array(
                    'label' => __( $label, 'gfb_supply' ),
                    'section' => $section,
                    'description' => __( $description, 'gfb_supply' )
                )));
                break;
            }
            case 'navbar_height': {
                $this->wp_customize->add_control( new WP_Customize_Navbar_Height_Control( $this->wp_customize, 
                "gfbs_" . $this->name . "_navbar_height", array(
                    'label' => __( $label, 'gfb_supply' ),
                    'section' => $section,
                    'description' => __( $description, 'gfb_supply' )
                )));
                break;
            }
            default: {
                throw new Exception( "That is not a valid WordPress control type." );
            }
        }
    }
}


?>