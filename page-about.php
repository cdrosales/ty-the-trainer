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

        <div class="about-widget">
            <div class="widget-title">
                <h2> My story. My mission </h2>
                <hr class="header-line">
            </div>

             <?php dynamic_sidebar('sidebar-about'); ?>
        </div>


<?php get_footer(); ?>