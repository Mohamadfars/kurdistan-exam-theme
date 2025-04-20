<?php
/**
 * ئامرازە سەرەکییەکانی تیم
 */
function kurdistan_exam_setup() {
    // پشتگیری RTL و زمانی کوردی
    load_theme_textdomain('kurdistan-exam', get_template_directory() . '/languages');
    
    // پشتگیری عنوان و RSS
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    
    // پشتگیری وێنەی پۆست
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'kurdistan_exam_setup');

/**
 * زیادکردنی CSS و JS
 */
function kurdistan_exam_scripts() {
    // CSSی سەرەکی
    wp_enqueue_style('main-style', get_stylesheet_uri());
    
    // CSSی تایبەت
    wp_enqueue_style('custom-css', get_template_directory_uri() . '/assets/css/main.css');
    
    // JavaScript
    wp_enqueue_script('main-js', get_template_directory_uri() . '/assets/js/script.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'kurdistan_exam_scripts');
