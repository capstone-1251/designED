<?php get_header(); ?>


<?php get_template_part('includes/section', 'archive'); ?>

<!-- Pagination 
Limit reading 10 per page right now, we have 7, so we cannot see it. This part is just for future products
-->
<br>
<?php previous_posts_link() ?>
<?php next_posts_link() ?>

<?php get_footer(); ?>