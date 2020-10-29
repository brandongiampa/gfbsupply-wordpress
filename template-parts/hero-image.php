<?php 

$gfbs_hero_image_url = get_theme_mod( 'gfbs_hero_image_image' ) ? get_theme_mod( 'gfbs_hero_image_image' ) : get_template_directory_uri() . '/assets/img/toasting.jpg';
$gfbs_hero_overlay_color = get_theme_mod( 'gfbs_hero_overlay_color' ) ? get_theme_mod( 'gfbs_hero_overlay_color' ) : '#000000';
$gfbs_hero_overlay_opacity = get_theme_mod( 'gfbs_hero_overlay_opacity' ) ? get_theme_mod( 'gfbs_hero_overlay_opacity' ) : '.7';
$gfbs_hero_image_height = get_theme_mod( 'gfbs_hero_image_height' ) ? get_theme_mod( 'gfbs_hero_image_height' ) . 'px' : '600px';

$gfbs_cta_headline_text = get_theme_mod( 'gfbs_cta_headline_text' ) ? get_theme_mod( 'gfbs_cta_headline_text' ) : get_bloginfo( 'name' );
$gfbs_cta_headline_font_family = get_theme_mod( 'gfbs_cta_headline_font_family' ) ? get_theme_mod( 'gfbs_cta_headline_font_family' ) : 'Roboto';
$gfbs_cta_headline_color = get_theme_mod( 'gfbs_cta_headline_color' ) ? get_theme_mod( 'gfbs_cta_headline_color' ) : '#ffffff';
$gfbs_cta_headline_font_size = get_theme_mod( 'gfbs_cta_headline_font_size' ) ? get_theme_mod( 'gfbs_cta_headline_font_size' ) : '52px';
$gfbs_cta_headline_font_weight = get_theme_mod( 'gfbs_cta_headline_font_weight' ) ? get_theme_mod( 'gfbs_cta_tagline_font_weight' ) : '700';

$gfbs_cta_tagline_text = get_theme_mod( 'gfbs_cta_tagline_text' ) ? get_theme_mod( 'gfbs_cta_tagline_text' ) : get_bloginfo( 'description' );
$gfbs_cta_tagline_font_family = get_theme_mod( 'gfbs_cta_tagline_font_family' ) ? get_theme_mod( 'gfbs_cta_tagline_font_family' ) : 'Roboto';
$gfbs_cta_tagline_color = get_theme_mod( 'gfbs_cta_tagline_color' ) ? get_theme_mod( 'gfbs_cta_tagline_color' ) : '#ffffff';
$gfbs_cta_tagline_font_size = get_theme_mod( 'gfbs_cta_tagline_font_size' ) ? get_theme_mod( 'gfbs_cta_tagline_font_size' ) : '52px';
$gfbs_cta_tagline_font_weight = get_theme_mod( 'gfbs_cta_tagline_font_weight' ) ? get_theme_mod( 'gfbs_cta_tagline_font_weight' ) : '700';

$gfbs_cta_button_text = get_theme_mod( 'gfbs_cta_button_text' ) ? get_theme_mod( 'gfbs_cta_button_text' ) : 'View Store';
$gfbs_cta_button_color = get_theme_mod( 'gfbs_cta_button_color' ) ? get_theme_mod( 'gfbs_cta_button_color' ) : '#df6900';
$gfbs_cta_button_text_color = get_theme_mod( 'gfbs_cta_button_text_color' ) ? get_theme_mod( 'gfbs_cta_button_text_color' ) : '#ffffff';
?>

<div id="hero-image" class="container-fluid" style="background-image:url(<?php echo $gfbs_hero_image_url;?>); height: <?php echo $gfbs_hero_image_height;?>;">
    
    <div class="hero-opaque" style="background-color: <?php echo $gfbs_hero_overlay_color;?>; opacity: <?php echo $gfbs_hero_overlay_opacity; ?>"></div>    
    
    <div class="hero-text">
        
        <div class="container">
            
            <h1 style="
                color: <?php echo $gfbs_cta_headline_color; ?>;
                font-weight: <?php echo $gfbs_cta_headline_font_weight; ?>;
                font-size: <?php echo $gfbs_cta_headline_font_size; ?>;
                font-family: <?php echo $gfbs_cta_headline_font_family; ?>;
            "><?php echo $gfbs_cta_headline_text; ?>
            </h1>           
            <p style="
                color: <?php echo $gfbs_cta_tagline_color; ?>;
                font-weight: <?php echo $gfbs_cta_tagline_font_weight; ?>;
                font-size: <?php echo $gfbs_cta_tagline_font_size; ?>;
                font-family: <?php echo $gfbs_cta_tagline_font_family; ?>;
            "><?php echo $gfbs_cta_tagline_text; ?></p>
            
            <a href="<?php echo get_site_url() . '/store';?>" class="btn btn-lg btn-primary text-center" 
                style="
                    background-color: <?php echo $gfbs_cta_button_color;?>;
                    border-color: <?php echo $gfbs_cta_button_color;?>;
                    color: <?php echo $gfbs_cta_button_text_color;?>;
                ">
                Visit Store
            </a>
        
        </div>
    
    </div>

</div>