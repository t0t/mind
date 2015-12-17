<?php
/**
 * The template for displaying products.
 * Template name: Productos
 */
get_header(); ?>
<main class="site-main" role="main">
  <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', get_post_format() ); ?>
  <?php endwhile; ?>
  <?php else : ?>
    <?php get_template_part( 'content', 'none' ); ?>
  <?php endif; ?>
</main>
<?php get_footer(); ?>
