<?php get_header(); ?>
<main id="main">
  <?php if(is_singular()): ?>
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
  <?php else: ?>
    <section id="mainContent">
      <div class="container">
        <?php if(have_posts()): while(have_posts()): the_post(); ?>
          <div class="entry-summary">
            <div class="blog-summary-header">
              <h2><?php the_title(); ?></h2>
              <?php if(get_field('subtitle')): ?>
                <h3><?php the_field('subtitle'); ?></h3>
              <?php endif; ?>
              <p><?php echo get_the_date(); ?></p>
            </div>
            <?php the_excerpt(); ?>
            <a href="<?php the_permalink(); ?>" class="read-more">READ MORE ></a>
          </div>
        <?php endwhile; endif; ?>
      </div>
    </section>
  <?php endif; ?>
</main>
<?php get_footer(); ?>