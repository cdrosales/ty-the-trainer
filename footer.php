<?php wp_footer(); ?>  


<footer>
    <a href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri() . '/assets/images/ty-logo-black.png'; ?>" class="footer-logo"/></a>

    <div class="footer-nav">
        <?php wp_nav_menu( array('theme_location' => 'footer')); ?>
    </div>
</footer>

</body>
</html>