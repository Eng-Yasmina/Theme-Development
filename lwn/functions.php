<?php
add_action('wp_enqueue_scripts','enqueue_assets');
function enqueue_assets () {
    wp_enqueue_style('lwn-style', get_stylesheet_uri());
    wp_style_add_data('lwn-style', 'rtl', 'replace');
    wp_enqueue_script('lwn-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
//////////////MENUS////////////////
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
///////////////WIDGETS///////////////
add_action( 'widgets_init', 'lwn__register_widgets' );
function lwn__register_widgets() {
    register_sidebar( array(
        'name'          => __( 'Footer Column 1', 'textdomain' ),
        'id'            => 'footer1',
        'description'   => __( 'Add widgets here.', 'textdomain' ),
        'before_widget' => '<div id="%1$s" class="widget lwn-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Column 2', 'textdomain' ),
        'id'            => 'footer2',
        'description'   => __( 'Add widgets here.', 'textdomain' ),
        'before_widget' => '<div id="%1$s" class="widget lwn-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Column 3', 'textdomain' ),
        'id'            => 'footer3',
        'description'   => __( 'Add widgets here.', 'textdomain' ),
        'before_widget' => '<div id="%1$s" class="widget lwn-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4 class="widget-title">',
        'after_title'   => '</h4>',
    ) );
}
// ////////////////////////////