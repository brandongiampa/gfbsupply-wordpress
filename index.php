<?php get_header(); ?>

<div class="page-content">

    <main>

        <div class="container">

            <h1 class="page-title">News</h1>

            <?php get_template_part( 'template-parts/breadcrumb-blog' ); ?>
            <hr>
            <?php 
            if ( have_posts() ):
                while ( have_posts() ): the_post(); ?>
                
                <div class="row py-4">
                    <div class="posts-thumbnail col-12 col-md-6 col-lg-4">
                        <a href="<?php the_permalink(); ?>">
                        <?php 
                            if ( has_post_thumbnail() ): the_post_thumbnail( 'medium' );

                            else: ?>
                                <img src="<?php echo get_template_directory_uri() . '/assets/img/toasting.jpg'; ?>" alt="Men toasting a beer.">
                            <?php
                            endif;
                            ?>
                        </a>
                    </div>
                    <div class="col-12 col-md-6 col-lg-8">
                        <h3><?php the_title(); ?></h3>
                        <div class="author">
                            by: 
                            <a href="<?php echo get_the_author_meta( 'user_url' ); ?>">
                                <?php echo get_the_author_meta( 'first_name' ) . " " . get_the_author_meta( 'last_name' ); ?>
                            </a>
                        </div>
                        <?php the_excerpt(); ?>
                        <div class="meta">Posted <?php echo get_the_date(); ?> in <?php the_category( ', ' ); ?></div>
                    </div>
                </div>
                <hr>
                <?php      
                endwhile;
            endif;

            the_posts_pagination(); 
            ?>
        </div>
    </main>
</div>

    

<?php get_footer(); ?>