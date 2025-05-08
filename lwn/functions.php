<?php
add_action('wp_enqueue_scripts','enqueue_assets');
function enqueue_assets () {
    wp_enqueue_style('lwn-style', get_stylesheet_uri());
    wp_style_add_data('lwn-style', 'rtl', 'replace');
    wp_enqueue_script('lwn-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}