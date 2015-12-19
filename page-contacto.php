<?php
/**
 * The template for displaying posts.
 * Template name: Contacto
 */
get_header(); ?>

<main class="site-main" role="main">

  <svg class="icon icon--logo5">
    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#logo5"></use>
  </svg>

  <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>
    <?php get_template_part( 'content', get_post_format() ); ?>
    <?php echo do_shortcode( '[contact-form-7 id="55" title="Contact form 1"]' ); ?>
  <?php endwhile; ?>
  <?php else : ?>
    <?php get_template_part( 'content', 'none' ); ?>
  <?php endif; ?>
</main>

<?php get_footer(); ?>
