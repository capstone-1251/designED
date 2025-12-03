<?php
/*
Template Name: Contact Us
*/

$image1 = get_field('web_portal_image');
$picture1 = $image1['sizes']['custom-size-2'];
$image2 = get_field('instant_proofing_image');
$picture2 = $image2['sizes']['custom-size-2'];
$image3 = get_field('warehousing_distribution_image');
$picture3 = $image3['sizes']['custom-size-2'];
?>



<?php get_header(); ?>
<div class="order-container">
    <div class="online-order-head container">

        <div class="header-inner-flex">
            <h1 class="online-title"><?php the_title(); ?></h1>
            <div class="text-about-us">
                <p>
                    <?php
                    the_field('online_ordering_description')
                    ?>
                </p>
                <br>
                <br>
                <a href="<?php the_field('portal_button') ?>" class="btn" target="_blank">Go to Web Portal</a>
            </div>
        </div>
    </div>
</div>



<div class="online-order-content container">
    <div class="inner-flex">
        <div class="service-text">
            <h2><?php the_field('web_portal'); ?></h2>
            <div class="promo-underline"></div>
            <p class="text-about-us"><?php the_field('web_portal_description'); ?></p>
        </div>
        <div class="service-media">
            <img class="portal-image" src="<?php echo $picture1; ?>" alt="Temp">
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/white-bg-02.avif" alt="Logo" class="order-bgone">

</div>

<div class="order-container-second">
    <div class="online-order-content container">
        <div class="inner-flex">
            <div class="service-media">
                <img class="portal-image" src="<?php echo $picture2; ?>" alt="Temp">
            </div>
            <div class="service-text">
                <h2><?php the_field('instant_proofing'); ?></h2>
                <div class="promo-underline"></div>
                <p class="text-about-us"><?php the_field('instant_proofing_description'); ?></p>
            </div>
        </div>
    </div>
</div>


<div class="online-order-content container">
    <div class="inner-flex">
        <div class="service-text">
            <h2><?php the_field('warehousing_distribution'); ?></h2>
            <div class="promo-underline"></div>
            <p class="text-about-us"><?php the_field('warehousing_and_distribution_description'); ?></p>
        </div>
        <div class="service-media">
            <img class="portal-image" src="<?php echo $picture3; ?>" alt="Temp">
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri(); ?>/img/white-bg-02.avif" alt="Logo" class="order-bgtwo">
</div>



</div>



<?php get_footer(); ?>