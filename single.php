<?php get_header(); ?>

<?php
get_template_part('includes/section', 'products');
?>

<div>
    <h2>Gallery</h2>
    <div>
        <?php
        $product_title = get_the_title();

        switch ($product_title) {
            case 'Continuous Forms':
                echo do_shortcode('[sp_wpcarousel id="139"]');
                break;
            case 'Envelopes':
                echo do_shortcode('[sp_wpcarousel id="146"]');
                break;
            case 'Integrated Form / Label Combination':
                echo do_shortcode('[sp_wpcarousel id="147"]');
                break;
            case 'Laser Cut Sheet Forms':
                echo do_shortcode('[sp_wpcarousel id="153"]');
                break;
            case 'Linerless Labels':
                echo do_shortcode('[sp_wpcarousel id="154"]');
                break;
            case 'Pressure Seal Forms':
                echo do_shortcode('[sp_wpcarousel id="159"]');
                break;
            case 'Multi-Part Snapset Forms':
                echo do_shortcode('[sp_wpcarousel id="164"]');
                break;
            default:
                echo "More images coming soon...";
        }
        ?>
    </div>
</div>

<?php get_footer(); ?>