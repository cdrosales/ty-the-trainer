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

<!-- <section class="coming-soon-resources-container">

    <div class="widget-title">
            <h2>Coming Soon</h2> 
            <hr class="header-line">
    </div>

    <p>Working on getting you more resources to help your fitness journey. Check back later!</p>

    <img src="<?php echo get_template_directory_uri() . '/assets/images/resources-coming-soon-IMG.png'; ?>" class="resources-coming-soon-IMG"/>
</section> -->

<section class="home-equipment-container top-five-wrapper">

<div class="widget-title">
            <h2>Ty's Top 5 Home Equipment</h2> 
            <hr class="header-line">
    </div>
<?php

        $equipment = new WP_Query(array(
                    'post_type' => 'equipment', 
                    'posts_per_page' => '12', 
                    'order_by' => 'date',
                    'order' => 'ASC'

                ));

                echo '<div class="top-five-container">';

            while($equipment->have_posts()) :

            echo $equipment->the_post();
            
            echo '<div class="top-five-item-container">';
            echo '<h5>' . get_the_title() . '</h5>';
            echo the_content();
            echo '</div>';
     
        endwhile;

        wp_reset_postdata();

        echo '</div>';

?>

</section>

<?php get_footer(); ?>