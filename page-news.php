<?php get_header(); ?>
<main id="main">
  <div class="page-title-bar">
    <h1>In the news</h1>
  </div>
  <section id="mainContent">
    <div class="container">
      <?php if(have_posts()): while(have_posts()): the_post(); ?>
        <div class="blog-summary container-sm-height">
          <div class="row row-sm-height">
            <div class="col-sm-7 col-sm-height">
              <div class="blog-summary-header">
                <h2><?php the_title(); ?></h2>
                <?php if(get_field('subtitle')): ?>
                  <h3><?php the_field('subtitle'); ?></h3>
                <?php endif; ?>
                <p><?php echo get_the_date('m/d/y'); ?></p>
              </div>
              <?php the_excerpt(); ?>
              <a href="<?php the_permalink(); ?>" class="read-more">READ MORE ></a>
            </div>
            <div class="col-sm-5 col-sm-height">
              <?php 
                $featured_image = get_stylesheet_directory_uri() . '/images/blue-matrix.jpg';
                if(get_field('featured_image')){
                  $featured_image = get_field('featured_image');
                }
              ?>
              <div class="blog-featured-image" style="background-image:url(<?php echo $featured_image; ?>);<?php the_field('featured_image_css'); ?>"></div>
            </div>
          </div>
        </div>
      <?php endwhile; endif; wp_pagenavi(); ?>
    </div>
  </section>
  <div class="page-background page-background-right"></div>
</main>
<section id="followUs">
  <div class="container">
    <h2>Follow Us</h2>
    <a href="<?php the_field('linkedin', 'option'); ?>" class="follow-us-linkedin" target="_blank"><i class="fa fa-linkedin"></i></a>
    <div class="linkedin-frame">
      <script src="http://platform.linkedin.com/in.js" type="text/javascript"></script>
      <script type="IN/CompanyProfile" data-id="1944255" data-format="inline" data-related="false"></script>
    </div>
  </div>
  <div class="page-background page-background-left"></div>
</section>
<?php get_footer(); ?>