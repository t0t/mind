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
  			<svg class="icon">
  				<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#icon-facebook"></use>
  			</svg> Facebook</a>
  		<a href="mailto:flavio.casafibra@gmail.com">
  			<svg class="icon">
  			 <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#icon-envelope"></use>
  		</svg> Contacto</a>
  	</div>

  <?php endwhile; ?>
  <?php else : ?>
    <?php get_template_part( 'content', 'none' ); ?>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
