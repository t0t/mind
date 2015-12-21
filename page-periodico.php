<?php
/**
 * The template for displaying posts.
 * Template name: Periodico
 */
get_header(); ?>

<?php
  /* Nav extra */
  get_template_part( 'partials/nav', 'extra' );
?>

<?php
  /* SLIDER */
  get_template_part( 'partials/slider' );
?>

<main class="site-main" role="main">

  <?php
    $args = array(
      'post_type' => 'post',
      'post_per_page' => 5,
      'showposts' => 6
    );
    $the_query = new WP_Query( $args );
  ?>
  <?php if ( $the_query->have_posts() ) : ?>

    <section class="posts-wrap">

      <h1 class="posts-wrap__title"><?php the_title(); ?></h1>

    	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>

        <article class="posts-wrap__item">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php if ( has_post_thumbnail() ) : ?>
              <figure class="posts-wrap-figure">
                <?php the_post_thumbnail( 'medium' ); ?>
                <figcaption class="posts-wrap-figcaption"><?php the_title(); ?></figcaption>
              </figure>
            <?php endif; ?>
            <p class="posts-wrap__excerpt"><?php the_excerpt(); ?></p>
          </a>
        </article>

    	<?php endwhile; ?>

    </section>

  	<?php /* Restore original Post Data */ wp_reset_postdata(); ?>

  <?php else : ?>
    <main class="site-main" role="main">
      <h2>There were no results that matched your request</h2>
      <?php get_search_form(); ?>
     </main>
  <?php endif; ?>

</main>

<?php get_footer(); ?>
