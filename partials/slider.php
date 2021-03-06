
<aside class="slider">

  <input type='radio' name='slider' id='slide1' checked />
  <input type='radio' name='slider' id='slide2'/>
  <input type='radio' name='slider' id='slide3'/>
  <input type='radio' name='slider' id='slide4'/>
  <input type='radio' name='slider' id='slide5'/>

  <?php
    $args = array(
      'post_type' => 'post',
      'meta_key'  => 'is_slide',
      'meta_value'  => true,
      'showposts' => 5
    );
    $the_query = new WP_Query( $args );
  ?>

  <?php if ( $the_query->have_posts() ) : ?>
      <div class="slider__slides">
        <div class="inner">
        	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
            <figure class="slider__slides__slide">
              <?php if( get_field('img_slider') ): ?>
                <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
                  <?php
                    $image = get_field('img_slider');
                    $size = 'large'; // (thumbnail, medium, large, full or custom size)
                    if( $image ) { echo wp_get_attachment_image( $image, $size ); }
                  ?>
                </a>
              <?php endif; ?>
            </figure>
        	<?php endwhile; ?>
        </div>
      </div>
  	<?php /* Restore original Post Data */ wp_reset_postdata(); ?>
  <?php else : ?>
  	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

  <div class="slider__nav">
  	<label for='slide1'><svg class="icon icon--arrow-right"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#arrow-right"></svg></label>
  	<label for='slide2'><svg class="icon icon--arrow-right"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#arrow-right"></svg></label>
  	<label for='slide3'><svg class="icon icon--arrow-right"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#arrow-right"></svg></label>
  	<label for='slide4'><svg class="icon icon--arrow-right"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#arrow-right"></svg></label>
  	<label for='slide5'><svg class="icon icon--arrow-right"><use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#arrow-right"></svg></label>
  </div>
  <div class="slider__dots">
  	<label for='slide1'></label>
  	<label for='slide2'></label>
  	<label for='slide3'></label>
  	<label for='slide4'></label>
  	<label for='slide5'></label>
  </div>
</aside>
