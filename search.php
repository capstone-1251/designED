<?php get_header(); ?>

<div class="search-results-container">
    <h2>Search Results for: <?php echo get_search_query(); ?></h2>
    <div class="mg-line"></div>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <div class="search-result-item">
                <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                </a>
                <p><?php echo wp_trim_words(get_the_excerpt(), 20, '...'); ?></p>
            </div>
        <?php
        endwhile;
    else :
        ?>
        <p>No results found. Please try a different search.</p>
    <?php
    endif;
    ?>

    <?php get_footer(); ?>