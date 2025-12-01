<?php get_header(); ?>

<div class="search-results-container">
    <div class="container">
        <h2>Search Results for: <span><?php echo get_search_query(); ?></span></h2>
        <div class="mg-line"></div>
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post();
        ?>
                <div class="search-result-item">
                    <a href="<?php the_permalink(); ?>">
                        <h3 class="mobile"><?php the_title(); ?></h3>
                        <?php
                        if (has_post_thumbnail()):
                        ?>
                            <img src="<?php the_post_thumbnail_url('blog-xl') ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ?>" class="thumb">
                        <?php
                        endif
                        ?>
                    </a>
                    <div class="content">
                        <h3 class="desktop"><?php the_title(); ?></h3>
                        <p>
                            <?php
                            the_field('exerpt');
                            ?>
                        </p>
                        <a href="<?php echo esc_url(get_permalink()); ?>" class="btn">Explore <?php echo esc_html(get_the_title()); ?></a>
                    </div>
                </div>
            <?php
            endwhile;
        else :
            ?>
            <p>No results found. Please try a different search.</p>
        <?php
        endif;
        ?>
    </div>
</div>

<?php get_footer(); ?>