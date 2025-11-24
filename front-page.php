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
<div class="header">
<div class="web-banner">
            <div class="front-page-container">
                <div class="text">
                    <h1>
                        <?php
                        the_field('headline');
                        ?>
                    </h1>
                    <p><?php
                        the_field('tagline');
                        ?></p>
                    <a href="<?php echo esc_url($catalog); ?>" class="banner-btn">Product Catalog</a>
                </div>
                <div class="video">
                    <?php the_field('featured_video');
                    ?>
                </div>
            </div>
        </div>
</div> 

<section class="front-page">
        <section class="featured-product">
            <div class="front-page-container">
                <div class="featured-products-grid">
                    <?php foreach ($items as $post) : setup_postdata($post); ?>
                        <div class="featured-card">
                            <a href="<?php echo esc_url(get_permalink()); ?>"
                            class="featured-card-image">
                            <span class="featured-card-name">
                                    <?php echo esc_html(get_the_title()); ?>
                                </span>
                            <?php echo get_the_post_thumbnail(get_the_ID(), 'large'); ?>
                
                            </a>
                        </div>
                    <?php endforeach;
                    wp_reset_postdata(); ?>
                </div>
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
                <div class="story-container">
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
                </div>
            <div class="our-story-bg"></div>

        </section>

        <section class="promo-section fron">

            <div class="promo-image">
                <img
                    src="<?php echo esc_url($promo_picture); ?>"
                    alt="<?php echo esc_attr($promo_image['alt']); ?>">
            </div>

            <div class="promo-content">
                <h2>Promo Product</h2>

                <div class="promo-underline"></div>

                <p><?php the_field('promo_product_details'); ?></p>

                <a href="<?php echo esc_url($promo_link); ?>" class="promo-btn">
                    Visit Store
                </a>
            </div>

        </section>

</section>


<?php get_footer(); ?>