<?php wp_footer(); ?>  


<footer>
    <div class="footer-containter>
        <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/ty-logo-black.png'; ?>" class="footer-logo"/></a>

        <div class="footer-nav">
            <?php wp_nav_menu( array('theme_location' => 'footer')); ?>
        </div>

        <div class="footer-social-media">
            <ul>
                <li><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/icons/icon-instagram.svg'; ?>" class="icon-instagram"/></a></li>
                <li><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/icons/icon-facebook.svg'; ?>" class="icon-facebook"/></a></li>
                <li><a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/icons/icon-linkedin.svg'; ?>" class="icon-linkedin"/></a></li>
            </ul>
        </div>
    </div>

    <p class="tythetrainer-copyright">©2020 Ty The Trainer Inc.</p>


</footer>

</body>
</html>