<?php get_header('black'); ?>

<section class="macro-tool-form-container">
    <?php if( have_posts() ): 
        while ( have_posts() ):
            the_post();?> 

        <div class="widget-title">
            <h2>Let's Get Started</h2> 
            <hr class="header-line">
        </div>

        <div class="macro-tool-form-info-container">
            <h3>Macro Calculator</h3>
            <p>Fill out the information to checkout what your calorie intake should be during your fitness journey!</p>
        </div>

    <?php the_content(); ?>
        
                <?php endwhile; ?> 

                <?php else : ?>
                        <p>No posts found</p>
                <?php endif; ?>
</section>


<?php get_footer(); ?>