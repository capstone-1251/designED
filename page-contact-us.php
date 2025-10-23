<?php
/*
Template Name: Contact Us
*/
?>

<?php get_header(); ?>
<div>
    <div>
        <h1><?php the_title(); ?></h1>
        <?php
        the_field('contact_short_description')
        ?>
    </div>
    <img src="<?php the_post_thumbnail_url('blog-large') ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ?>">
</div>
<div>
    <?php
    echo do_shortcode('[wpforms id="241"]');
    ?>
</div>


<?php get_footer(); ?>