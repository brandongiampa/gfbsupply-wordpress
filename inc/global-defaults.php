<?php

require_once get_template_directory() . '/inc/global-defaults/default-color-scheme.php';
require_once get_template_directory() . '/inc/global-defaults/default-fonts.php';

//branding
define( 'GFBS_DEFAULT_BRANDING_FONT_FAMILY', 'Righteous' );
define( 'GFBS_DEFAULT_BRANDING_FONT_SIZE', '40px' );
define( 'GFBS_DEFAULT_BRANDING_LETTER_SPACING', '2px' );

//navbar
define( 'GFBS_DEFAULT_NAVBAR_FONT_FAMILY', 'Roboto' );
define( 'GFBS_DEFAULT_NAVBAR_FONT_SIZE', '14px' );

require_once get_template_directory() . '/inc/global-defaults/default-showcase-styles.php';



//links
define( 'GFBS_DEFAULT_LINK_FONT_WEIGHT', '500' );

/*navbar*/
define( 'GFBS_DEFAULT_NAVBAR_HEIGHT', '100px' );
define( 'GFBS_DEFAULT_NAVBAR_LINK_FONT_SIZE', '14px' );
define( 'GFBS_DEFAULT_NAVBAR_LINK_FONT_WEIGHT', '500' );
/* 
*
*showcase
*
*/



//headline
define( 'GFBS_DEFAULT_SHOWCASE_HEADLINE', get_bloginfo( 'name' ) );
define( 'GFBS_DEFAULT_SHOWCASE_HEADLINE_FONT_FAMILY', 'Righteous' );
define( 'GFBS_DEFAULT_SHOWCASE_HEADLINE_FONT_SIZE', '72px' );
define( 'GFBS_DEFAULT_SHOWCASE_HEADLINE_FONT_COLOR', GFBS_DEFAULT_LIGHT_COLOR );
define( 'GFBS_DEFAULT_SHOWCASE_HEADLINE_FONT_WEIGHT', GFBS_DEFAULT_HEADER_FONT_WEIGHT );

define( 'GFBS_DEFAULT_SHOWCASE_TAGLINE', get_bloginfo( 'description' ) );
define( 'GFBS_DEFAULT_SHOWCASE_TAGLINE_FONT_FAMILY', 'Righteous' );
define( 'GFBS_DEFAULT_SHOWCASE_TAGLINE_FONT_SIZE', '72px' );
define( 'GFBS_DEFAULT_SHOWCASE_TAGLINE_FONT_COLOR', GFBS_DEFAULT_MUTED_LIGHT_COLOR );
define( 'GFBS_DEFAULT_SHOWCASE_TAGLINE_FONT_WEIGHT', GFBS_DEFAULT_HEADER_FONT_WEIGHT );


?>