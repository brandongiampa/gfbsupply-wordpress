<?php get_header(); ?>

<?php get_template_part( '/template-parts/hero-image' ); ?>

<div class="container" style="padding-top: 64px; padding-bottom: 64px;">
    <?php 
    
    if ( have_posts() ):
        while ( have_posts() ): the_post();
            the_content();
        endwhile;
    endif;

    ?>
</div>

<?php get_footer(); ?>