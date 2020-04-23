<?php wp_footer(); ?>  


<footer>
    
    <div class="footer-container">

        <div class="footer-logo-wrapper">
            <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/ty-logo-black.png'; ?>" class="footer-logo"/></a>
        </div>

        <div class="footer-nav">
            <?php wp_nav_menu( array('theme_location' => 'footer')); ?>
        </div>

        <div class="footer-social-media">
                <a href="https://www.instagram.com/ty.thetrainer/"><img src="<?php echo get_template_directory_uri() . '/assets/icons/icon-instagram.svg'; ?>" class="icon-instagram"/></a>
                <a href="https://www.facebook.com/thetycommunity"><img src="<?php echo get_template_directory_uri() . '/assets/icons/icon-facebook.svg'; ?>" class="icon-facebook"/></a>
                <a href="https://www.linkedin.com/in/ty-the-trainer-8460b81a7"><img src="<?php echo get_template_directory_uri() . '/assets/icons/icon-linkedin.svg'; ?>" class="icon-linkedin"/></a>
        </div>

    </div>

    <div class="sub-footer-container">

        <div class="tythetrainer-copyright">
            <p>©2020 Ty The Trainer Inc.</p>
        </div>

        <div class="sub-footer-nav">
            <?php wp_nav_menu( array('theme_location' => 'sub-footer')); ?>
        </div>
        
    <div>

</footer>

</body>
</html>