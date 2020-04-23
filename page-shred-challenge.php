<?php get_header('black'); ?>


    <section class="page-content shred-challenge-wrapper">
        <?php if( have_posts() ): 
        while ( have_posts() ):
            the_post();?> 

            <h2><?php the_title(); ?></h2> 


            <?php the_post_thumbnail( 'full' );  ?>

            <div class="agreement">
            <form ... onsubmit="return checkForm(this);">
                <p><input type="checkbox" required name="terms" class="terms-conditions-CB"> I accept the <a href="http://localhost:3000/ty-coming-soon/terms-and-conditions/" class="terms-conditions" target="_blank">Terms and Conditions</a></p>
            </form>
            </div>

                <?php the_content(); ?>
        
                <?php endwhile; ?> 

                <?php else : ?>
                        <p>No posts found</p>
                <?php endif; ?>

    </section>


<?php get_footer(); ?>

