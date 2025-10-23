<?php
/*
Template Name: Contact Us
*/

$about_image = get_field('about_us_image');
$picture = $about_image['sizes']['custom-size'];
$owner_image = get_field('owner_image');
$owner_picture = $owner_image['sizes']['custom-size'];
?>

<?php get_header(); ?>
<div>
    <div>
        <h1><?php the_title(); ?></h1>
        <?php
        the_field('about_us_description')
        ?>
    </div>
    <div><img src="<?php echo $picture ?>" alt="Temp"></div>
</div>
<div>
    <div>
        <h2>
            <?php
            the_field('meet_the_owner');
            ?>
        </h2>
        <p>
            <?php
            the_field('owner_description');
            ?>
        </p>
    </div>
    <div>
        <div><img src="<?php echo $owner_picture ?>" alt="Temp"></div>
    </div>
</div>


<?php get_footer(); ?>