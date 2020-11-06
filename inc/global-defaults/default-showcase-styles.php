<?php

define( 'GFBS_DEFAULT_SHOWCASE_HEIGHT', 600 );
define( 'GFBS_DEFAULT_SHOWCASE_IMAGE_URL', get_template_directory() . '/assets/img/toasting.jpg' );
define( 'GFBS_DEFAULT_SHOWCASE_OVERLAY_COLOR', GFBS_DEFAULT_DARK_COLOR );
define( 'GFBS_DEFAULT_SHOWCASE_OVERLAY_OPACITY', 0.7 );

//headline
define( 'GFBS_DEFAULT_HEADLINE_TEXT', get_bloginfo( 'name' ) );
define( 'GFBS_DEFAULT_HEADLINE_FONT_FAMILY', 'righteous' );
define( 'GFBS_DEFAULT_HEADLINE_FONT_SIZE', 72 );
define( 'GFBS_DEFAULT_HEADLINE_FONT_WEIGHT', 700 );
define( 'GFBS_DEFAULT_HEADLINE_LETTER_SPACING', 0 );
define( 'GFBS_DEFAULT_HEADLINE_FONT_COLOR', GFBS_DEFAULT_LIGHT_COLOR );

//tagline
define( 'GFBS_DEFAULT_TAGLINE_TEXT', get_bloginfo( 'description' ) );
define( 'GFBS_DEFAULT_TAGLINE_FONT_FAMILY', 'righteous' );
define( 'GFBS_DEFAULT_TAGLINE_FONT_SIZE', 32 );
define( 'GFBS_DEFAULT_TAGLINE_FONT_WEIGHT', 700 );
define( 'GFBS_DEFAULT_TAGLINE_LETTER_SPACING', 0 );
define( 'GFBS_DEFAULT_TAGLINE_FONT_COLOR', GFBS_DEFAULT_MUTED_LIGHT_COLOR );

//cta button
define( 'GFBS_DEFAULT_CTA_BUTTON_TEXT', 'Visit Store' );
define( 'GFBS_DEFAULT_CTA_BUTTON_URL', get_template_directory_uri() . '/store' );
define( 'GFBS_DEFAULT_CTA_BUTTON_BG_COLOR', get_theme_mod( 'gfbs_primary_color', GFBS_DEFAULT_PRIMARY_COLOR ) );
define( 'GFBS_DEFAULT_CTA_BUTTON_SELECTED_BORDER_COLOR', get_theme_mod( 'gfbs_secondary_color', GFBS_DEFAULT_PRIMARY_COLOR ) );
define( 'GFBS_DEFAULT_CTA_BUTTON_FONT_FAMILY', 'roboto' );
define( 'GFBS_DEFAULT_CTA_BUTTON_FONT_SIZE', 20 );
define( 'GFBS_DEFAULT_CTA_BUTTON_FONT_WEIGHT', 700 );
define( 'GFBS_DEFAULT_CTA_BUTTON_LETTER_SPACING', 0 );
define( 'GFBS_DEFAULT_CTA_BUTTON_FONT_COLOR', get_theme_mod( 'gfbs_light_color', GFBS_DEFAULT_LIGHT_COLOR ) );

?>