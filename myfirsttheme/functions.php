<?php
add_action('wp_enqueue_scripts','enqueue_assets');
function enqueue_assets () {
    wp_enqueue_style('main-style', get_stylesheet_uri());
    wp_enqueue_script('main-script', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0.0', true);
}
//////////////////////////////
add_filter('excerpt_length','custom_excerpt_length');
function custom_excerpt_length($length) {
    return 10;
}
/////////////////////////////
add_action('wp_footer','footer_message');
function footer_message() {
    echo '<p>Built with love by yasmina</p>';
}
// ////////////////////////////
add_action('after_setup_theme','remove_admin_bar');
function remove_admin_bar() {
    if (!current_user_can('administrator')) {
        show_admin_bar(false);
    }
}
// ////////////////////////////
add_filter('the_title','displays_read');
function displays_read ($title) {
    if (is_archive()) {
        return "Archived Post: " . $title;
    }
    return $title;
}
// ////////////////////////////
add_action( 'init', 'mytheme_register_menus' );
function mytheme_register_menus() {
    register_nav_menus(
        array(
            'primary-menu' => __( 'القائمة الرئيسية', 'textdomain' ),
            'footer-menu'  => __( 'قائمة التذييل', 'textdomain' ),
            'social-menu'  => __( 'روابط التواصل', 'textdomain' )
        )
    );
}

