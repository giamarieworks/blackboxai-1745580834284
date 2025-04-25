</div><!-- #content -->

    <footer id="colophon" class="site-footer bg-secondary text-white py-16">
        <div class="container mx-auto px-4">
            <!-- Footer Widgets -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
                <div class="footer-widget-1">
                    <!-- Brand and About -->
                    <div class="footer-logo mb-6">
                        <?php if (has_custom_logo()) : ?>
                            <?php the_custom_logo(); ?>
                        <?php else : ?>
                            <h2 class="text-2xl font-bold"><?php bloginfo('name'); ?></h2>
                        <?php endif; ?>
                    </div>
                    <p class="text-gray-300 mb-6">
                        <?php echo get_theme_mod('footer_about_text', 'GYNTEKBUSINESS identifies specific problems, frustrations, and unmet needs that our clients face everyday.'); ?>
                    </p>
                    <!-- Social Links -->
                    <div class="social-links flex space-x-4">
                        <?php
                        $social_links = array(
                            'facebook' => get_theme_mod('social_facebook'),
                            'twitter' => get_theme_mod('social_twitter'),
                            'linkedin' => get_theme_mod('social_linkedin'),
                            'instagram' => get_theme_mod('social_instagram'),
                        );

                        foreach ($social_links as $platform => $url) :
                            if ($url) :
                        ?>
                            <a href="<?php echo esc_url($url); ?>" class="text-gray-300 hover:text-primary transition-colors" target="_blank" rel="noopener noreferrer">
                                <i class="fab fa-<?php echo esc_attr($platform); ?> text-xl"></i>
                            </a>
                        <?php
                            endif;
                        endforeach;
                        ?>
                    </div>
                </div>

                <div class="footer-widget-2">
                    <h3 class="text-xl font-bold mb-6">Company</h3>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-company',
                        'menu_class' => 'footer-menu space-y-3',
                        'container' => false,
                        'fallback_cb' => false,
                    ));
                    ?>
                </div>

                <div class="footer-widget-3">
                    <h3 class="text-xl font-bold mb-6">Services</h3>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'footer-services',
                        'menu_class' => 'footer-menu space-y-3',
                        'container' => false,
                        'fallback_cb' => false,
                    ));
                    ?>
                </div>

                <div class="footer-widget-4">
                    <h3 class="text-xl font-bold mb-6">Contact Us</h3>
                    <?php if (get_theme_mod('contact_address')) : ?>
                        <div class="flex items-start mb-4">
                            <i class="fas fa-map-marker-alt mt-1 mr-3 text-primary"></i>
                            <p class="text-gray-300"><?php echo nl2br(esc_html(get_theme_mod('contact_address'))); ?></p>
                        </div>
                    <?php endif; ?>

                    <?php if (get_theme_mod('contact_phone')) : ?>
                        <div class="flex items-center mb-4">
                            <i class="fas fa-phone-alt mr-3 text-primary"></i>
                            <a href="tel:<?php echo esc_attr(get_theme_mod('contact_phone')); ?>" class="text-gray-300 hover:text-primary transition-colors">
                                <?php echo esc_html(get_theme_mod('contact_phone')); ?>
                            </a>
                        </div>
                    <?php endif; ?>

                    <?php if (get_theme_mod('contact_email')) : ?>
                        <div class="flex items-center mb-4">
                            <i class="fas fa-envelope mr-3 text-primary"></i>
                            <a href="mailto:<?php echo esc_attr(get_theme_mod('contact_email')); ?>" class="text-gray-300 hover:text-primary transition-colors">
                                <?php echo esc_html(get_theme_mod('contact_email')); ?>
                            </a>
                        </div>
                    <?php endif; ?>
                </div>
            </div>

            <!-- Bottom Footer -->
            <div class="footer-bottom pt-8 border-t border-gray-700">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4 items-center">
                    <div class="text-gray-400 text-sm">
                        © <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All Rights Reserved.
                    </div>
                    <div class="md:text-right">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'footer-bottom',
                            'menu_class' => 'footer-bottom-menu flex flex-wrap justify-start md:justify-end space-x-6 text-sm text-gray-400',
                            'container' => false,
                            'fallback_cb' => false,
                        ));
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
