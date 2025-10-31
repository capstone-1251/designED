<div>
    <?php
    //  Featured section (CPT)
    $featured = new WP_Query([
        'post_type'      => 'featured',
        'posts_per_page' => 10,
    ]);

    if ($featured->have_posts()) : ?>
        <section class="section-featured">

            <?php while ($featured->have_posts()) : $featured->the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                        <img
                            src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'blog-small')); ?>"
                            alt="<?php echo esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)); ?>">
                    <?php endif; ?>

                    <h2><?php the_title(); ?></h2>

                    <p>
                        <?php
                        the_field('exerpt');
                        ?>
                    </p>

                    <a href="<?php echo esc_url(get_permalink()); ?>">Explore <?php echo esc_html(get_the_title()); ?></a>
                </article>
            <?php endwhile; ?>
        </section>
    <?php endif;
    wp_reset_postdata(); ?>
</div>

<div>
    <h2>Other Products</h2>

    <?php
    // Blog section (normal posts)

    $paged = max(1, get_query_var('paged', 1));

    $blog = new WP_Query([
        'post_type'           => 'post',
        'posts_per_page'      => 10,
        'paged'               => $paged,
        'ignore_sticky_posts' => true,
    ]);

    if ($blog->have_posts()) : ?>
        <section class="section-blog">

            <?php while ($blog->have_posts()) : $blog->the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <?php if (has_post_thumbnail()) : ?>
                        <img
                            src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'blog-small')); ?>"
                            alt="<?php echo esc_attr(get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true)); ?>">
                    <?php endif; ?>

                    <a href="<?php echo esc_url(get_permalink()); ?>"><?php echo esc_html(get_the_title()); ?></a>
                </article>
            <?php endwhile; ?>

            <!-- Standard pagination for the normal post list -->
            <nav class="pagination">
                <?php
                echo paginate_links([
                    'total'   => $blog->max_num_pages,
                    'current' => $paged,
                ]);
                ?>
            </nav>
        </section>
    <?php endif;
    wp_reset_postdata(); ?>
</div>