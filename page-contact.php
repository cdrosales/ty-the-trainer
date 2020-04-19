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

<!-- Begin Mailchimp Signup Form -->
<link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own Mailchimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="https://tythetrainer.us18.list-manage.com/subscribe/post?u=c8821d49dfda29df2614af2be&amp;id=1af4e15eaf" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
	
	<div class="widget-title contact-form-title">
        <h2>Let's Work</h2>
        <hr class="header-line">
	</div>
	
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-LNAME">Name  <span class="asterisk">*</span>
</label>
	<input type="text" value="" name="LNAME" class="required" id="mce-LNAME">
</div>
<div class="mc-field-group size1of2">
	<label for="mce-MMERGE4-month">Birthday  <span class="asterisk">*</span>
</label>
	<div class="datefield">
		<span class="subfield monthfield"><input class="birthday required" type="text" pattern="[0-9]*" value="" placeholder="MM" size="2" maxlength="2" name="MMERGE4[month]" id="mce-MMERGE4-month"></span> / 
		<span class="subfield dayfield"><input class="birthday required" type="text" pattern="[0-9]*" value="" placeholder="DD" size="2" maxlength="2" name="MMERGE4[day]" id="mce-MMERGE4-day"></span> 
		<span class="small-meta nowrap">( mm / dd )</span>
	</div>
</div><div class="mc-field-group">
	<label for="mce-MMERGE3">What is your biggest obstacle? </label>
	<input type="text" value="" name="MMERGE3" class="" id="mce-MMERGE3">
</div>
<div class="mc-field-group">
	<label for="mce-MMERGE1">What is your goal in the next 90 Days? </label>
	<input type="text" value="" name="MMERGE1" class="" id="mce-MMERGE1">
</div>
<div class="mc-field-group input-group">
    <strong>Service(s) that you are interested in </strong>
    <ul><li><input type="checkbox" value="1" name="group[4929][1]" id="mce-group[4929]-4929-0"><label for="mce-group[4929]-4929-0">Online Training</label></li>
<li><input type="checkbox" value="2" name="group[4929][2]" id="mce-group[4929]-4929-1"><label for="mce-group[4929]-4929-1">In-Person Training*</label></li>
<li><input type="checkbox" value="4" name="group[4929][4]" id="mce-group[4929]-4929-2"><label for="mce-group[4929]-4929-2">Meal Plan</label></li>
<li><input type="checkbox" value="8" name="group[4929][8]" id="mce-group[4929]-4929-3"><label for="mce-group[4929]-4929-3">Macro Plan</label></li>
</ul>
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_c8821d49dfda29df2614af2be_1af4e15eaf" tabindex="-1" value=""></div>
    <div class="clear contact-button"><input type="submit" value="SEND" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
    </div>
</form>
</div>
<script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[0]='EMAIL';ftypes[0]='email';fnames[2]='LNAME';ftypes[2]='text';fnames[4]='MMERGE4';ftypes[4]='birthday';fnames[3]='MMERGE3';ftypes[3]='text';fnames[1]='MMERGE1';ftypes[1]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
<!--End mc_embed_signup-->


<?php get_footer(); ?>