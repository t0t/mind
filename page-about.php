<?php
/**
 * The template for page About.
 * Template name: About
 */
get_header(); ?>

<main class="site-main" role="main">

  <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <?php get_template_part( 'content', get_post_format() ); ?>

    <div class="widget widget--social">
  		<a href="https://www.facebook.com/holamind/" target="_blank">
  			<svg class="icon icon--facebook">
  				<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#facebook"></use>
  			</svg>
        /holamind
      </a>
  		<a href="mailto:flavio.casafibra@gmail.com">
  			<svg class="icon icon--twitter">
			    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#twitter"></use>
  		  </svg>
        @holamind
      </a>
  	</div>

  <?php endwhile; ?>
  <?php else : ?>
    <?php get_template_part( 'content', 'none' ); ?>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
