<?php get_header('black'); ?>


    <section class="page-content testimonial-single-container">
        <?php if( have_posts() ): 
        while ( have_posts() ):
            the_post();?> 
        
        <div class="testimonials-singe-info-container">

            <div class="testimonials-single-img">
                <?php the_post_thumbnail( 'full' );  ?>
            </div>

            <div class="testimonials-single-info">

            <?php global $post;
            $post_slug = $post->post_name;
            echo '<h3>' . $post_slug. '</h3>';
            ?>

                <h4><?php the_title(); ?></h4> 

            </div>
        </div>

                <?php the_content(); ?>
        
                <?php endwhile; ?> 

                <?php else : ?>
                        <p>No posts found</p>
                <?php endif; ?>

    </section>


<?php get_footer(); ?>