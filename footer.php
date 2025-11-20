</main>

<footer>

    <div class="container">
        <div class="footer-container">
            <?php if (is_active_sidebar('main-sidebar')) : ?>
                <aside class="sidebar">

                    <?php dynamic_sidebar('main-sidebar'); ?>
            
                </aside>
                <div class="phone-btn">
                        <svg fill="none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 69 69"><path fill-rule="evenodd" clip-rule="evenodd" d="M50.18 68.22c-4.92-.18-18.86-2.1-33.46-16.7S.19 22.96 0 18.04C-.26 10.55 5.48 3.25 12.12.4a5 5 0 0 1 4.94.54c5.47 3.99 9.24 10.02 12.48 14.75a5.14 5.14 0 0 1-.88 6.79L22 27.44a1.64 1.64 0 0 0-.49 2.1 47 47 0 0 0 7.27 9.91 53 53 0 0 0 10.3 7.62 1.65 1.65 0 0 0 2.2-.55l4.33-6.6a5.14 5.14 0 0 1 7.03-1.14c4.8 3.33 10.41 7.03 14.52 12.29a5 5 0 0 1 .65 5.07c-2.86 6.68-10.1 12.36-17.63 12.08" fill="#000"/></svg>
                 </div>
                 
            
            <?php endif; ?>
        </div>
        
         
    </div>
    <div class="credit">
                  <p>2025 Printed</p>
     </div>

</footer>


<?php
wp_footer();

?>

</body>

</html>