<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<div id="page" class="site">
    <header id="masthead" class="site-header">
        <div class="container mx-auto px-4">
            <div class="flex items-center justify-between py-4">
                <div class="site-branding">
                    <?php
                    if (has_custom_logo()) :
                        the_custom_logo();
                    else :
                    ?>
                        <h1 class="site-title">
                            <a href="<?php echo esc_url(home_url('/')); ?>" rel="home">
                                <?php bloginfo('name'); ?>
                            </a>
                        </h1>
                    <?php endif; ?>
                </div>

                <nav id="site-navigation" class="main-navigation">
                    <button class="menu-toggle lg:hidden" aria-controls="primary-menu" aria-expanded="false">
                        <i class="fas fa-bars"></i>
                    </button>
                    
                    <div class="primary-menu-container hidden lg:block">
                        <?php
                        wp_nav_menu(array(
                            'theme_location' => 'primary',
                            'menu_id'        => 'primary-menu',
                            'menu_class'     => 'flex space-x-6',
                            'container'      => false,
                            'fallback_cb'    => false,
                        ));
                        ?>
                    </div>

                    <div class="header-contact hidden lg:flex items-center space-x-6">
                        <?php if (get_theme_mod('header_phone')) : ?>
                            <a href="tel:<?php echo esc_attr(get_theme_mod('header_phone')); ?>" class="flex items-center">
                                <i class="fas fa-phone-alt mr-2"></i>
                                <?php echo esc_html(get_theme_mod('header_phone')); ?>
                            </a>
                        <?php endif; ?>

                        <?php if (get_theme_mod('header_email')) : ?>
                            <a href="mailto:<?php echo esc_attr(get_theme_mod('header_email')); ?>" class="flex items-center">
                                <i class="fas fa-envelope mr-2"></i>
                                <?php echo esc_html(get_theme_mod('header_email')); ?>
                            </a>
                        <?php endif; ?>

                        <a href="<?php echo esc_url(get_theme_mod('header_cta_link', '#')); ?>" class="btn-primary">
                            <?php echo esc_html(get_theme_mod('header_cta_text', 'Get Started')); ?>
                        </a>
                    </div>
                </nav>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="lg:hidden">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'primary',
                'menu_id'        => 'mobile-primary-menu',
                'menu_class'     => 'mobile-menu',
                'container'      => false,
                'fallback_cb'    => false,
            ));
            ?>
            
            <div class="mobile-contact p-4 bg-gray-50">
                <?php if (get_theme_mod('header_phone')) : ?>
                    <a href="tel:<?php echo esc_attr(get_theme_mod('header_phone')); ?>" class="flex items-center mb-3">
                        <i class="fas fa-phone-alt mr-2"></i>
                        <?php echo esc_html(get_theme_mod('header_phone')); ?>
                    </a>
                <?php endif; ?>

                <?php if (get_theme_mod('header_email')) : ?>
                    <a href="mailto:<?php echo esc_attr(get_theme_mod('header_email')); ?>" class="flex items-center mb-3">
                        <i class="fas fa-envelope mr-2"></i>
                        <?php echo esc_html(get_theme_mod('header_email')); ?>
                    </a>
                <?php endif; ?>

                <a href="<?php echo esc_url(get_theme_mod('header_cta_link', '#')); ?>" class="btn-primary block text-center">
                    <?php echo esc_html(get_theme_mod('header_cta_text', 'Get Started')); ?>
                </a>
            </div>
        </div>
    </header>

    <div id="content" class="site-content">
