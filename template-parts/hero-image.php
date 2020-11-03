<?php 

// $gfbs_hero_image_url = get_theme_mod( 'gfbs_hero_image_image' ) ? get_theme_mod( 'gfbs_hero_image_image' ) : get_template_directory_uri() . '/assets/img/toasting.jpg';
// $gfbs_hero_overlay_color = get_theme_mod( 'gfbs_hero_overlay_color' ) ? get_theme_mod( 'gfbs_hero_overlay_color' ) : '#000000';
// $gfbs_hero_overlay_opacity = get_theme_mod( 'gfbs_hero_overlay_opacity' ) ? get_theme_mod( 'gfbs_hero_overlay_opacity' ) : '.7';
// $gfbs_hero_image_height = get_theme_mod( 'gfbs_hero_image_height' ) ? get_theme_mod( 'gfbs_hero_image_height' ) . 'px' : '600px';

// $gfbs_cta_headline_text = get_theme_mod( 'gfbs_cta_headline_text' ) ? get_theme_mod( 'gfbs_cta_headline_text' ) : get_bloginfo( 'name' );
// $gfbs_cta_headline_font_family = get_theme_mod( 'gfbs_cta_headline_font_family' ) ? get_theme_mod( 'gfbs_cta_headline_font_family' ) : 'Roboto';
// $gfbs_cta_headline_color = get_theme_mod( 'gfbs_cta_headline_color' ) ? get_theme_mod( 'gfbs_cta_headline_color' ) : '#ffffff';
// $gfbs_cta_headline_font_size = get_theme_mod( 'gfbs_cta_headline_font_size' ) ? get_theme_mod( 'gfbs_cta_headline_font_size' ) : '52px';
// $gfbs_cta_headline_font_weight = get_theme_mod( 'gfbs_cta_headline_font_weight' ) ? get_theme_mod( 'gfbs_cta_tagline_font_weight' ) : '700';

// $gfbs_cta_tagline_text = get_theme_mod( 'gfbs_cta_tagline_text' ) ? get_theme_mod( 'gfbs_cta_tagline_text' ) : get_bloginfo( 'description' );
// $gfbs_cta_tagline_font_family = get_theme_mod( 'gfbs_cta_tagline_font_family' ) ? get_theme_mod( 'gfbs_cta_tagline_font_family' ) : 'Roboto';
// $gfbs_cta_tagline_color = get_theme_mod( 'gfbs_cta_tagline_color' ) ? get_theme_mod( 'gfbs_cta_tagline_color' ) : '#ffffff';
// $gfbs_cta_tagline_font_size = get_theme_mod( 'gfbs_cta_tagline_font_size' ) ? get_theme_mod( 'gfbs_cta_tagline_font_size' ) : '52px';
// $gfbs_cta_tagline_font_weight = get_theme_mod( 'gfbs_cta_tagline_font_weight' ) ? get_theme_mod( 'gfbs_cta_tagline_font_weight' ) : '700';

// $gfbs_cta_button_text = get_theme_mod( 'gfbs_cta_button_text' ) ? get_theme_mod( 'gfbs_cta_button_text' ) : 'View Store';
// $gfbs_cta_button_color = get_theme_mod( 'gfbs_cta_button_color' ) ? get_theme_mod( 'gfbs_cta_button_color' ) : '#df6900';
// $gfbs_cta_button_text_color = get_theme_mod( 'gfbs_cta_button_text_color' ) ? get_theme_mod( 'gfbs_cta_button_text_color' ) : '#ffffff';
?>

<div 
    id="hero-image" 
    class="container-fluid d-flex align-items-center justify-content-center position-relative " 
    style="
        background-image:url(<?php echo get_theme_mod( 'gfbs_showcase_image_url', get_template_directory_uri() . '/assets/img/toasting.jpg' ); ?>);
        height: <?php echo get_theme_mod( 'gfbs_showcase_height', '600px' );?>;
    "
>
    
    <div 
        class="hero-opaque position-absolute" 
        style="
            height: 100%;
            width: 100%;
            top: 0;
            left: 0;
            background-color: <?php echo get_theme_mod( 'gfbs_showcase_overlay_color', get_theme_mod( 'gfbs_dark_color', GFBS_DEFAULT_DARK_COLOR )); ?>; 
            opacity: <?php echo get_theme_mod( 'gfbs_showcase_overlay_opacity', '.7' ); ?>">
    </div>    
    
    <div class="hero-text position-relative">
        
        <div class="container">
            
            <h1><?php echo get_theme_mod( 'gfbs_headline_text' , get_bloginfo( 'name' )); ?></h1>           
            <p><?php echo get_theme_mod( 'gfbs_tagline_text' , get_bloginfo( 'description' )); ?></p>
            <a 
                href="<?php get_home_url() . '/store'; ?>"
                style="background-color: <?php echo get_theme_mod( 'gfbs_primary_color', GFBS_DEFAULT_PRIMARY_COLOR );?>" 
                class="btn btn-primary">Visit Store
            </a>
        
        </div>
    
    </div>

</div>