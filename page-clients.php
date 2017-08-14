<?php get_header(); ?>
<main id="main">
  <div class="page-title-bar">
    <h1 class="page-title"><?php echo get_the_title(); ?></h1>
  </div>
  <section id="clients">
    <div class="container">
      <div class="client-logos">
        <div class="row">
          <div class="col-sm-3">
            <ul class="list-unstyled list-inline">
              <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/doj-fbi-logo.png" class="img-responsive center-block" alt="Department of Justice Federal Bureau of Investigation Logo" /></li>
              <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/doj-logo.png" class="img-responsive center-block" alt="Department of Justice Logo" /></li>
              <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dot-logo.png" class="img-responsive center-block" alt="The Department of the Treasury Logo" /></li>
              <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dohs-logo.png" class="img-responsive center-block" alt="Department of Homeland Security Logo" /></li>
              <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dos-logo.png" class="img-responsive center-block" alt="Department of State Logo" /></li>
              <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nasc-logo.png" class="img-responsive center-block" alt="Naval Aim System Command Logo" /></li>
            </ul>
          </div>
          <div class="col-sm-9">
            <?php if(have_posts()): while(have_posts()): the_post(); ?>
              <?php the_content(); ?>
            <?php endwhile; endif; ?>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php
    $page = get_query_var('page') ? get_query_var('page'): '1';
    $row = 0;
    $testimonials_per_page = 4;
    $testimonials = get_field('testimonials');
    $total = count($testimonials);
    $pages = ceil($total / $testimonials_per_page);
    $min = (($page * $testimonials_per_page) - $testimonials_per_page) + 1;
    $max = ($min + $testimonials_per_page);

    if(have_rows('testimonials')): ?>
      <section id="mainContent">
        <div class="container">
          <h2>What others have said...</h2>
          <?php while(have_rows('testimonials')): the_row(); $row++;
            //ignore this testimonial if $row is less than $min
            if($row < $min){ continue; }

            //stop loop completely if $row is more than $max
            if($row > $max){ break; } ?>
            
            <div class="testimonial">
              <p><?php the_sub_field('testimonial'); ?></p>
              <?php if(get_sub_field('testimonial_author')): ?>
                <p class="author"><?php the_sub_field('testimonial_author'); ?></p>
              <?php endif; ?>
              <?php if(get_sub_field('testimonial_author_company')): ?>
                <p class="author-company"><?php the_sub_field('testimonial_author_company'); ?></p>
              <?php endif; ?>
            </div>
          <?php endwhile; ?>

          <nav id="testimonialPagination" aria-label="Page navigation">
            <?php 
              echo paginate_links(array(
                'base' => get_permalink() . '%#%' . '/',
                'format' => '?page=%#%',
                'current' => $page,
                'total' => $pages,
                'prev_text' => '&lt;',
                'next_text' => '&gt;'
              ));
            ?>
          </nav>
        </div>
      </section>
  <?php endif; ?>
  <?php get_template_part('background-graphichp'); ?>
</main>
<?php get_footer(); ?>