<?php
$catalog = get_field('catalog_button');
$promo = get_field('promo_products');
$items = get_posts([
    'post_type'      => 'featured',
]);
$story_img = get_field('story_image');
$picture = $story_img['sizes']['custom-size'];
?>

<?php get_header(); ?>

<h1>
    <?php
    the_field('headline');
    ?>
</h1>

<p><?php
    the_field('tagline');
    ?></p>

<div class="video" style="width: 1280px; height: 720px;">
    <?php the_field('featured_video');
    ?>
</div>
<br>
<a href="<?php echo esc_url($catalog); ?>" class="btn">Product Catalog</a>
<a href="<?php echo esc_url($promo); ?>" class="btn">Promo Products</a>

<h2>
    <?php
    the_field('featured_category');
    ?>
</h2>
<p><?php
    the_field('featured_description');
    ?></p>

<?php
foreach ($items as $post) {
    echo '<a href="' . esc_url(get_permalink()) . '">'
        . get_the_post_thumbnail(get_the_ID(), 'blog-small')
        . '</a>';
    echo '<a href="' . esc_url(get_permalink()) . '" class="featured-card-name">' . esc_html(get_the_title()) . '</a>';
}
wp_reset_postdata();
?>

<h2><?php
    the_field('our_story');
    ?></h2>

<p><?php
    the_field('story');
    ?></p>

<img src="<?php echo $picture ?>" alt="Temp">

<?php get_footer(); ?>