<?php get_header(); ?>


<?php if( have_posts() ): 
    while ( have_posts() ):
        the_post();?> 

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

        <div class="about-widget">
            <div class="about-widget-title">
                <h2> My Story. My Mission </h2>
                <div class="line-under-title"></div>
            </div>

             <?php dynamic_sidebar('sidebar-about'); ?>
        </div>


<?php get_footer(); ?>