<?php get_header(); ?>

<h1><?php bloginfo('name'); ?></h1>

<?php if( have_posts() ): 
    while ( have_posts() ):
        the_post();?> 

    <h2><?php the_title(); ?></h2> 
    <h3><?php the_permalink(); ?> 
    <?php the_content(); ?>


    <?php endwhile; ?> 

    <?php the_posts_navigation(); ?> 

<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>


<?php get_footer(); ?>