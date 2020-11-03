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
            <?php the_content(); ?>
        </div>
    </main>
</div>

    <?php      
    endwhile;
endif;


?>

<?php get_footer(); ?>