<?php
/*
Template Name: Contact Us
*/

$image1 = get_field('web_portal_image');
$picture1 = $image1['sizes']['custom-size'];
$image2 = get_field('instant_proofing_image');
$picture2 = $image2['sizes']['custom-size'];
$image3 = get_field('warehousing_distribution_image');
$picture3 = $image3['sizes']['custom-size'];
?>

<?php get_header(); ?>
<div class="container" >
    <h1><?php the_title(); ?></h1>
    <div>
        <?php
        the_field('online_ordering_description')
        ?>
        <br>
        <br>
        <a href="<?php the_field('portal_button') ?>" class="btn" target="_blank">Go to Web Portal</a>
    </div>
</div>

<div class="online-order-content">
    <div class="inner-flex">
        <div class="service-text">
            <h2><?php the_field('web_portal'); ?></h2>
            <div class="promo-underline"></div>
            <p><?php the_field('web_portal_description'); ?></p>
        </div>
        <div class="service-media">
            <img class="portal-image" src="<?php echo $picture1; ?>" alt="Temp">
        </div>
    </div>
    
    <div class="inner-flex-reverse">
        <div class="service-text">
            <h2><?php the_field('instant_proofing'); ?></h2>
            <div class="promo-underline"></div>
            <p><?php the_field('instant_proofing_description'); ?></p>
        </div>
        <div class="service-media">
            <img class="portal-image" src="<?php echo $picture1; ?>" alt="Temp">
        </div>
    </div>
    
    <div class="inner-flex">
        <div class="service-text">
            <h2><?php the_field('warehousing_distribution'); ?></h2>
            <div class="promo-underline"></div>
            <p><?php the_field('warehousing_and_distribution_description'); ?></p>
        </div>
        <div class="service-media">
            <img class="portal-image" src="<?php echo $picture1; ?>" alt="Temp">
        </div>
    </div>
</div>



<?php get_footer(); ?>