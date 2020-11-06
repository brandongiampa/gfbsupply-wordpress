



<nav aria-label="breadcrumb">

    <ol style="background-color: <?php echo get_theme_mod( 'gfbs_muted_light_color', GFBS_DEFAULT_MUTED_LIGHT_COLOR ); ?>" class="breadcrumb">

        <li class="breadcrumb-item"><a href="<?php echo get_home_url(); ?>" class="text-primary"><?php bloginfo( 'title' ); ?></a></li>
        
        <?php

        $gfbs_slug = get_post_field( 'post_name' );

        if ( 'shop' === $gfbs_slug ): 
        ?>

            <li class="breadcrumb-item active" aria-current="page">Shop</li>

        <?php else: ?>

            <li class="breadcrumb-item"><a href="<?php echo get_home_url() . '/shop'; ?>">Shop</a></li>

            <li class="breadcrumb-item active" aria-current="page"><?php the_title(); ?></li>

        <?php endif; ?>

    </ol>
    
</nav>