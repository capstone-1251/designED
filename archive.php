<?php get_header(); ?>

<div class="overlay">
    <div class="product-archive-banner">
        <div class="container">
            <div class="content">
                <h1 class="text-test">Product Catalog</h1>
                <p>Explore our full range of custom print products, from business essentials to promotional materials and specialty finishes. Browse, compare, and discover the perfect options to bring your ideas to life—all in one easy-to-navigate catalog.</p>
            </div>
            <a href="<?php echo esc_url(home_url('/get-quote/')); ?>" class="btn">Get Quote</a>
        </div>
    </div>
</div>

<?php get_template_part('includes/section', 'archive'); ?>

<!-- Pagination 
Limit reading 10 per page right now, we have 7, so we cannot see it. This part is just for future products
-->
<br>
<?php previous_posts_link() ?>
<?php next_posts_link() ?>

<?php get_footer(); ?>