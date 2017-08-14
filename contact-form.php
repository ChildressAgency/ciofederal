<div class="container">
  <div class="contact-section">
    <div class="row">
      <div class="col-sm-6">
        <div class="contact-info">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive" alt="CIO Federal IT Logo" />
          <p><?php the_field('street_address', 'option'); ?><br /><?php the_field('city_state_zip', 'option'); ?></p>
          <p><?php the_field('email', 'option'); ?><br />tel: 703-884-3920<br />fax: 202-318-7388</p>
        </div>
      </div>
      <div class="col-sm-6">
        <?php echo do_shortcode('[contact-form]'); ?>
      </div>
    </div>
  </div>
</div>      
