
<?php require_once get_template_directory() . '/inc/classes/class-wp-bootstrap-navwalker.php'; ?>


<nav class="navbar navbar-expand-lg navbar-dark bg-dark text-light">
    <div class="container">
        <a class="navbar-brand" href="<?php echo get_home_url(); ?>">Navbar</a>
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
            ) );
            if ( is_user_logged_in() ){
                wp_nav_menu( array (
                    'theme_location'    =>      'gfbs_logged_in_menu',
                    'depth'             =>      1,
                    'menu_class'        =>      'navbar-nav ml-auto',
                    'container'         =>      false,
                    'fallback_cb'       =>      'wp_bootstrap_navwalker::callback',
                    'walker'            =>      new WP_Bootstrap_Navwalker()
                ) );
            }
            else {
                wp_nav_menu( array (
                    'theme_location'    =>      'gfbs_not_logged_in_menu',
                    'depth'             =>      1,
                    'menu_class'        =>      'navbar-nav ml-auto',
                    'container'         =>      false,
                    'fallback_cb'       =>      'wp_bootstrap_navwalker::callback',
                    'walker'            =>      new WP_Bootstrap_Navwalker()
                ) );
            }
            ?>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>
    </div>
</nav>

