<?php

/*
Template Name: Home
*/
if(is_front_page()) {
  get_header();
}
else{
  get_header('blog');
}
?>

<!-- Hero Area Start -->
<div id="hero-area" class="hero-area-bg">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="contents text-center">
          <h2 class="head-title wow fadeInUp"><?php echo esc_html(get_theme_mod('bannar_heading')); ?></h2>
          <div class="header-button wow fadeInUp" data-wow-delay="0.3s">
            <a href="<?php echo esc_url(get_theme_mod('bannar_btn_link')); ?>" class="btn btn-common"><?php echo esc_html(get_theme_mod('bannar_btn_text')); ?></a>
          </div>
        </div>
        <div class="img-thumb text-center wow fadeInUp" data-wow-delay="0.6s">
          <img class="img-fluid" src="<?php echo esc_url(get_theme_mod('bannar_image')); ?>" alt="">
        </div>
      </div>
    </div>
  </div>
</div>
<!-- Hero Area End -->

</header>
<!-- Header Area wrapper End -->

<!-- Feature Section Start -->
<?php get_template_part('template-parts/section', 'features');?>
<!-- Feature Section End -->

<!-- Services Section Start -->
<?php get_template_part('template-parts/section', 'services');?>
<!-- Services Section End -->

<!-- Start Video promo Section -->
<?php get_template_part('template-parts/section', 'video');?>
<!-- End Video Promo Section -->

<!-- Team Section Start -->
<?php get_template_part('template-parts/section', 'team');?>
<!-- Team Section End -->

<!-- Counter Section Start -->
<?php get_template_part('template-parts/section', 'counter');?>
<!-- Counter Section End -->

<!-- Pricing section Start -->
<?php get_template_part('template-parts/section', 'pricing');?>
<!-- Pricing Table Section End -->

<?php get_template_part('template-parts/section', 'skills');?>

<!-- Portfolio Section -->
<?php get_template_part('template-parts/section', 'portfolio');?>
<!-- Portfolio Section Ends -->

<!-- Testimonial Section Start -->
<?php get_template_part('template-parts/section', 'testimonial');?>
<!-- Testimonial Section End -->

<!-- Blog Section -->
<?php get_template_part('template-parts/section', 'blog');?>
<!-- blog Section End -->

<!-- Clients Section Start -->
<?php get_template_part('template-parts/section', 'client');?>
<!-- Clients Section End -->

<!-- Contact Section Start -->
<?php get_template_part('template-parts/section', 'contact');?>
<!-- Contact Section End -->
<?php get_footer(); ?>