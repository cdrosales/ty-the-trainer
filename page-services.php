<?php get_header(); ?>


<?php if( have_posts() ): 
    while ( have_posts() ):
        the_post();?> 

<div class="hero-wrapper">
    <div class="hero-img">
        <?php the_post_thumbnail( 'full' );  ?>
    </div>
</div>

        <?php the_content(); ?>
 
        <?php endwhile; ?> 

        <?php else : ?>
                <p>No posts found</p>
        <?php endif; ?>

        <?php dynamic_sidebar('sidebar-personal-training'); ?>
        <?php dynamic_sidebar('sidebar-nutritional-plans'); ?>


<?php get_footer(); ?>