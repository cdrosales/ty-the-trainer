<?php get_header(); ?>


<?php if( have_posts() ): 
    while ( have_posts() ):
        the_post();?> 

    <section class="hero-container">
        <div class="hero-wrapper">
            <div class="hero-img">
                <?php the_post_thumbnail( 'full' );  ?>
            </div>

            <div class="hero-title">
                <h2><?php the_title(); ?></h2> 
                
            </div>
        </div>
    </section>

    <?php the_content(); ?>
    
    <?php endwhile; ?> 

    <?php else : ?>
        <p>No posts found</p>
    <?php endif; ?>


        <section class="services-widget">
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


                <div class="nutritional-plans-container">
                    <?php dynamic_sidebar('sidebar-macro-calculator'); ?>
                </div>


        </section>




        <section class="banner-container">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/IMG-BANNER-SERVICES.png'; ?>" class="services-banner-img"/>

            <div class="black-overlay"></div>
            <div class="services-contact-container">
                <h2> Are you ready to get your fitness journey started?</h2>
                <a href="https://www.tythetrainer.com/contact"><button class="learn-more-BTN">Let's Work</button></a>
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