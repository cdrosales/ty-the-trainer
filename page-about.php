<?php get_header(); ?>


<?php if( have_posts() ): 
    while ( have_posts() ):
        the_post();?> 

<div class="about-hero-wrapper">
    <div class="about-hero">
        <?php the_post_thumbnail(); ?>
    </div>

    <div class="about-hero-title">
        <?php the_content(); ?>
    </div>
</div>



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