<?php get_header(); ?>
<main id="main">
  <div class="page-title-bar">
    <h1>In the News</h1>
  </div>
  <section id="mainContent">
    <div class="container">
      <?php
        include_once(ABSPATH . WPINC . '/feed.php');
        $rss = fetch_feed('http://govmatters.tv/category/archive/feed/');
        if(!is_wp_error($rss)){
          $maxitems = $rss->get_item_quantity(4);
          $rss_items = $rss->get_items(0, $maxitems);
        }

        if($maxitems == 0): ?>
          <p>There are no items to display.</p>
      <?php else: foreach($rss_items as $item): ?>
        <div class="entry-summary">
          <div class="blog-summary-header">
            <h2><?php echo esc_html($item->get_title()); ?></h2>
            <?php $author = $item->get_author(); ?>
            <h3><?php echo $author->get_name(); ?></h3>
            <p><?php echo esc_html($item->get_date('m/d/y')); ?></p>
          </div>
          <p><?php echo esc_html($item->get_description()); ?></p>
          <a href="<?php echo esc_url($item->get_permalink()); ?>" class="read-more" target="_blank">READ MORE ></a>
        </div>
      <?php endforeach; endif; ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>