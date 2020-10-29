<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); ?>
    <?php get_template_part( 'inc/styles' ); ?>
</head>
<body <?php body_class();?>>
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-dark" role="navigation" id="navbar-main">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <a class="navbar-brand" href="#">
                    <?php has_custom_logo() ? the_custom_logo() : bloginfo( 'name' ); ?>
                </a>
                <?php
                wp_nav_menu( array(
                    'theme_location'    => 'gfbs_main_menu',
                    'depth'             => 2,
                    'container'         => 'div',
                    'container_class'   => 'collapse navbar-collapse',
                    'container_id'      => 'gfbs-main-menu',
                    'menu_class'        => 'nav navbar-nav',
                    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                    'walker'            => new WP_Bootstrap_Navwalker(),
                ) );
                ?>
                <div class="ml-md-auto">
                    <?php
                        if ( is_user_logged_in() ){
                            wp_nav_menu( array(
                                'theme_location'    => 'gfbs_logged_in_menu',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'gfbs-account-menu',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ) );
                        }
                        else {
                            wp_nav_menu( array(
                                'theme_location'    => 'gfbs_not_logged_in_menu',
                                'depth'             => 2,
                                'container'         => 'div',
                                'container_class'   => 'collapse navbar-collapse',
                                'container_id'      => 'gfbs-account-menu',
                                'menu_class'        => 'nav navbar-nav',
                                'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
                                'walker'            => new WP_Bootstrap_Navwalker(),
                            ) );
                        }
                    ?>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#gfbs-main-menu" aria-controls="gfbs-main-menu" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'your-theme-slug' ); ?>">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>