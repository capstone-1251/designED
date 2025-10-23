<?php
/*
Template Name: Get Quote
*/

$quote_img = get_field('get_quote_image');
$picture = $quote_img['sizes']['blog-large'];
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
    <div>
        <h2><?php
            the_field('get_quote')
            ?></h2>
        <p><?php
            the_field('get_quote_description')
            ?>
        </p>
        <img src="<?php echo $picture ?>" alt="Temp">
        <ul>
            <li><?php
                the_field('get_quote_email')
                ?></li>
            <li><?php
                the_field('phone_number')
                ?></li>
        </ul>
    </div>
    <div>
        <?php
        echo do_shortcode('[wpforms id="257"]');
        ?>
    </div>
</div>


<?php get_footer(); ?>