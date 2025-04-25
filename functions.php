<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Theme Setup
 */
function gyntekbusiness_setup() {
    // Add default posts and comments RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Let WordPress manage the document title
    add_theme_support('title-tag');

    // Enable support for Post Thumbnails on posts and pages
    add_theme_support('post-thumbnails');

    // Add support for Elementor Pro
    add_theme_support('elementor-pro');

    // Register nav menus
    register_nav_menus(array(
        'primary' => esc_html__('Primary Menu', 'gyntekbusiness'),
        'footer' => esc_html__('Footer Menu', 'gyntekbusiness'),
    ));

    // Add theme support for selective refresh for widgets
    add_theme_support('customize-selective-refresh-widgets');

    // Add support for full and wide align images
    add_theme_support('align-wide');

    // Add support for responsive embeds
    add_theme_support('responsive-embeds');
}
add_action('after_setup_theme', 'gyntekbusiness_setup');

/**
 * Enqueue scripts and styles
 */
function gyntekbusiness_scripts() {
    // Enqueue Google Fonts
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap', array(), null);

    // Enqueue Font Awesome
    wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css', array(), '6.0.0');

    // Enqueue theme stylesheet
    wp_enqueue_style('gyntekbusiness-style', get_stylesheet_uri(), array(), '1.0.0');

    // Enqueue theme custom scripts
    wp_enqueue_script('gyntekbusiness-scripts', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'gyntekbusiness_scripts');

/**
 * Register widget areas
 */
function gyntekbusiness_widgets_init() {
    register_sidebar(array(
        'name'          => esc_html__('Footer Widget Area 1', 'gyntekbusiness'),
        'id'            => 'footer-1',
        'description'   => esc_html__('Add widgets here.', 'gyntekbusiness'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => esc_html__('Footer Widget Area 2', 'gyntekbusiness'),
        'id'            => 'footer-2',
        'description'   => esc_html__('Add widgets here.', 'gyntekbusiness'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'gyntekbusiness_widgets_init');

/**
 * Elementor Pro support
 */
function gyntekbusiness_elementor_pro_support() {
    update_option('elementor_disable_color_schemes', 'yes');
    update_option('elementor_disable_typography_schemes', 'yes');
    add_theme_support('elementor-pro');
}
add_action('after_switch_theme', 'gyntekbusiness_elementor_pro_support');

/**
 * Custom template tags for this theme
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress
 */
require get_template_directory() . '/inc/template-functions.php';
