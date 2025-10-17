<?php get_header(); ?>

<?php
if (has_post_thumbnail()):
?>

    <img src="<?php the_post_thumbnail_url('blog-large') ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ?>">

<?php
endif
?>


<h1><?php the_title(); ?></h1>

<?php
get_template_part('includes/section', 'products');
?>

<?php get_footer(); ?>