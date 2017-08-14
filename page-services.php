<?php get_header(); ?>
<main id="main">
  <div class="page-title-bar">
    <h1><?php echo get_the_title(); ?></h1>
  </div>
  <section id="mainContent">
    <div class="container">
      <div class="row">
        <div class="col-sm-7">
          <?php the_field('services_intro_content'); ?>
        </div>
        <div class="col-sm-5">
          <img src="<?php the_field('services_intro_image'); ?>" class="img-responsive center-block" alt="" />
        </div>
      </div>
      <?php if(have_rows('services')): while(have_rows('services')): the_row(); ?>
        <section class="service">
          <div class="media">
            <div class="media-left">
              <?php 
                $service_icon = get_stylesheet_directory_uri() . '/images/clipboard-icon.png';
                if(get_sub_field('service_icon')){
                  $service_icon = get_sub_field('service_icon');
                } ?>
              <img src="<?php echo $service_icon; ?>" class="media-object" alt="" />
            </div>
            <div class="media-body">
              <h1 class="media-header"><?php the_sub_field('service_title'); ?></h1>
              <?php the_sub_field('service_content'); ?>
            </div>
          </div>
        </section>
      <?php endwhile; endif; ?>
    </div>
  </section>
  <?php get_template_part('background-graphic.php'); ?>
</main>
<?php get_footer(); ?>