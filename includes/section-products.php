<?php
if (have_posts()): while (have_posts()): the_post();

        $get_quote = get_field('button');

?>

        <div class="single-banner">
            <div class="container">
                <div class="image">
                    <?php
                    if (has_post_thumbnail()):
                    ?>
                        <img src="<?php the_post_thumbnail_url('blog-xl') ?>" alt="<?php echo get_post_meta(get_post_thumbnail_id(), '_wp_attachment_image_alt', true) ?>" class="thumb" id="single-img">
                    <?php
                    endif
                    ?>
                </div>
                <div class="content">
                    <h1 id="single-title"><?php the_title(); ?></h1>
                    <p id="single-description"><?php
                                                the_field('short_description')
                                                ?></p>
                    <div class="featured" id="single-featured">
                        <h3>Product Feature:</h3>
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
                    <a href="<?php echo esc_url($get_quote); ?>" class="btn" id="single-btn">Get Quote</a>
                </div>
            </div>
            <img src="<?php echo get_template_directory_uri(); ?>/img/white-bg-02.avif" alt="Logo" class="bg-image1">
        </div>

        <section class="product-description">
            <div class="container">
                <h2>Product Description</h2>
                <div class="mg-line"></div>
                <p><?php
                    the_field('product_description');
                    ?></p>
            </div>
        </section>

<?php
    endwhile;
else: endif;
?>