<?php
if (have_posts()): while (have_posts()): the_post();

        $get_quote = get_field('button');

?>

        <div>
            <h2>Produc Name</h2>
            <p><?php
                the_field('short_description')
                ?></p>

            <ul>
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
            <a href="<?php echo esc_url($get_quote); ?>" class="btn">Get Quote</a>
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