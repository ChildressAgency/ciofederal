<?php get_header(); ?>
<main id="main">
  <div class="page-title-bar">
    <h1><?php echo get_the_title(); ?></h1>
  </div>
  <section id="mainContent">
    <div class="container">
      <?php if(have_rows('page_layout')): while(have_rows('page_layout')): the_row(); ?>

        <?php if(get_row_layout() == 'two_columns'): ?>
          <div class="row">
            <div class="col-sm-6<?php if(is_page('careers')){ echo ' col-sm-push-6'; } ?>">
              <?php the_sub_field('left_column'); ?>
            </div>
            <div class="col-sm-6<?php if(is_page('careers')){ echo ' col-sm-pull-6'; } ?>">
              <?php the_sub_field('right_column'); ?>
            </div>
          </div>
        <?php else: ?>
          <?php the_sub_field('page_content'); ?>
        <?php endif; ?>

      <?php endwhile; endif; ?>
    </div>
  </section>
  <?php get_template_part('background-graphic.php'); ?>
</main>
<?php get_footer(); ?>