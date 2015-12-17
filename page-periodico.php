<?php
/**
 * The template for displaying posts.
 * Template name: Periodico
 */
get_header(); ?>

<main class="site-main" role="main">

  <?php if ( have_posts() ) : while( have_posts() ) : the_post(); ?>

    <nav class="site-nav" role="navigation">
      <?php
        wp_nav_menu( array(
          'theme_location'  => 'extra-menu',
          'container'       => '',
          'menu_class'      => 'site-nav__main'
        ));
      ?>
    </nav>

    <?php
      /* SLIDER */
      get_template_part('partials/slider');
    ?>

    <?php get_template_part( 'content', get_post_format() ); ?>

    <svg class="icon icon--email">
      <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#email"></use>
    </svg>

  <?php endwhile; ?>
  <?php else : ?>
    <?php get_template_part( 'content', 'none' ); ?>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
