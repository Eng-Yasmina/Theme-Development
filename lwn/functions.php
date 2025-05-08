<?php
add_action('wp_enqueue_scripts','enqueue_assets');
function enqueue_assets () {
    wp_enqueue_style('lwn-style', get_stylesheet_uri());
    wp_style_add_data('lwn-style', 'rtl', 'replace');
    wp_enqueue_script('lwn-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
//////////////////////////////
add_action('init','lwn_register_menus');
function lwn_register_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'القائمة الرئيسية', 'textdomain' ),
            'footer-menu'  => __( 'قائمة التذييل', 'textdomain' ),
            'social-menu'  => __( 'روابط التواصل', 'textdomain' )
        )
    );
}
//////////////////////////////