<?php get_header('black'); ?>


    <section class="page-content">
        <?php if( have_posts() ): 
        while ( have_posts() ):
            the_post();?> 

            <h2><?php the_title(); ?></h2> 


            <?php the_post_thumbnail( 'full' );  ?>

                <?php the_content(); ?>
        
                <?php endwhile; ?> 

                <?php else : ?>
                        <p>No posts found</p>
                <?php endif; ?>

    </section>


<?php get_footer(); ?>