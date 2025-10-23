<?php

function load_css()
{
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');

    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts', 'load_css');

// Theme Options
add_theme_support('menus');
add_theme_support('post-thumbnails');
add_theme_support('custom-logo');

// Custom Logo
function themename_custom_logo_setup()
{
    $defaults = array(
        'height'               => 100,
        'width'                => 400,
        'flex-height'          => true,
        'flex-width'           => true,
        'header-text'          => array('site-title', 'site-description'),
        'unlink-homepage-logo' => false,
    );
    add_theme_support('custom-logo', $defaults);
}
add_action('after_setup_theme', 'themename_custom_logo_setup');


// Menus
register_nav_menus(

    array(

        'top-menu' => 'Top Navigation Location',
        'mobile-menu' => 'Mobile Navigation Location',
        'footer-menu' => 'Footer Navigation Location',
        'footer-mobile-menu' => 'Footer Mobile Navigation Location',
    )

);


// Custom Image Sizes
add_image_size('blog-large', 800, 400, false);
add_image_size('blog-small', 300, 200, true);
add_image_size('logo', 50, 50, false);
add_image_size('custom-size', 300, 600, false);


// Alt text for images
$attachment_id = get_post_thumbnail_id();
$alt_text = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);


// Custom Post Type
function featured_products_post_type()
{

    $args = array(

        'labels' => array(
            'name' => 'Featured Products',
            'singular_name' => 'Featured Product'
        ),
        'hierachical' => true,
        'public' => true,
        'has_archive' => false,
        'menu_icon' => 'dashicons-cart',
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_ui'       => true,
        'show_in_menu'  => true,
        'show_in_nav_menus' => true,

    );

    register_post_type('featured', $args);
}
add_action('init', 'featured_products_post_type');


// Category for CUT
add_action('init', function () {
    register_taxonomy_for_object_type('category', 'featured');
});

add_action('pre_get_posts', function ($q) {
    if (is_admin() || ! $q->is_main_query()) return;

    if ($q->is_archive()) {

        if ($q->is_post_type_archive('featured')) return;

        $current = $q->get('post_type');
        if (empty($current) || $current === 'post' || $current === ['post']) {
            $q->set('post_type', ['post', 'featured']);
        }
    }


    if ($q->is_home() || $q->is_search()) {
        $q->set('post_type', ['post', 'featured']);
    }
});

// Add widgets
add_action('widgets_init', function () {
    register_sidebar([
        'name'          => __('Footer', 'your-textdomain'),
        'id'            => 'main-sidebar',
        'description'   => __('Widgets in this area will be shown in the sidebar.', 'your-textdomain'),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ]);
});


// Hide Block Editor
add_action('admin_init', function () {
    // remove_post_type_support('post', 'editor');
    remove_post_type_support('page', 'editor');
    // remove_post_type_support('featured', 'editor');
});


// Remove WPforms classes
// add_filter('wpforms-241-field_3', 'my_css_attributes_filter', 100, 1);
// add_filter('wpforms-241-field_3', 'my_css_attributes_filter', 100, 1);
// add_filter('wpforms-241-field_3', 'my_css_attributes_filter', 100, 1);
// function my_css_attributes_filter($var)
// {
//     return is_array($var) ? array_intersect($var, array('none')) : '';
// }

add_filter('wpforms_field_properties', function ($properties, $field, $form_data) {
    if ((int) $form_data['id'] === 241) {
        $properties['inputs']['primary']['class'] = [];
    }
    return $properties;
}, 100, 3);
