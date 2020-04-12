<?php get_header(); ?>



    <div class="hero-container">
        <div class="hero-wrapper">
            <div class="hero-img">
                <?php the_post_thumbnail( 'full' );  ?>
            </div>

            <div class="hero-title">
                <h2>
                    <ul>
                        <li>Certified Atheltic Trainer</li>
                        <li>Personal training specialist</li>
                        <li>Former NCAA Athelete</li>
                    </ul>
                </h2> 
                
            </div>
        </div>
    </div>


        <div class="about-widget">
            <div class="widget-title">
                <h2> My story. My mission </h2>
                <hr class="header-line">
            </div>

            <div class="about-container">
                <?php dynamic_sidebar('sidebar-about'); ?>
            </div>
        </div>

    <section class="instagram-feed">

        <div class="widget-title">
                <h2> Instagram</h2>
                <hr class="header-line">
            </div>

        <?php if( have_posts() ): 
        while ( have_posts() ):
            the_post();?> 

        <?php the_content(); ?>

            
        <?php endwhile; ?> 

        <?php else : ?>
            <p>No posts found</p>
        <?php endif; ?>

    </section>

<?php get_footer(); ?>