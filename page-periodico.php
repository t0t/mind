<?php
/**
 * The template for displaying posts.
 * Template name: Periodico
 */
get_header(); ?>

<?php /* Nav extra */ get_template_part( 'partials/nav', 'extra' ); ?>
<?php /* SLIDER */ //get_template_part( 'partials/slider' ); ?>

<main class="site-main" role="main">

  <?php
    $paged = (get_query_var('page')) ? get_query_var('page') : 1;
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 8,
      'paged' => $paged
    );
    $the_query = new WP_Query($args);
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

<?php //wp_pagenavi(); ?>

    <?php if ($the_query->max_num_pages > 1) { // check if the max number of pages is greater than 1  ?>
      <nav class="prev-next-posts">
        <div class="prev-posts-link">
          <?php //echo get_next_posts_link( 'Pagina anterior', $the_query->max_num_pages ); // display older posts link ?>
        </div>
        <div class="next-posts-link">
          <?php echo get_previous_posts_link( 'Siguiente página' ); // display newer posts link ?>
        </div>
      </nav>
    <?php } ?>

    <!-- <?php next_posts_link(); ?>
    <?php previous_posts_link(); ?> -->
  	<?php /* Restore original Post Data */ wp_reset_postdata(); ?>

  <?php else : ?>
    <main class="site-main" role="main">
      <h2>There were no results that matched your request</h2>
      <?php get_search_form(); ?>
    </main>
  <?php endif; ?>


</main>

<?php get_footer(); ?>
