<?php get_header(); ?>

<?php
  /* Nav extra */
  get_template_part( 'partials/nav', 'extra' );
?>

<?php if( have_posts() ): ?>

  <main class="site-main" role="main">

    <section class="posts-wrap">

      <?php if ( is_category( 'proyectos' ) ): ?>
        <h1 class="posts-wrap__title">Proyectos </h1>
      <?php elseif ( is_category( 'notas' ) ): ?>
        <h1 class="posts-wrap__title">Notas </h1>
      <?php elseif ( is_category( 'cosas' ) ): ?>
        <h1 class="posts-wrap__title">Cosas </h1>
      <?php endif; ?>

      <?php while( have_posts() ): the_post(); ?>

        <article class="posts-wrap__item">
          <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
            <?php if ( has_post_thumbnail() ) : ?>
              <figure class="posts-wrap-figure">
                <?php the_post_thumbnail( 'medium' ); ?>
                <figcaption class="posts-wrap-figcaption">
                  <?php the_title(); ?>
                </figcaption>
              </figure>
            <?php endif; ?>
            <p class="posts-wrap__excerpt"><?php the_excerpt(); ?></p>
          </a>
        </article>

      <?php endwhile; ?>

    </section>

    <?php /* SLIDER */ get_template_part( 'partials/paginacion' ); ?>

  </main>

  <?php else : ?>
    <main class="site-main" role="main">
      <h2>There were no results that matched your request</h2>
      <?php get_search_form(); ?>
     </main>
  <?php endif; ?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
