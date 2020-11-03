<?php 

function gfbs_enqueue_scripts() {

    if ( gfbs_make_google_font_url() ){
        wp_enqueue_style( 'google_fonts', gfbs_make_google_font_url() );
    }

    wp_enqueue_script( 'bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array( 'jquery' ), '4.5.3', true );
    // wp_enqueue_style( 'style_and_bootstrap', get_template_directory_uri() . '/assets/css/style.css', array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
    wp_enqueue_style( 'style_and_bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', array(), filemtime( get_template_directory() . '/style.css' ), 'all' );

}
add_action( 'wp_enqueue_scripts', 'gfbs_enqueue_scripts');

function gfbs_admin_scripts() {

    wp_enqueue_style( 'google_fonts_admin', 'https://fonts.googleapis.com/css2?family=Arimo:ital,wght@0,400;0,700;1,400;1,700&family=Grenze+Gotisch:wght@100;200;300;400;500;600;700;800;900&family=Oswald:wght@200;300;400;500;600;700&family=Play:wght@400;700&family=Righteous&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap' );
    wp_enqueue_style( 'admin_styles', get_template_directory_uri() . '/admin/style.css' );
}
add_action( 'admin_enqueue_scripts', 'gfbs_admin_scripts', 1000);

function gfbs_make_google_font_url() {

    $fonts_used_array = array();

    $theme_mods = array(
        'gfbs_branding_font_family',
        'gfbs_navbar_main_font_family',
        'gfbs_navbar_account_font_family',
        'gfbs_h1_font_family',
        'gfbs_h2_font_family',
        'gfbs_h3_font_family',
        'gfbs_h4_font_family',
        'gfbs_h5_font_family',
        'gfbs_h6_font_family',
        'gfbs_p_font_family',
        'gfbs_cta_headline_font_family',
        'gfbs_cta_tagline_font_family',
    );

    foreach ( $theme_mods as $theme_mod ) {
        $font_name = get_theme_mod( $theme_mod );
        !in_array( $font_name, $fonts_used_array ) ? array_push( $fonts_used_array, $font_name ) : false;
    }

    if ( sizeof( $fonts_used_array ) < 1 ) {
        return false;
    }

    sort( $fonts_used_array );

    $outputString = 'https://fonts.googleapis.com/css2?';
    
    in_array( 'arimo', $fonts_used_array ) ? $outputString .= 'family=Arimo:ital,wght@0,400;0,700;1,400;1,700&' : false;
    in_array( 'arimo', $fonts_used_array ) ? array_shift( $fonts_used_array ) : false;

    in_array( 'grenze_gotisch', $fonts_used_array ) ? $outputString .= 'family=Grenze+Gotisch:wght@100;200;300;400;500;600;700;800;900&' : false;
    in_array( 'grenze_gotisch', $fonts_used_array ) ? array_shift( $fonts_used_array ) : false;

    in_array( 'oswald', $fonts_used_array ) ? $outputString .= 'family=Oswald:wght@200;300;400;500;600;700&' : false;
    in_array( 'oswald', $fonts_used_array ) ? array_shift( $fonts_used_array ) : false;

    in_array( 'play', $fonts_used_array ) ? $outputString .= 'family=Play:wght@400;700&' : false;
    in_array( 'play', $fonts_used_array ) ? array_shift( $fonts_used_array ) : false;

    in_array( 'righteous', $fonts_used_array ) ? $outputString .= 'family=Righteous&' : false;
    in_array( 'righteous', $fonts_used_array ) ? array_shift( $fonts_used_array ) : false;

    in_array( 'roboto', $fonts_used_array ) ? $outputString .= 'family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&' : false;
    in_array( 'roboto', $fonts_used_array ) ? array_shift( $fonts_used_array ) : false;

    $outputString .= 'display=swap';

    return $outputString;
}

?>