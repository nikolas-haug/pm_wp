    </main>

    <footer class="footer">
        <div class="container-med">
            <div class="row">
                <div class="col-med-6 text-center">
                    <p class="margin-bottom-zero"><?php bloginfo('name'); ?> &copy; <?php echo date('Y'); ?></p>
                </div>
                <div class="col-med-6 text-center">
                <?php if(get_theme_mod( 'icon1_icon', '' )) : ?>
                    <a href="<?php echo get_theme_mod( 'icon1_url', '' ); ?>" target="_blank" rel="noopener"><span class="social-icon <?php echo get_theme_mod( 'icon1_icon', '' ); ?>"></span></a>
                <?php endif; ?>
                <?php if(get_theme_mod( 'icon2_icon', '' )) : ?>
                    <a href="<?php echo get_theme_mod( 'icon2_url', '' ); ?>" target="_blank" rel="noopener"><span class="social-icon <?php echo get_theme_mod( 'icon2_icon', '' ); ?>"></span></a>
                <?php endif; ?>
                <?php if(get_theme_mod( 'icon3_icon', '' )) : ?>
                    <a href="<?php echo get_theme_mod( 'icon3_url', '' ); ?>" target="_blank" rel="noopener"><span class="social-icon <?php echo get_theme_mod( 'icon3_icon', '' ); ?>"></span></a>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </footer>

    <?php wp_footer(); ?>
    </body>
</html>