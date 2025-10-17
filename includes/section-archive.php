<?php
if (have_posts()): while (have_posts()): the_post();
?>

        <?php
        // Alt text for images
        $attachment_id = get_post_thumbnail_id(); // Or the ID of your specific image
        $alt_text = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
        if (has_post_thumbnail()):
        ?>

            <img src="<?php the_post_thumbnail_url('blog-small') ?>" alt="<?php echo $alt_text ?>">

        <?php
        endif
        ?>

        <h1><?php the_title(); ?></h1>

        <?php
        the_field('exerpt');
        ?>
        <br>
        <a href="<?php the_permalink(); ?>">Explore <?php the_title() ?></a>

<?php
    endwhile;
else: endif;
?>