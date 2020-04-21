<?php get_header('black'); ?>

<section class="macro-tool-form-container">
    <?php if( have_posts() ): 
        while ( have_posts() ):
            the_post();?> 

        <div class="widget-title">
            <h2><?php the_title(); ?></h2> 
            <hr class="header-line">
        </div>


    <?php the_content(); ?>
        
                <?php endwhile; ?> 

                <?php else : ?>
                        <p>No posts found</p>
                <?php endif; ?>
</section>


<?php get_footer(); ?>