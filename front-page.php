<?php get_header(); ?>


<?php if( have_posts() ): 
    while ( have_posts() ):
        the_post();?> 

    <?php the_content(); ?>


    <?php endwhile; ?> 

    <?php the_posts_navigation(); ?> 

<?php else : ?>
        <p>No posts found</p>
<?php endif; ?>

<section class="home-services">
    <div class="services-title widget-title">
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
    <img src="<?php echo get_template_directory_uri() . '/assets/images/IMG-BANNER-HOME.jpg'; ?>" class="home-banner-img"/>
    <h2>Work hard.<br> Train hard.</h2>
</section>

<!-- Begin Mailchimp Signup Form -->


<div id="mc_embed_signup">
<form action="https://tythetrainer.us18.list-manage.com/subscribe/post?u=c8821d49dfda29df2614af2be&amp;id=1af4e15eaf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target=" " novalidate>
    <div id="mc_embed_signup_scroll">
	<label for="mce-EMAIL">Let's stay connected</label>
    <p>Sign up to receive the latest updates and exclusive offers.</p>
	<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c8821d49dfda29df2614af2be_1af4e15eaf" tabindex="-1" value=""></div>
    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>

<!--End mc_embed_signup-->


<?php get_footer(); ?>