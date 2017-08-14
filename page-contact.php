<?php get_header(); ?>
<main id="main">
  <div class="page-title-bar">
    <h1><?php echo get_the_title(); ?></h1>
  </div>
  <section id="mainContent">
    <?php get_template_part('contact-form'); ?>
  </section>
  <?php get_template_part('background-graphic'); ?>
</main>
<?php get_footer(); ?>