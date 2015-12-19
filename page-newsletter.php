<?php
/**
 * The template for Newsletter
 * Template name: Newsletter
 */
get_header(); ?>

<main class="site-main" role="main">

  <svg class="icon icon--logo6">
    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#logo6"></use>
  </svg>

  <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'content', get_post_format() ); ?>

    <!-- Begin MailChimp Signup Form -->
    <div id="mc_embed_signup">
      <form action="//mind.us12.list-manage.com/subscribe/post?u=7ed74aabd22b7874fc8208ad3&amp;id=f6bfece656" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div id="mc_embed_signup_scroll">
            <div class="mc-field-group">
              <label for="mce-FNAME">Nombre </label>
              <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
            </div>
            <div class="mc-field-group">
            	<label for="mce-EMAIL">Email </label>
            	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
            </div>
            <!-- <div class="mc-field-group">
            	<label for="mce-LNAME">Last Name </label>
            	<input type="text" value="" name="LNAME" class="" id="mce-LNAME">
            </div> -->
        	<div id="mce-responses" class="clear">
        		<div class="response" id="mce-error-response" style="display:none"></div>
        		<div class="response" id="mce-success-response" style="display:none"></div>
        	</div><!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;" aria-hidden="true">
            <input type="text" name="b_7ed74aabd22b7874fc8208ad3_f6bfece656" tabindex="-1" value="">
          </div>
          <div class="clear">
            <input type="submit" value="Suscribete" name="subscribe" id="mc-embedded-subscribe" class="button">
          </div>
          </div>
      </form>
    </div>
    <!--End mc_embed_signup-->

  <?php endwhile; ?>
  <?php else : ?>
    <?php get_template_part( 'content', 'none' ); ?>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
