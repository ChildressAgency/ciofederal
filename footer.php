<?php if(!is_front_page() && !is_page('contact')): ?>
  <section id="contact">
    <?php get_template_part('contact-form.php'); ?>
  </section>
  <footer>
    <div class="container">
      <div class="row">
        <div class="col-sm-2">
          <a href="<?php echo home_url(); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-icon-white.png" class="img-responsive" alt="CIO Federal IT Logo Icon" /></a>
        </div>
        <div class="col-sm-8">
          <?php 
            $footer_nav_defaults = array(
              'theme_location' => 'footer-nav',
              'menu' => '',
              'container' => 'nav',
              'container_class' => '',
              'container_id' => 'footer-nav',
              'menu_class' => 'nav nav-justified',
              'menu_id' => '',
              'echo' => true,
              'fallback_cb' => 'ciofederal_fallback_footer_menu',
              'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
              'depth' => 2,
              'walker' => new wp_bootstrap_navwalker()
            );
            wp_nav_menu($footer_nav_defaults);

            function ciofederal_fallback_footer_menu(){ ?>
              <nav id="footer-nav">
                <ul class="nav nav-justified">
                  <li><a href="<?php echo home_url('about'); ?>">About</a></li>
                  <li><a href="<?php echo home_url('services'); ?>">Services</a></li>
                  <li><a href="<?php echo home_url('clients'); ?>">Clients</a></li>
                  <li><a href="<?php echo home_url('careers'); ?>">Careers</a></li>
                  <li><a href="<?php echo home_url('news'); ?>">News</a></li>
                  <li><a href="<?php echo home_url('contact'); ?>">Contact</a></li>
                </ul>
              </nav>
          <?php } ?>
        </div>
        <div class="col-sm-2">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/sba-logo-white.png" class="img-responsive cert-logo" alt="U.S. Small Business Administration Logo" />
          <a href="<?php the_field('linkedin', 'option'); ?>" class="footer-social"><i class="fa fa-linkedin"></i></a>
        </div>
      </div>
      <div class="copyright">
        <p>&copy;<?php echo date('Y'); ?> CIO Federal IT</p>
        <p>website created by <a href="https://childressagency.com">The Childress Agency</a></p>
      </div>
    </div>
  </footer> 
<?php endif; ?>
  <?php wp_footer(); ?>
  </body>
</html>