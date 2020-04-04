<?php get_header(); ?>

<h1><?php bloginfo('name'); ?></h1>

<?php if( have_posts() ): 
    while ( have_posts() ):
        the_post();?> 

    <?php the_content(); ?>


    <?php endwhile; ?> 

    <?php the_posts_navigation(); ?> 

<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>

        <div class="about-widget">
            <h2> My Story. My Mission </h2>
             <?php dynamic_sidebar('sidebar-about'); ?>
        </div>

<?php get_footer(); ?>