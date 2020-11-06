<div 
    id="hero-image" 
    class="container-fluid d-flex align-items-center justify-content-center position-relative " 
    style="
        background-image:url(<?php echo get_theme_mod( 'gfbs_showcase_image_url', get_template_directory_uri() . '/assets/img/toasting.jpg' ); ?>);
        height: <?php echo get_theme_mod( 'gfbs_showcase_height', 480 ) . "px" ;?>;
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
        
        <div class="container px-2">
            
            <h1
                style="
                    font-family: <?php echo get_theme_mod( 'gfbs_headline_font_family', "Righteous" ); ?> !important;
                    color: <?php echo get_theme_mod( 'gfbs_headline_font_color', GFBS_DEFAULT_LIGHT_COLOR ); ?> !important;
                    font-weight: <?php echo get_theme_mod( 'gfbs_headline_font_weight', 700 ); ?>  !important;
                    letter-spacing: <?php echo get_theme_mod( 'gfbs_headline_letter_spacing', 0 ) . "px"; ?> !important;
                "
            ><?php echo get_theme_mod( 'gfbs_showcase_text_headline' , 'Premium Beers for Premium People'); ?></h1>           
            <p style="
                    font-family: <?php echo get_theme_mod( 'gfbs_tagline_font_family', "Roboto" ); ?> !important;
                    color: <?php echo get_theme_mod( 'gfbs_tagline_font_color', GFBS_DEFAULT_MUTED_LIGHT_COLOR ); ?> !important;
                    font-weight: <?php echo get_theme_mod( 'gfbs_tagline_font_weight', 700 ); ?>  !important;
                    letter-spacing: <?php echo get_theme_mod( 'gfbs_tagline_letter_spacing', 0 ) . "px"; ?> !important;

            "><?php echo get_theme_mod( 'gfbs_showcase_text_tagline' , 'Premium Gluten Free Malts' ); ?></p>
            <a 
                href="<?php echo get_theme_mod( 'gfbs_showcase_text_button_url' , get_home_url() . '/shop' ); ?>"
                style="background-color: <?php echo get_theme_mod( 'gfbs_primary_color', GFBS_DEFAULT_PRIMARY_COLOR );?>" 
                class="btn btn-primary"><?php echo get_theme_mod( 'gfbs_showcase_text_button' , 'Visit Store' ); ?>
            </a>
        
        </div>
    
    </div>

</div>