<?php
if (!defined('ABSPATH')) exit;

function vjkwebsolutions_theme_setup() {
    // Add theme support for various features
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('responsive-embeds');
    add_theme_support('editor-styles');
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script'
    ));
    
    // Essential for block editor
    add_theme_support('wp-block-styles');
    add_theme_support('align-wide');
}
add_action('after_setup_theme', 'vjkwebsolutions_theme_setup');