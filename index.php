<?php get_header();?>
    
    <div class="row">
        <div class="col-med-12 main__heading">
            <h2>blog roll</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est, eius!</p>
        </div>
    </div>

    <!-- content from block editor -->
    <div class="row">

        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <article class="col-med-12">
                    <?php the_content( ); ?>
                </article>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
            <?php else:  ?>
                <article class="col-med-12">
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                </article>
        <?php endif; ?>

    </div>

<?php get_footer();?>