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
<div>
    <h1><?php the_title(); ?></h1>
    <div>
        <?php
        the_field('online_ordering_description')
        ?>
        <br>
        <a href="<?php the_field('portal_button') ?>" class="featured-card-name" target="_blank">Go to Web Portal</a>
    </div>
</div>

<div>
    <div>
        <h2>
            <?php
            the_field('web_portal');
            ?>
        </h2>
        <p>
            <?php
            the_field('web_portal_description');
            ?>
        </p>
    </div>
    <div>
        <div><img src="<?php echo $picture1 ?>" alt="Temp"></div>
    </div>
</div>

<div>
    <div>
        <h2>
            <?php
            the_field('instant_proofing');
            ?>
        </h2>
        <p>
            <?php
            the_field('instant_proofing_description');
            ?>
        </p>
    </div>
    <div>
        <div><img src="<?php echo $picture1 ?>" alt="Temp"></div>
    </div>
</div>

<div>
    <div>
        <h2>
            <?php
            the_field('warehousing_distribution');
            ?>
        </h2>
        <p>
            <?php
            the_field('warehousing_and_distribution_description');
            ?>
        </p>
    </div>
    <div>
        <div><img src="<?php echo $picture1 ?>" alt="Temp"></div>
    </div>
</div>


<?php get_footer(); ?>