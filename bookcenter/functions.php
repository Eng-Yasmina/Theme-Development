<?php
//Link stylesheets
function bookcenter_enqueue_styles() {
    wp_enqueue_style('bookcenter-style', get_stylesheet_uri());
    wp_style_add_data('bookcenter-style', 'rtl', 'replace');
}
add_action('wp_enqueue_scripts', 'bookcenter_enqueue_styles');