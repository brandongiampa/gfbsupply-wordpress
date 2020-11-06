<!-- 
    <div style="background-color: <?php //echo get_theme_mod( 'gfbs_muted_dark_color', GFBS_DEFAULT_MUTED_DARK_COLOR ); ?>;" class="footer-sidebars container container-fluid">
        
        <div class="container p-3">

            <div class="row">

                <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center"> -->

                    <!-- <?php 
                    if ( is_active_sidebar( 'footer_left' )) {
                        dynamic_sidebar( 'footer_left' );
                    }
                    ?> -->

                <!-- </div>

                <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
 -->
                    <!-- <?php 
                    if ( is_active_sidebar( 'footer_right' )) {
                        dynamic_sidebar( 'footer_right' );
                    }
                    ?> -->

                <!-- </div>

            </div>

        </div>

    </div>
 -->
    <footer style="
        background-color: <?php echo get_theme_mod( 'gfbs_footer_bg_color', get_theme_mod( 'gfbs_dark_color', GFBS_DEFAULT_DARK_COLOR ) ); ?>;
        height: 80px;
    ">
        <h5 style="font-size: <?php echo get_theme_mod( 'gfbs_footer_h5_size' );?>;">DUUR</h5>
    </footer>
</body>
<?php wp_footer(); ?>
</html>