<?php get_header(); ?>

<?php 
if ( have_posts() ):
    while ( have_posts() ): the_post(); ?>

<div class="page-content">
    <main>
        <div class="container">
            <h1 class="page-title"><?php the_title(); ?></h1>
            <?php the_content(); ?>
        </div>
    </main>
</div>

    <?php      

    get_template_part( 'template-parts/pagination' );

    endwhile;
endif;

?>

<?php get_footer(); ?>