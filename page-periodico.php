<?php
/**
 * The template for displaying posts.
 * Template name: Periodico
 */
get_header(); ?>

<?php
  wp_nav_menu( array(
    'theme_location'  => 'extra-menu',
    'container'       => '',
    'menu_class'      => 'site-nav__extra'
  ));
?>

<?php
  /* SLIDER */
  get_template_part('partials/slider');
?>

<main class="site-main" role="main">

  <?php
    $args = array(
      'post_type' => 'post',
      'post_per_page' => 4,
    );
    $the_query = new WP_Query( $args );
  ?>
  <?php if ( $the_query->have_posts() ) : ?>
    <section>
      <h1><?php the_title(); ?></h1>
    	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <article class="slider__slides__slide">
          <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
              <?php the_post_thumbnail( 'large' ); ?>
            </a>
          <?php endif; ?>
          <h2><?php the_title(); ?></h2>
          <p>
            <?php the_excerpt() ?>
          </p>
        </article>
    	<?php endwhile; ?>
    </section>
  	<?php /* Restore original Post Data */ wp_reset_postdata(); ?>
  <?php else : ?>
  	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
