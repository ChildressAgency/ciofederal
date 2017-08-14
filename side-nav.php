<nav class="side-nav">
  <div class="media">
    <div class="media-body">
      <?php 
        $side_nav_defaults = array(
          'theme_location' => 'side-nav',
          'menu' => '',
          'container' => ''
          'container_class' => '',
          'container_id' => '',
          'menu_class' => '',
          'menu_id' => '',
          'echo' => true,
          'fallback_cb' => 'ciofederal_sidenav_fallback_menu',
          'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth' => 2,
          'walker' => new wp_bootstrap_navwalker();
        );
        wp_nav_menu($side_nav_defaults);

        function ciofederal_sidenav_fallback_menu(){ ?>
          <ul>
            <li><a href="<?php echo home_url('about'); ?>">About</a></li>
            <li><a href="<?php echo home_url('services'); ?>">Services</a></li>
            <li><a href="<?php echo home_url('clients'); ?>">Clients</a></li>
            <li><a href="<?php echo home_url('careers'); ?>">Careers</a></li>
            <li><a href="<?php echo home_url('news'); ?>">News</a></li>
            <li><a href="<?php echo home_url('contact'); ?>">Contact</a></li>
          </ul>
      <?php } ?>
    </div>
    <div class="media-right">
      <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-icon.png" alt="CIO Federal IT Icon Logo" /></a>
    </div>
  </div>
</nav>
