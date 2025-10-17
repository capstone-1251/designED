<?php get_header(); ?>

<?php
if (has_post_thumbnail()):
    // Alt text for images
    $attachment_id = get_post_thumbnail_id(); // Or the ID of your specific image
    $alt_text = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
?>

    <img src="<?php the_post_thumbnail_url('blog-large') ?>" alt="<?php echo $alt_text ?>">

<?php
endif
?>


<h1><?php the_title(); ?></h1>

<?php
get_template_part('includes/section', 'blogcontent');
?>

<?php get_footer(); ?>