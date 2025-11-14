<?php

// Fonts
function mytheme_enqueue_fonts()
{
    // Montserrat
    wp_enqueue_style(
        'Montserrat',
        'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap',
        array(),
        null
    );

    // Poppins
    wp_enqueue_style(
        'Poppins',
        'https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap',
        array(),
        null
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_fonts');

function load_css()
{
    wp_register_style('main', get_template_directory_uri() . '/css/main.css', array(), false, 'all');

    wp_enqueue_style('main');
}

add_action('wp_enqueue_scripts', 'load_css');

// GSAP
function theme_gsap_script()
{
    // The core GSAP library
    wp_enqueue_script('gsap-js', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/gsap.min.js', array(), false, true);
    // ScrollTrigger - with gsap.js passed as a dependency
    wp_enqueue_script('gsap-st', 'https://cdn.jsdelivr.net/npm/gsap@3.13.0/dist/ScrollTrigger.min.js', array('gsap-js'), false, true);
    // Your animation code file - with gsap.js passed as a dependency
    wp_enqueue_script('gsap-js2', get_template_directory_uri() . 'js/app.js', array('gsap-js'), false, true);
}

add_action('wp_enqueue_scripts', 'theme_gsap_script');

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


// Category for CPT
add_action('init', function () {
    register_taxonomy_for_object_type('category', 'featured');
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
    remove_post_type_support('post', 'editor');
    remove_post_type_support('page', 'editor');
    remove_post_type_support('featured', 'editor');
});

add_filter('wpforms_field_properties', function ($properties, $field, $form_data) {
    // Limit to specific forms
    $form_id = isset($form_data['id']) ? (int) $form_data['id'] : 0;
    if (!in_array($form_id, [241, 257], true)) {
        return $properties;
    }

    // --- Text-like fields (single input) ---
    if (isset($properties['inputs']['primary'])) {
        $properties['inputs']['primary']['class'] = [];
        return $properties;
    }

    // --- Choice-based and dropdown fields ---
    if (isset($properties['inputs']) && is_array($properties['inputs'])) {
        foreach ($properties['inputs'] as $key => $input) {
            // For radio, checkbox, or dropdown fields (numeric indexes only)
            if (is_int($key) || ctype_digit((string) $key)) {
                $properties['inputs'][$key]['class'] = [];
            }
        }
    }

    return $properties;
}, 100, 3);
