<?php
function enqueue_vjkwebsolutions_scripts() {
    wp_enqueue_style('vjkwebsolutions-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'enqueue_vjkwebsolutions_scripts');
?>
