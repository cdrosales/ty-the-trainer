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

        <div class="services-widget">
            <div class="widget-title">
                    <h2>What i can do for you</h2>
                    <hr class="header-line">
                </div>
                
            <?php dynamic_sidebar('sidebar-personal-training'); ?>
            <?php dynamic_sidebar('sidebar-nutritional-plans'); ?>

        </div>


        <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/IMG-BANNER-SERVICES.png'; ?>" class="services-banner-img"/></a>


<?php get_footer(); ?>