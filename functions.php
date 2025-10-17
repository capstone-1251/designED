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



// Menus
register_nav_menus(

    array(

        'top-menu' => 'Top Navigation Location',
        'mobile-menu' => 'Mobile Navigation Location',

    )

);


// Custom Image Sizes
add_image_size('blog-large', 800, 400, false);
add_image_size('blog-small', 300, 200, true);


// Alt text for images
$attachment_id = get_post_thumbnail_id(); // Or the ID of your specific image
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
        'has_archive' => true,
        'menu_icon' => 'dashicons-cart',
        'supports' => array('title', 'editor', 'thumbnail'),

    );

    register_post_type('featured', $args);
}
add_action('init', 'featured_products_post_type');



// function featured_taxonomy()
// {

//     $args = array(

//         'labels' => array(
//             'name' => 'products',
//             'singular_name' => 'product'
//         ),
//         'public' => true,
//         'hierachical' => true,

//     );

//     register_taxonomy('products', array('featured'), $args);
// }
// add_action('init', 'featured_taxonomy');

add_action('init', function () {
    register_taxonomy_for_object_type('category', 'featured'); // your CPT slug
});

add_action('pre_get_posts', function ($q) {
    if (is_admin() || ! $q->is_main_query()) return;

    // Apply to generic archives (category/tag/tax/date/author, etc.)
    if ($q->is_archive()) {

        // Don’t touch the CPT’s *own* archive (e.g., /book/)
        if ($q->is_post_type_archive('featured')) return;

        // Only override when WP would otherwise query just 'post'
        $current = $q->get('post_type');
        if (empty($current) || $current === 'post' || $current === ['post']) {
            $q->set('post_type', ['post', 'featured']); // add your CPT slug here
        }
    }

    // Optional: also mix on the blog home and search
    if ($q->is_home() || $q->is_search()) {
        $q->set('post_type', ['post', 'featured']);
    }
});
