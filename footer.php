</main>

<?php if (is_active_sidebar('main-sidebar')) : ?>
    <aside class="sidebar">
        <?php dynamic_sidebar('main-sidebar'); ?>
    </aside>
<?php endif; ?>

<?php
wp_footer();
?>

</body>

</html>