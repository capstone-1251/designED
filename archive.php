<?php get_header(); ?>

<div>
    <div>
        <h1>Product Catalog</h1>
        <p>Discover our full range of high-quality printing products and services. Browse through categories, compare options, and find the perfect solution for your personal or business needs—all in one place.</p>
    </div>
    <a href="<?php echo esc_url(home_url('/get-quote/')); ?>">Get Quote</a>
</div>

<?php get_template_part('includes/section', 'archive'); ?>

<!-- Pagination 
Limit reading 10 per page right now, we have 7, so we cannot see it. This part is just for future products
-->
<br>
<?php previous_posts_link() ?>
<?php next_posts_link() ?>

<?php get_footer(); ?>