<h1 class="page-title"><?php the_title(); ?></h1>

<div class="blog-date">
    <?php the_time(); ?>
</div>

<div class="blog-author">
    Written by: <a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php echo get_the_author_meta( 'first_name' ) . " " . get_the_author_meta( 'last_name' ); ?></a>
</div>

<hr>

<?php get_template_part( 'breadcrumb-blog' ); ?>

<?php get_template_part( 'product-menu-mobile' ); ?>

<?php if ( has_post_thumbnail() ){
    the_post_thumbnail(); 
}?>

<?php the_content(); ?>