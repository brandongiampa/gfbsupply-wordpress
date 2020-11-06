



<nav aria-label="breadcrumb">

    <ol class="breadcrumb">

        <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>" class="text-primary">GFB Supply</a></li>

        <li class="breadcrumb-item"><a href="<?php echo get_home_url() . "/blog"; ?>" class="text-primary">Blog</a></li>
        
    <?php if ( is_author() ): ?>

        <li class="breadcrumb-item active" aria-current="page"><?php echo get_the_author_meta( 'first_name' ) . " " . get_the_author_meta( 'last_name' ); ?> </li>

    <?php elseif ( is_category() ): 

        echo "&#160;/&#160;" . get_category_parents( get_query_var( 'cat' ), true, "&#160;/&#160;" ); ?>

    <?php endif; ?>

            <!-- <li class="breadcrumb-item active" aria-current="page">Blog</li>


            <li class="breadcrumb-item"><a href="<?php //echo get_home_url() . '/blog'; ?>">Blog</a></li>

            <li class="breadcrumb-item active" aria-current="page"><?php //the_title(); ?></li> -->

    </ol>

</nav>