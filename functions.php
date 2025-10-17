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
