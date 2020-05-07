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
            <div class="services-title-info">
                <img src="<?php echo get_template_directory_uri() . '/assets/icons/icon-personal-training.svg'; ?>" class="icon-home-personal-training"/>
                <h3>Personal Training</h3>
            </div>
            <p>Hiring a personal trainer is a surefire way to ensure you reap the results you’ve long awaited, through a plan tailored to you as an individual. 
                Whether it’s online or in-person, I dedicate myself to you and your goals.</p>
            <button class="learn-more-BTN"><a href="https://www.tythetrainer.com/services">Learn more</a></button>

        </div>

        <div class="home-nutritional-plans">
            <div class="services-title-info">
                <img src="<?php echo get_template_directory_uri() . '/assets/icons/icon-nutritional-plans.svg'; ?>" class="icon-home-nutritional-plans"/>
                <h3>Nutritional Plans</h3>
            </div>
            <p>Whether your goal is weight loss, lean muscle gain or performance-based, ensuring that your diet compliments your training regimen will take 
                you to the next level, much faster.</p>
                <p class="paragraph-filler"><br></p>
            <button class="learn-more-BTN"><a href="https://www.tythetrainer.com/services">Learn more</a></button>

        </div>

        <div class="home-guides-resources">
            <div class="services-title-info">
                <img src="<?php echo get_template_directory_uri() . '/assets/icons/icon-resources.svg'; ?>" class="icon-home-resources"/>
                <h3>Guides & Resources</h3>
            </div>
            <p>From quick tips to the do’s and don’ts, find free materials and resources that will help point you in the right direction no matter where you 
                are in your fitness journey. Check out the FREE Macro Calculator!</p>
            <button class="learn-more-BTN"><a href="https://www.tythetrainer.com/resources">Learn more</a></button>
        </div>
    </div>    
</section>


<section class="home-banner">
    <div class="banner-container">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/IMG-BANNER-HOME.jpg'; ?>" class="home-banner-img"/>
        <div class="banner-info"><h2>Work hard<br> Train hard</h2></div>
    </div>
</section>



<section class="testimonials-wrapper">


    <div class="home-testimonials-title widget-title">
            <h2>Client Testimonials</h2>
            <hr class="header-line">
    </div>


<?php

        $testimonials = new WP_Query(array(
                    'post_type' => 'testimonials', 
                    'posts_per_page' => '12', 
                    'order_by' => 'date',
                    'order' => 'ASC'

                ));

            echo '<div class="testimonials-carousel">';

            while($testimonials->have_posts()) :
            

            echo $testimonials->the_post();

            echo '<div class="carousel-cell"><a href="' . get_the_permalink() . '">';

            echo '<div class="'. get_post(get_post_thumbnail_id())->post_title . '">';
            echo the_post_thumbnail('medium_large');
            echo '</div>';

            // echo '<h5>' . get_the_title() . '</h5>';
            global $post;
            $post_slug = $post->post_name;
            echo '<h5>' . $post_slug. '</h5>';
            echo '<h6>' . get_the_title() . '</h6>';
            echo '<p>' . get_the_excerpt() . '</p>';

            
            echo '</a></div>';

     
        endwhile;

        wp_reset_postdata();

        echo '</div>';



?>

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
            <button><a href="https://www.instagram.com/ty.thetrainer/">Follow on instagram</a></button>
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
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>

<div class="subscribe-form banner-container">

    <img src="<?php echo get_template_directory_uri() . '/assets/images/IMG-BANNER-FORM.jpg'; ?>" class="home-banner-form-img"/>


    <div id="mc_embed_signup" class="subscribe-form-container">
    <form action="https://tythetrainer.us18.list-manage.com/subscribe/post?u=c8821d49dfda29df2614af2be&amp;id=1af4e15eaf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
        <div id="mc_embed_signup_scroll">
        <h2 class="subscribe-form-title">Let's stay connected</h2>
        <p class="subscribe-form-info">Sign up to receive the latest updates and exclusive offers.</p>
            
    <div class="mc-field-group email-container">
        <input type="email" value=" Enter Email Address" onfocus="this.value=''" name="EMAIL" class="required email" id="mce-EMAIL">
    </div>
    <div class="mc-field-group size1of2 birthday-container">
        <label for="mce-MMERGE4-month">Birthday*</label>
        <div class="datefield">
            <span class="subfield monthfield"><input class="birthday required" type="text" pattern="[0-9]*" value="" placeholder="MM" size="2" maxlength="2" name="MMERGE4[month]" id="mce-MMERGE4-month"></span> / 
            <span class="subfield dayfield"><input class="birthday required " type="text" pattern="[0-9]*" value="" placeholder="DD" size="2" maxlength="2" name="MMERGE4[day]" id="mce-MMERGE4-day"></span> 
        </div>
    </div>	<div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c8821d49dfda29df2614af2be_1af4e15eaf" tabindex="-1" value=""></div>
        <div class="clear"><input type="submit" value="SUBSCRIBE" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
        </div>
    </form>
    </div>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[4]='MMERGE4';ftypes[4]='birthday';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->

<?php get_footer(); ?>