<?php get_header(); ?>

<section class="home-hero">

    <div class="home-hero-container-wrapper">
        <div class="home-hero-container">

            <img src="<?php echo get_template_directory_uri() . '/assets/images/hero-img-ty.png'; ?>" class="hero-ty-img"/>

            <div class='hero-info-container'>
                <h1>Real work<br>Real results</h1>
                <div class="hero-text-container">
                    <p>Let's get started</p>
                    <img src="<?php echo get_template_directory_uri() . '/assets/icons/icon-scroll-down.svg'; ?>" class="icon-scroll-down"/>
                </div>
            </div>

        </div>

    </div>

    <img src="<?php echo get_template_directory_uri() . '/assets/images/smoke.png'; ?>" class="smoke-img"/>

</section>





<section class="home-services">
    <div class="home-services-title widget-title">
            <h2>What I can do for you</h2>
            <hr class="header-line">
    </div>

    <div class="home-services-container">
        <div class="home-personal-training">
            <img src="<?php echo get_template_directory_uri() . '/assets/icons/icon-personal-training.svg'; ?>" class="icon-home-personal-training"/>
            <h3>Personal Training</h3>
            <p>Training with me is a surefire way to ensure you stay 
            dedicated to your goals, and reap the results you’ve long awaited. 
            Whether it’s online or in-person, I dedicate myself to you and 
            your goals.</p>
            <button class="learn-more-BTN">Learn more</button>

        </div>

        <div class="home-nutritional-plans">
            <img src="<?php echo get_template_directory_uri() . '/assets/icons/icon-nutritional-plans.svg'; ?>" class="icon-home-nutritional-plans"/>
            <h3>Nutritional Plans</h3>
            <p>Whether your goal is weight loss, lean muscle gain or 
            based on your performance, ensuring that your diet compliments 
            your training regiment will take you to the next level, much 
            faster.</p>
            <button class="learn-more-BTN">Learn more</button>

        </div>

        <div class="home-guides-resources">
            <img src="<?php echo get_template_directory_uri() . '/assets/icons/icon-resources.svg'; ?>" class="icon-home-resources"/>
            <h3>Guides & Resources</h3>
            <p>From quick tips to the do’s and don’t, find free materials 
            and resources that will help point you in the right direction 
            no matter where you are in your fitness journey.</p>
            <button class="learn-more-BTN">Learn more</button>
        </div>
    </div>    
</section>


<section class="home-banner">
    <div class="banner-container">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/IMG-BANNER-HOME.jpg'; ?>" class="home-banner-img"/>
        <div class="banner-info"><h2>Work hard<br> Train hard</h2></div>
    </div>
</section>


<section class="home-shop">
    <div class="home-shop-title widget-title">
            <h2>Support the movement</h2>
            <hr class="header-line">
    </div>

    <div class="home-shop-container">
        <div class="home-shop-content">
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras sodales ligula id odio vulputate lobortis non quis nibh. 
            Duis blandit sem a imperdiet tempus. Nunc magna erat, scelerisque ut pellentesque ac, dapibus molestie lorem. Praesent 
            maximus lectus sit amet fringilla pellentesque. Suspendisse potenti. Donec suscipit mattis posuere. </p>
            <button class="coming-soon-BTN">Coming soon</button>
        </div>
        
        <img src="<?php echo get_template_directory_uri() . '/assets/images/IMG-SHIRT-HOME.png'; ?>" class="home-shop-img"/>
    </div>
</section>

<section class="testimonials-container">

    <div class="home-testimonials-title widget-title">
            <h2>Client Testimonials</h2>
            <hr class="header-line">
    </div>

    <?php dynamic_sidebar('sidebar-testimonials'); ?>
</section>

<section class="instagram-feed">

    <div class="widget-title">
        <h2> Instagram</h2>
        <hr class="header-line">
    </div>


    <div class="instagram-feed-wrapper">

        <div class="instagram-feed-info">
            <h3>@Ty.thetrainer</h3>
            <p>Follow me on Instagram! From daily motivational quotes and 
                tutorials to some crazy workout videos. See what my journey 
                is all about, whether its fitness related or every day life.    
            </p>
            <button>Follow on instagram</button>
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


<!-- Begin Mailchimp Signup Form -->

<div class="subscribe-form banner-container">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/IMG-BANNER-FORM.jpg'; ?>" class="home-banner-form-img"/>

        <div id="mc_embed_signup" class="subscribe-form-container">
            <form action="https://tythetrainer.us18.list-manage.com/subscribe/post?u=c8821d49dfda29df2614af2be&amp;id=1af4e15eaf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target=" " novalidate>
                <div id="mc_embed_signup_scroll">
                <label for="mce-EMAIL" ><h2 class="subscribe-form-title">Let's stay connected</h2></label>
                <p class="subscribe-form-info">Sign up to receive the latest updates and exclusive offers.</p>
                <input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="Enter Email Address" required>
                <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c8821d49dfda29df2614af2be_1af4e15eaf" tabindex="-1" value=""></div>
                <div class="clear"><input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="button subscribe-button"></div>
                </div>
            </form>
        </div>

</div>

<!--End mc_embed_signup-->


<?php get_footer(); ?>