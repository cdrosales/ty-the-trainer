<?php get_header(); ?>


<?php if( have_posts() ): 
    while ( have_posts() ):
        the_post();?> 

    <div class="hero-container">
        <div class="hero-wrapper">
            <div class="hero-img">
                <?php the_post_thumbnail( 'full' );  ?>
            </div>

            <div class="hero-title">
                <h2><?php the_title(); ?></h2> 
                
            </div>
        </div>
    </div>

    <?php the_content(); ?>
    
    <?php endwhile; ?> 

    <?php else : ?>
        <p>No posts found</p>
    <?php endif; ?>


        <div class="services-widget">
            <div class="widget-title">
                    <h2>What i can do for you</h2>
                    <hr class="header-line">
                </div>

            <div class="personal-training-wrapper">

                <div class="services-info-container">
                    <img src="<?php echo get_template_directory_uri() . '/assets/icons/icon-personal-training.svg'; ?>" class="icon-personal-training"/>
                    <h3>Personal Training</h3> 
                </div>

                <div class="personal-training-container">  
                    <?php dynamic_sidebar('sidebar-personal-training'); ?>
                </div>

            </div>

            <div class="nutritional-plans-wrapper">

                <div class="services-info-container">
                    <img src="<?php echo get_template_directory_uri() . '/assets/icons/icon-nutritional-plans.svg'; ?>" class="icon-nutritional-plans"/>   
                    <h3>Nutritional Plans</h3> 
                </div>

                <div class="nutritional-plans-container">
                    
                    <?php dynamic_sidebar('sidebar-nutritional-plans'); ?>
                </div>
                
            </div>

        </div>


        <div class="banner-container">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/IMG-BANNER-SERVICES.png'; ?>" class="services-banner-img"/>
        </div>

        <section class="testimonials-wrapper">

            <div class="home-testimonials-title widget-title">
                    <h2>Client Testimonials</h2>
                    <hr class="header-line">
            </div>

            <div class="testimonials-carousel">
                <?php dynamic_sidebar('sidebar-testimonials'); ?>
            </div>

        </section>


        <!-- Begin Mailchimp Signup Form -->

    <div class="subscribe-form banner-container">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/IMG-BANNER-FORM.jpg'; ?>" class="home-banner-form-img"/>

            <div id="mc_embed_signup" class="subscribe-form-container">
                <form action="https://tythetrainer.us18.list-manage.com/subscribe/post?u=c8821d49dfda29df2614af2be&amp;id=1af4e15eaf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target=" " novalidate>
                    <div id="mc_embed_signup_scroll">
                    <label for="mce-EMAIL" ><h2 class="subscribe-form-title">Let's stay connected</h2></label>
                    <p class="subscribe-form-info">Sign up to receive the latest updates and exclusive offers.</p>
                    <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
                    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c8821d49dfda29df2614af2be_1af4e15eaf" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                    </div>
                </form>
            </div>

    </div>

    <!--End mc_embed_signup-->


<?php get_footer(); ?>