<?php get_header(); ?>

<?php 
if ( have_posts() ):
    while ( have_posts() ): the_post(); ?>

<div class="page-content">
    <main>
        <div class="container">
            <h1 class="page-title"><?php the_title(); ?></h1>

                <?php if ( is_active_sidebar( 'shop-mobile' ) ): ?>

                    <div class="d-flex d-lg-none align-items-center justify-content-center py-4">

                        <?php dynamic_sidebar( 'shop-mobile' ); ?>

                    </div>

                <?php endif; ?>

                <div class="row">

                    <?php if ( is_active_sidebar( 'shop-left' ) ): ?>

                    <div class="col-lg-2 d-none d-lg-flex p-4">

                        <?php dynamic_sidebar( 'shop-pc' ); ?>

                    </div>

                    <div class="col-12 col-lg-10 p-4">

                        <?php the_content(); ?>

                    </div>

                    <?php else: ?>

                    <div class="col-12 p-4">

                        <?php the_content(); ?>

                    </div>

                    <?php endif; ?>

                </div>
        </div>
    </main>
</div>

    <?php      
    endwhile;

    wp_reset_postdata(); 

endif;


?>

<?php get_footer(); ?>