<?php
$catalog = get_field('catalog_button');
$promo = get_field('promo_products');
$items = get_posts([
    'post_type'      => 'featured',
]);
$story_img = get_field('story_image');
$picture = $story_img['sizes']['custom-size'];
$promo_image = get_field('promo_product_picture');
$promo_picture = $promo_image['sizes']['custom-size'];
$promo_link = get_field('promo_product_link');
?>

<?php get_header(); ?>
<section class="front-page">
    <div class="front-page-container">
        <div class="web-banner">
            <div>
                <h1>
                    <?php
                    the_field('headline');
                    ?>
                </h1>

                <p><?php
                    the_field('tagline');
                    ?></p>
                <a href="<?php echo esc_url($catalog); ?>" class="btn">Product Catalog</a>
            </div>

            <div class="video" style="width: 750px; height: 400px;">
                <?php the_field('featured_video');
                ?>
            </div>
        </div>
        <br>

        <section class="featured-product">
            <div class="featured-products-grid">
                <?php foreach ($items as $post) : setup_postdata($post); ?>

                    <div class="featured-card">
                        <a href="<?php echo esc_url(get_permalink()); ?>" class="featured-card-image">
                            <?php echo get_the_post_thumbnail(get_the_ID(), 'large'); ?>

                            <span class="featured-card-name">
                                <?php echo esc_html(get_the_title()); ?>
                            </span>
                        </a>
                    </div>

                <?php endforeach;
                wp_reset_postdata(); ?>
            </div>


            <div>
                <h2>
                    <?php
                    the_field('featured_category');
                    ?>
                </h2>
                <div class="hr-underline"></div>
                <p><?php
                    the_field('featured_description');
                    ?></p>
            </div>
        </section>

        <section class="our-story">
            <div class="our-story-bg"></div>

            <div class="our-story-content">
                <h2><?php the_field('our_story'); ?></h2>

                <div class="story-divider"></div>

                <p><?php the_field('story'); ?></p>

                <a href="/about" class="story-btn">About Us</a>
            </div>

            <div class="our-story-image">
                <img
                    src="<?php echo esc_url($picture); ?>"
                    alt="<?php echo esc_attr($story_img['alt']); ?>" />
            </div>
        </section>



        <section class="promo-section">

            <div class="promo-image">
                <img
                    src="<?php echo esc_url($promo_picture); ?>"
                    alt="<?php echo esc_attr($promo_image['alt']); ?>">
            </div>

            <div class="promo-content">
                <h2><?php the_field('promo_title'); ?></h2>

                <div class="promo-underline"></div>

                <p><?php the_field('promo_product_details'); ?></p>

                <a href="<?php echo esc_url($promo_link); ?>" class="promo-btn">
                    Visit Store
                </a>
            </div>

        </section>

    </div>
</body>


<?php get_footer(); ?>