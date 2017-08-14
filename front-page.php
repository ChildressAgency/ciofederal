<?php get_header(); ?>
<main id="hp-main">
  <section class="section fp-auto-height-responsive fp-noscroll" id="section0">
    <nav id="header-nav">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="<?php echo home_url(); ?>" class="header-logo"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo-icon-white.png" class="img-responsive" alt="CIO Federal IT Icon Logo" /></a>
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="expanded" aria-controls="navbar">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <?php 
          $nav_defaults = array(
            'theme_location' => 'header-nav',
            'menu' => '',
            'container' => 'div',
            'container_class' => 'navbar-collapse collapse',
            'container_id' => 'navbar'>
            'menu_class' => 'nav navbar-nav navbar-right',
            'menu_id' => '',
            'echo' => true,
            'fallback_cb' => 'ciofederal_fallback_menu',
            'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s<li><a href="' . the_field('linkedin', 'option') . '" class="header-social" target="_blank"><i class="fa fa-linkedin"></i></a></li></ul>',
            'depth' => 2,
            'walker' => new wp_bootstrap_navwalker()
          );
          wp_nav_menu($nav_defaults);

          function ciofederal_fallback_menu(){ ?>
            <div id="navbar" class="navbar-collapse collapse">
              <ul class="nav navbar-nav navbar-right">
                <li<?php if(is_page('about')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('about'); ?>">About</a></li>
                <li<?php if(is_page('services')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('services'); ?>">Services</a></li>
                <li<?php if(is_page('clients')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('clients'); ?>">Clients</a></li>
                <li<?php if(is_page('careers')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('careers'); ?>">Careers</a></li>
                <li<?php if(is_page('news')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('news'); ?>">News</a></li>
                <li<?php if(is_page('contact')){ echo ' class="active"'; } ?>><a href="<?php echo home_url('contact'); ?>">Contact</a></li>
                <li><a href="<?php the_field('linkedin', 'option'); ?>" class="header-social" target="_blank"><i class="fa fa-linkedin"></i></a></li>
              </ul>
            </div>
        <?php } ?>
      </div>
    </nav>
    <div id="sectionCarousel" class="carousel slide carousel-fade">
      <div class="carousel-inner">
        <?php if(have_rows('first_section_slides')): $i=0; while(have_rows('first_section_slides')): the_row(); ?>
          <div class="item<?php if($i==0){ echo ' active'; } ?>" style="background-image:url(<?php the_sub_field('first_section_slide'); ?>);<?php the_sub_field('first_section_slide_css'); ?>"></div>
        <?php $i++; endwhile; endif; ?>
      </div>
    </div>
      <div class="caption-wrapper">
        <div class="caption">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive center-block" alt="CIO Federal IT Logo" />
          <h2><?php the_field('slogan'); ?></h2>
          <div id="captionBoxes">
            <div id="captions">
              <?php if(have_rows('services')): $c=1; while(have_rows('services')): the_row(); ?>
                <div id="caption<?php echo $c; ?>" class="caption-content collapse" aria-expanded="false">
                  <div class="media">
                    <div class="media-left media-middle">
                      <img src="<?php the_sub_field('service_icon'); ?>" class="media-object" alt="" />
                    </div>
                    <div class="media-body">
                      <h1 class="media-header"><?php the_sub_field('service_title'); ?></h1>
                      <?php the_sub_field('service_text'); ?>
                    </div>
                    <a href="<?php echo home_url('services'); ?>" class="read-more">More ></a>
                  </div>
                </div>
              <?php $c++; endwhile; endif; ?>
            </div>
            <div class="caption-tabs">
              <?php if(have_rows('services')): $c=1; while(have_rows('services')): the_row(); ?>
                <a href="#caption<?php echo $c; ?>" class="btn-bottom-tab" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="caption<?php echo $c; ?>"><?php the_sub_field('service_tab_title'); ?></a>
              <?php $c++; endwhile; endif; ?>
            </div>
          </div>
        </div>
      </div>
    <span class="scroller"><i class="fa fa-angle-down"></i></span>
  </section>
  <section class="section fp-auto-height-responsive" id="section1" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/keyboard-gears.jpg);">
    <video id="section1Video" loop muted controls="false" data-autoplay>
      <source src="<?php echo get_stylesheet_directory_uri(); ?>/images/white-keyboard.mp4" type="video/mp4" />
      <source src="<?php echo get_stylesheet_directory_uri(); ?>/images/white-keyboard.webm" type="video/webm" />
      <source src="<?php echo get_stylesheet_directory_uri(); ?>/images/white-keyboard.ogv" type="video/ogg" />
    </video>
    <div class="bottom-caption-section">
      <div class="container">
        <div class="bottom-caption">
          <h1>Our Mission</h1>
          <p><?php the_field('mission_section_text'); ?></p>
          <div class="btns-inline">
            <a href="<?php echo home_url('about'); ?>" class="btn-main">About Us</a>
            <a href="<?php echo home_url('services'); ?>" class="btn-main">Services</a>
            <a href="<?php echo home_url('contact'); ?>" class="btn-main">Contact</a>
          </div>
        </div>
      </div>
    </div>
    <?php get_template_part('side-nav.php'); ?>
    <div class="page-background page-background-left"></div>
  </section>
  <section class="section fp-auto-height-responsive" id="section2" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/people-discussing-image-gears.jpg);">
    <div class="bottom-caption-section">
      <div class="container">
        <div class="bottom-caption">
          <div class="row">
            <div class="col-sm-7">
              <h1>Services</h1>
              <p>Project Management<br />Development &amp; Optimization</p>
              <p>Software Solutions<br />COTS / GOTS</p>
              <a href="<?php echo home_url('services'); ?>" class="btn-main">Our Services</a>
            </div>
            <div class="col-sm-5">
              <div class="callout-bubble">
                <h4>NAICS Codes:</h4>
                <p><?php the_field('naics_codes'); ?></p>
                <h4>Memberships:</h4>
                <?php the_field('memberships'); ?>
                <h4>Contract Vehicles:</h4>
                <?php the_field('contract_vehicles'); ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php get_template_part('side-nav.php'); ?>
  </section>
  <section class="section fp-auto-height-responsive" id="section3" style="background-image:url(<?php echo get_stylesheet_directory_uri(); ?>/images/ones-zeros-on-screen.jpg);">
    <video id="section3Video" loop muted controls="false" data-autoplay>
      <source src="<?php echo get_stylesheet_directory_uri(); ?>/images/binary_screen_white.mp4" type="video/mp4" />
      <source src="<?php echo get_stylesheet_directory_uri(); ?>/images/binary_screen_white.webm" type="video/webm" />
      <source src="<?php echo get_stylesheet_directory_uri(); ?>/images/binary_screen_white.ogv" type="video/ogg" />
    </video>
    <div class="bottom-caption-section">
      <div class="client-logos">
        <div class="container">
          <ul class="list-unstyled list-inline">
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/doj-fbi-logo.png" class="img-responsive center-block" alt="Department of Justice Federal Bureau of Investigation Logo" /></li>
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/doj-logo.png" class="img-responsive center-block" alt="Department of Justice Logo" /></li>
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dot-logo.png" class="img-responsive center-block" alt="The Department of the Treasury Logo" /></li>
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dohs-logo.png" class="img-responsive center-block" alt="Department of Homeland Security Logo" /></li>
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/dos-logo.png" class="img-responsive center-block" alt="Department of State Logo" /></li>
            <li><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/nasc-logo.png" class="img-responsive center-block" alt="Naval Aim System Command Logo" /></li>
          </ul>
        </div>
      </div>
      <div class="clients-section-footer">
        <div class="container">
          <div class="clients-section-footer-content">
            <h1>Clients</h1>
            <?php the_field('clients_text'); ?>
            <a href="<?php echo home_url('clients'); ?>" class="btn-main">Read More</a>
          </div>
        </div>
      </div>
    </div>
    <?php get_template_part('side-nav.php'); ?>
  </section>
  <section class="section fp-auto-height-responsive" id="section4">
    <?php get_template_part('contact-form.php'); ?>
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
            <a href="<?php the_field('linkedin'); ?>" class="footer-social"><i class="fa fa-linkedin"></i></a>
          </div>
        </div>
        <div class="copyright">
          <p>&copy;<?php echo date('Y'); ?> CIO Federal IT</p>
          <p>website created by <a href="https://childressagency.com">The Childress Agency</a></p>
        </div>
      </div>
    </footer>
    <?php get_template_part('side-nav.php'); ?>
  </section>
</main>
<?php get_footer(); ?>