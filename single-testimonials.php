<?php get_header('black'); ?>


    <div class="page-content testimonial-single-container">
        <?php if( have_posts() ): 
        while ( have_posts() ):
            the_post();?> 
        
        <div class="testimonials-singe-info-container">

            <div class="testimonials-single-img">
                <?php the_post_thumbnail( 'full' );  ?>
            </div>

            <div class="testimonials-single-info">

                <h3><?php the_title(); ?></h3> 
                <h4><?php echo get_the_excerpt(); ?></h4>

            </div>
        </div>

                <?php the_content(); ?>
        
                <?php endwhile; ?> 

                <?php else : ?>
                        <p>No posts found</p>
                <?php endif; ?>

    </div>


<?php get_footer(); ?>