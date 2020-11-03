<?php get_header(); ?>



<div class="page-content">
    <main>
        <div class="container">
            <h1 class="page-title">News</h1>
            <h2 class="page-title">News</h2>
            <h3 class="page-title">News</h3>
            <h4 class="page-title">News</h4>
            <h5 class="page-title">News</h5>
            <h6 class="page-title">News</h6>
            <p class="page-title">News</p>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#" class="text-primary"><?php bloginfo( 'title' ); ?></a></li>
                    <!-- <li class="breadcrumb-item"><a href="#">Shop</a></li> -->
                    <li class="breadcrumb-item active" aria-current="page">Blog</li>
                </ol>
            </nav>
            <?php 
            if ( have_posts() ):
                while ( have_posts() ): the_post(); ?>
            <a href="<?php the_permalink(); ?>">
                <div class="row py-4">
                    <div class="col-12 col-md-6 col-lg-4 d-flex align-items-center justify-content-center">
                        <?php 
                            if ( has_post_thumbnail() ): the_post_thumbnail( 'medium' );

                            else: ?>
                                <img style="max-height: 300px; max-width: 300px;" src="<?php echo get_template_directory_uri() . '/assets/img/toasting.jpg'; ?>" alt="Men toasting a beer.">
                            <?php
                            endif;
                            ?>
                    </div>
                    <div class="col-12 col-md-6 col-lg-8">
                        <h3><?php the_title(); ?></h3>
                        <span class="author">by: <?php the_author(); ?></span>
                        <?php the_excerpt(); ?>
                        <div class="meta">Posted: <span class="date"><?php the_date(); ?></span> in <span class="category"><?php the_category(); ?></span> </div>
                    </div>
                </div>
            </a>
            <?php      
                endwhile;
            endif;
            ?>
        </div>
    </main>
</div>

    

<?php get_footer(); ?>