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
<div class="about-container">
    <div class="about-banner">
      <div class="container">
        
        <div class="about-content">
          <h1><?php the_title(); ?></h1>
          <div class="aboutus-underline"></div>
         
          <div class="about-text">

          <div class="about-img"><img src="<?php echo $picture ?>" alt="<?php echo $about_image['alt']; ?>"></div>
            
            <p>
                <?php
                the_field('about_us_description');
                ?>
            </p>
            <ul>
                <li><?php
                    the_field('about_us_1');
                    ?></li>
                <li><?php
                    the_field('about_us_2');
                    ?></li>
                <li><?php
                    the_field('about_us_3');
                    ?></li>
            </ul>
            <p class="about-tagline"><?php
                the_field('about_us_tagline');
                ?></p>
          </div>

        </div>

</div>
</div>
</div>



<div class="container owner-section">
    <div class="owner-inner">
        
        <div class="owner-text">
            <h2 class="owner-title">
                <?php the_field('meet_the_owner'); ?>
            </h2>

            <div class="aboutus-underline"></div>

            <p class="owner-description">
                <?php the_field('owner_description'); ?>
            </p>

            <a href="/contact" class="btn">Contact Us</a>
        </div>

      
        <div class="owner-photo">
            <figure>
                <img src="<?php echo esc_url($owner_picture); ?>"
                     alt="<?php echo esc_attr($owner_image['alt']); ?>">
                <div class="owner-name">
                    <?php echo esc_html($owner_image['alt']); ?>
                </div>
            </figure>
        </div>
    </div>
</div>




<?php get_footer(); ?>