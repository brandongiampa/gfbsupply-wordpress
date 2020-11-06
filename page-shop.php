<?php get_header(); ?>

<?php 
if ( have_posts() ):
    while ( have_posts() ): the_post(); ?>

<div class="page-content">

    <main>

        <div class="container">

            <h1 class="page-title"><?php the_title(); ?></h1>
            
            <?php //get_template_part( 'template-parts/breadcrumb-shop'); ?>

            <?php //get_template_part( 'template-parts/product-menu-mobile'); ?>

            <div class="row">

                <?php if ( is_active_sidebar( 'shop-left' ) ): ?>

                <div class="col-12 col-lg-2 p-4">

                    <?php dynamic_sidebar( 'shop-left' ); ?>

                </div>

                <div class="col-12 col-lg-10 p-4">

                    <?php //get_template_part( 'template-parts/shop-content-area' ); ?>
                    <?php the_content(); ?>

                </div>

                <?php else: ?>

                <div class="col-12 p-4">

                    <?php //get_template_part( 'template-parts/shop-content-area' ); ?>
                    <?php the_content(); ?>

                </div>

                <?php endif; ?>

            </div>

        </div>

    </main>

</div>

    <?php endwhile;

endif;


?>

<?php get_footer(); ?>