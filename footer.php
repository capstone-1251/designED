</main>

<footer>

    <div class="container">
        <div class="footer-container">
            <?php if (is_active_sidebar('main-sidebar')) : ?>
                <aside class="sidebar">

                    <?php dynamic_sidebar('main-sidebar'); ?>
            
                </aside>
            
            <?php endif; ?>
        </div>
    </div>

</footer>

<?php
wp_footer();

?>

</body>

</html>