<nav aria-label="breadcrumb">

    <ol class="breadcrumb">

        <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>" class="text-primary">Home</a></li>

        <li class="breadcrumb-item"><a href="<?php echo get_home_url() . "/blog"; ?>" class="text-primary">Blog</a></li>
        
    <?php if ( is_author() ): ?>

        <li class="breadcrumb-item active" aria-current="page"><?php echo get_the_author_meta( 'first_name' ) . " " . get_the_author_meta( 'last_name' ); ?> </li>

    <?php elseif( is_single() ): ?>

        <?php echo wp_get_post_categories(); ?>

        <!-- <li class="breadcrumb-item" aria-current="page"><a href=""></a></li>
    
    <?php endif; ?>

    </ol>
    
</nav>


<?php



?>