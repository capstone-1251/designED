<?php
if (have_posts()): while (have_posts()): the_post();
?>

        <?php
        if (has_post_thumbnail()):
        ?>

            <img src="<?php the_post_thumbnail_url('blog-small') ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ?>">

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