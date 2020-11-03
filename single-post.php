<?php get_header(); ?>

<?php 
if ( have_posts() ):
    while ( have_posts() ): the_post(); ?>

<div class="page-content">
    <main>
        <div class="container">
            <h1 class="page-title"><?php the_title(); ?></h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="text-primary"><?php bloginfo( 'title' ); ?></a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Shop</a></li> -->
                    <li class="breadcrumb-item active" aria-current="page">Shop</li>
                </ol>
                </nav>
            <div class="d-flex d-lg-none align-items-center justify-content-center">
                    <select class="shop-nav-select" name="ddd" id="ddd">
                        <option value="p">Practice Option #1</option>
                        <option value="df">Practice Option #2</option>
                        <option value="ds">ds</option>
                    </select>
                </div>
            <div class="row">
                <div class="col-2 d-none d-lg-block">
                    <?php wp_nav_menu( array(
                        'theme_location' => 'gfbs_wc_product_category_menu',
                        'menu_class' => 'nav flex-column'
                    ) ); ?>
                </div>
                <div class="col-12 col-lg-10">
                    <?php the_content(); ?>
                </div>
            </div>
        </div>
    </main>
</div>

    <?php      
    endwhile;
endif;


?>

<?php get_footer(); ?>