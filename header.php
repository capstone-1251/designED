<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PrintED</title>

    <?php wp_head(); ?>

</head>

<body>

    <header>
        <?php if (function_exists('the_custom_logo') && has_custom_logo()) : ?>
            <div class="site-logo"><?php the_custom_logo(); ?></div>
        <?php endif; ?>


        <?php

        wp_nav_menu(
            array(
                'theme_location' => 'top-menu',
                'menu_class' => 'nav-bar'
            )
        )
        ?>
    </header>