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

<section class="coming-soon-resources-container">

    <div class="widget-title">
            <h2>Coming Soon</h2> 
            <hr class="header-line">
    </div>

    <p>Working on getting you more resources to help your fitness journey. Check back later!</p>

    <img src="<?php echo get_template_directory_uri() . '/assets/images/resources-coming-soon-IMG.png'; ?>" class="resources-coming-soon-IMG"/>
</section>

<?php get_footer(); ?>