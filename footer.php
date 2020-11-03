<?php wp_footer(); ?>
    <div class="container container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                    <?php dynamic_sidebar( 'Footer Left' ); ?>
                </div>
                <div class="col-12 col-md-6 d-flex flex-column justify-content-center align-items-center">
                    <?php dynamic_sidebar( 'Footer Right' ); ?>
                </div>
            </div>
        </div>
    </div>
    <footer style="
        background-color: <?php echo get_theme_mod( 'gfbs_footer_bg_color', '#333333' ); ?>
        ;
        height: 80px;
    ">
    <h5 style="font-size: <?php echo get_theme_mod( 'gfbs_footer_h5_size' );?>;">DUUR</h5>
    </footer>
</body>
</html>