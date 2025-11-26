<?php
if (have_posts()): while (have_posts()): the_post();

        $get_quote = get_field('button');

?>

        <div class="single-banner">
            <div class="container">
                <?php
                if (has_post_thumbnail()):
                ?>

                    <img src="<?php the_post_thumbnail_url('blog-large') ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ?>" class="thumb">

                <?php
                endif
                ?>
                <h1><?php the_title(); ?></h1>
                <p><?php
                    the_field('short_description')
                    ?></p>
                <div class="featured">
                    <h2>Product Feature:</h2>
                    <ul class="sm-caption">
                        <li><?php
                            the_field('feature');
                            ?></li>
                        <li><?php
                            the_field('feature2');
                            ?></li>
                        <li><?php
                            the_field('feature3');
                            ?></li>
                        <li><?php
                            the_field('feature4');
                            ?></li>
                        <li><?php
                            the_field('feature5');
                            ?></li>
                    </ul>
                </div>
                <a href="<?php echo esc_url($get_quote); ?>" class="btn">Get Quote</a>
            </div>
        </div>

        <section>
            <h2>Product Description</h2>
            <p><?php
                the_field('product_description');
                ?></p>
        </section>

<?php
    endwhile;
else: endif;
?>