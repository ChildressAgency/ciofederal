<div class="container">
  <div class="contact-section">
    <div class="row">
      <div class="col-sm-6">
        <div class="contact-info">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo.png" class="img-responsive" alt="CIO Federal IT Logo" />
          <p><?php the_field('street_address', 'option'); ?><br /><?php the_field('city_state_zip', 'option'); ?></p>
          <p><?php the_field('email', 'option'); ?><br />tel: <?php the_field('phone_number', 'option'); ?><br />fax: <?php the_field('fax_number', 'option'); ?></p>
        </div>
      </div>
      <div class="col-sm-6">
        <?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]'); ?>
      </div>
    </div>
  </div>
</div>      
