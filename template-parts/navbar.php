
<?php require_once get_template_directory() . '/inc/classes/class-wp-bootstrap-navwalker.php'; ?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light" 
    style="background-color: <?php echo get_theme_mod( 'bfgs_navbar_bg_color', GFBS_DEFAULT_DARK_COLOR ); ?> !important;
    
    ">
    <div class="container">
        <a 
            class="navbar-brand" 
            href="<?php echo get_home_url(); ?>"
            style="
                font-family: '<?php echo get_theme_mod( 'gfbs_branding_font_family', ucfirst( GFBS_DEFAULT_H1_FONT_FAMILY ) );?>' !important;
                font-size: <?php echo get_theme_mod( 'gfbs_branding_font_size', 32 ) . "px"; ?> !important;
                color: <?php echo get_theme_mod( 'gfbs_branding_font_color', GFBS_DEFAULT_BRANDING_FONT_COLOR );?> !important;
                letter-spacing: <?php echo get_theme_mod( 'gfbs_branding_letter_spacing', GFBS_DEFAULT_BRANDING_LETTER_SPACING );?> !important;
            "
        >
        <?php bloginfo( 'name' ); ?>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <?php 
            wp_nav_menu( array (
                'theme_location'    =>      'gfbs_main_menu',
                'depth'             =>      2,
                'menu_class'        =>      'navbar-nav mr-auto',
                'container'         =>      false,
                'fallback_cb'       =>      'wp_bootstrap_navwalker::callback',
                'walker'            =>      new WP_Bootstrap_Navwalker()
            ) );?>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="dashicons dashicons-admin-users"></span>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <?php 
                        if ( is_user_logged_in() ):?>
                            <a class="dropdown-item" href="<?php echo get_home_url() . '/my-account.php'; ?>">My Account</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php wp_logout_url(); ?>">Log Out</a>
                            <div class="dropdown-divider"></div>
                        <?php 
                        else: ?>
                            <a class="dropdown-item" href="<?php echo get_home_url() . '/wp-login.php'; ?>">Log In</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="<?php echo get_home_url() . '/wp-login.php?action=register'; ?>">Create Account</a>
                            <div class="dropdown-divider"></div>
                        <?php
                        endif;
                        ?>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo get_home_url() . "/cart"; ?>">
                        <span class="dashicons dashicons-cart"></span>
                    </a>
                </li>
                <li class="nav-item">
                    <ul id="sidebar">
                        <?php
                        if ( is_active_sidebar( 'navbar-sidebar' ) ):
                            dynamic_sidebar( 'navbar-sidebar' );
                        endif;
                        ?>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>

