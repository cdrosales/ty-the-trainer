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
            <div class="personal-training-container"> 
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/icons/icon-personal-training.svg'; ?>" class="icon-personal-training"/></a>    
                <h3>Personal Training</h3>    
                <?php dynamic_sidebar('sidebar-personal-training'); ?>
            </div>

            <div class="nutritional-plans-container">
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/icons/icon-nutritional-plans.svg'; ?>" class="icon-nutritional-plans"/></a>    
                <h3>Nutritional Plans</h3> 
                <?php dynamic_sidebar('sidebar-nutritional-plans'); ?>
            </div>

        </div>


        <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/IMG-BANNER-SERVICES.png'; ?>" class="services-banner-img"/></a>


<?php get_footer(); ?>