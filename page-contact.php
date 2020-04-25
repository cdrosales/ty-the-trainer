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


<section class="contact-form-container">
    <div class="widget-title">
                <h2>Let's Work</h2> 
                <hr class="header-line">
        </div>

        <?php the_content(); ?>
        
                <?php endwhile; ?> 

                <?php else : ?>
                        <p>No posts found</p>
                <?php endif; ?>

 </section>
<?php get_footer(); ?>