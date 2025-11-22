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
<div class="container">
    <div>
        
        <div>
            <h1><?php the_title(); ?></h1>
            <div class="aboutus-underline"></div>
            <div class="about-inner">
   
    <div class="about-media">
        <img class="about-image"
             src="<?php echo $picture; ?>"
             alt="<?php echo esc_attr( $about_image['alt'] ); ?>">
    </div>

    
    <div class="about-text">
        <p>
            <?php the_field('about_us_description'); ?>
        </p>

        <ul class="about-list">
            <li><?php the_field('about_us_1'); ?></li>
            <li><?php the_field('about_us_2'); ?></li>
            <li><?php the_field('about_us_3'); ?></li>
        </ul>

        <p class="about-tagline">
            <?php the_field('about_us_tagline'); ?>
        </p>
    </div>
</div>
        
    </div>
    
    <div class="owner-section">
    <div class="owner-inner">
    <div class="owner-text">
      <h2><?php the_field('meet_the_owner'); ?></h2>
      <div class="promo-underline"></div>

      <p><?php the_field('owner_description'); ?></p>

      <a href="/contact" class="owner-btn">Contact Us</a>
    </div>

    <div class="owner-media">
      <div class="owner-photo-wrap">
        <span class="owner-name">
          <?php echo esc_html( $owner_image['title'] ?? 'Edward Gebran' ); ?>
        </span>
        <img
          class="owner-photo"
          src="<?php echo esc_url( $owner_picture ); ?>"
          alt="<?php echo esc_attr( $owner_image['alt'] ); ?>"
        >
      </div>
    </div>
  </div>
</div>

</div>


<?php get_footer(); ?>