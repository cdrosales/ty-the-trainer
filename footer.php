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
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/icons/icon-instagram.svg'; ?>" class="icon-instagram"/></a>
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/icons/icon-facebook.svg'; ?>" class="icon-facebook"/></a>
                <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/icons/icon-linkedin.svg'; ?>" class="icon-linkedin"/></a>
        </div>

    </div>

    <p class="tythetrainer-copyright">©2020 Ty The Trainer Inc.</p>

</footer>

</body>
</html>