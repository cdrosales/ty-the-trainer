<?php get_header(); ?>


<?php if( have_posts() ): 
    while ( have_posts() ):
        the_post();?> 

<div class="hero-container">
    <div class="hero-wrapper">
        <div class="hero-img">
            <?php the_post_thumbnail( 'full' );  ?>
        </div>

        <div class="hero-title">
            <?php the_content(); ?>
    
            <?php endwhile; ?> 

            <?php else : ?>
                    <p>No posts found</p>
            <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>