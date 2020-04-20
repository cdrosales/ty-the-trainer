<?php get_header(); ?>


<?php if( have_posts() ): 
    while ( have_posts() ):
        the_post();?> 

<section class="hero-container">
    <div class="hero-wrapper">
        <div class="hero-img">
            <?php the_post_thumbnail( 'full' );  ?>
        </div>

        <div class="hero-title">
            <h2><?php the_title(); ?></h2> 
            
        </div>
    </div>
</section>

<?php the_content(); ?>
    
            <?php endwhile; ?> 

            <?php else : ?>
                    <p>No posts found</p>
            <?php endif; ?>



<?php get_footer(); ?>