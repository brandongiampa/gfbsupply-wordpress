<?php get_header(); ?>

<?php 
if ( have_posts() ):
    while ( have_posts() ): the_post(); ?>

<div class="page-content">

    <main>

        <div class="container">
            
            <div class="row">
                
                <?php if ( is_active_sidebar( 'blog-right' ) ) : ?>

                    <div class="blog col-12 col-lg-9">

                        <?php get_template_part( 'template-parts/blog-post' ); ?>

                    </div>

                    <div class="col-12 col-lg-3 p-4">

                        <?php dynamic_sidebar( 'blog-right' ); ?>

                    </div>

                <?php

                else: ?>

                    <div class="blog col-12">

                        <?php get_template_part( 'template-parts/blog-post' ); ?>

                    </div>

                <?php endif; ?>

            </div>

        </div>

    </main>

</div>

    <?php      
    endwhile;
endif;


?>

<?php get_footer(); ?>