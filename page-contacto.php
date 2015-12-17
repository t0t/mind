<?php
/**
 * The template for displaying posts.
 * Template name: Contacto
 */
get_header(); ?>
<main class="site-main" role="main">
  <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', get_post_format() ); ?>
    <?php echo do_shortcode( '[contact-form-7 id="4" title="Formulario de contacto 1"]' ); ?>
  <?php endwhile; ?>
  <?php else : ?>
    <?php get_template_part( 'content', 'none' ); ?>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
