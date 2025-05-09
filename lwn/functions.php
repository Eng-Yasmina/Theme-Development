<?php
// Add theme support for post thumbnails
add_theme_support('post-thumbnails');
// add_theme_support('title-tag');
// add_theme_support('custom-logo', array(
//     'height'      => 100,
//     'width'       => 400,
//     'flex-height' => true,
//     'flex-width'  => true,
// ));
// add_theme_support('custom-background', array(
//     'default-color' => 'ffffff',
//     'default-image' => '',
// ));
// add_theme_support('custom-header', array(
//     'default-image' => '',
//     'width'         => 1000,
//     'height'        => 250,
//     'flex-width'    => true,
//     'flex-height'   => true,
// ));
// add_theme_support('html5', array(
//     'search-form',
//     'comment-form',
//     'comment-list',
//     'gallery',
//     'caption',
//     'script',
//     'style',
// ));
// add_theme_support('automatic-feed-links');
// add_theme_support('customize-selective-refresh-widgets');
// add_theme_support('editor-styles');
// add_editor_style('assets/css/editor-style.css');
// add_theme_support('responsive-embeds');
// add_theme_support('align-wide');
// add_theme_support('editor-color-palette', array(
//     array(
//         'name'  => __('Strong Magenta', 'themeLangDomain'),
//         'slug'  => 'strong-magenta',
//         'color' => '#a2006d',
//     ),
//     array(
//         'name'  => __('Light Grayish Magenta', 'themeLangDomain'),
//         'slug'  => 'light-grayish-magenta',
//         'color' => '#d0a6c1',
//     ),
// ));
// add_theme_support('editor-font-sizes', array(
//     array(
//         'name'      => __('Small', 'themeLangDomain'),
//         'shortName' => __('S', 'themeLangDomain'),
//         'size'      => 12,
//         'slug'      => 'small',
//     ),
//     array(
//         'name'      => __('Regular', 'themeLangDomain'),
//         'shortName' => __('M', 'themeLangDomain'),
//         'size'      => 16,
//         'slug'      => 'regular',
//     ),
//     array(
//         'name'      => __('Large', 'themeLangDomain'),
//         'shortName' => __('L', 'themeLangDomain'),
//         'size'      => 36,
//         'slug'      => 'large',
//     ),
// ));

///////////////ENQUEUE SCRIPTS AND STYLES//////////////
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