<?php get_header(); ?>



    <section class="hero-container">
        <div class="hero-wrapper">
            <div class="hero-img">
                <?php the_post_thumbnail( 'full' );  ?>
            </div>

            <div class="hero-title">
                <h2>
                    <ul>
                        <li>Certified Athletic Trainer</li>
                        <li>Personal training specialist</li>
                        <li>Former NCAA Athlete</li>
                    </ul>
                </h2> 
                
            </div>
        </div>
    </section>


        <section class="about-widget">
            <div class="widget-title">
                <h2> My story. My mission.</h2>
                <hr class="header-line">
            </div>

            <div class="about-container">
                <?php dynamic_sidebar('sidebar-about'); ?>
            </div>
        </section>

   
    <section class="instagram-feed">

        <div class="widget-title">
            <h2> Instagram</h2>
            <hr class="header-line">
        </div>


        <div class="instagram-feed-wrapper">

            <div class="instagram-feed-info">
                <h3>@Ty.thetrainer</h3>
                <p>Follow me on Instagram! Daily motivational quotes, health quizzes, and some crazy workout 
                    videos are just some of the things you get from me. Come see what my journey is all about, 
                    whether it’s fitness related or everyday life.</p>
                <a href="https://www.instagram.com/ty.thetrainer/"><button>Follow on instagram</button></a>
            </div>    

            <div class="instagram-feed-container">
                <?php if( have_posts() ): 
                while ( have_posts() ):
                    the_post();?> 

                <?php the_content(); ?>

                    
                <?php endwhile; ?> 

                <?php else : ?>
                    <p>No posts found</p>
                <?php endif; ?>
            </div>

        </div>

    </section>

<?php get_footer(); ?>