<?php
/**
 * The template for displaying posts.
 * Template name: Periodico
 */
get_header(); ?>

<?php
  /* Nav extra */ get_template_part( 'partials/nav', 'extra' );
?>

<?php
  /* SLIDER */ get_template_part( 'partials/slider' );
?>

<main class="site-main" role="main">

  <?php
    // paging variable
    // $paged = (get_query_var('page')) ? get_query_var('page') : 1;
    // if ( get_query_var( 'paged' ) ) { $paged = get_query_var( 'paged' ); }
    // elseif ( get_query_var( 'page' ) ) { $paged = get_query_var( 'page' ); }
    // else { $paged = 1; }

    // the arguments
    $args = array(
      'post_type' => 'post',
      // 'category__in' => array( 3 ),
      // 'order' => 'DESC',
      'post_per_page' => 5,
      'paged' => $paged,
      'showposts' => 5
    );
    $the_query = new WP_Query($args);
    // $the_query = new WP_Query( $args );
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


    <?php next_posts_link(); ?>
    <?php previous_posts_link(); ?>
  	<?php /* Restore original Post Data */ wp_reset_postdata(); ?>


  <?php else : ?>
    <main class="site-main" role="main">
      <h2>There were no results that matched your request</h2>
      <?php get_search_form(); ?>
    </main>
  <?php endif; ?>




    <?php
    $temp = $wp_query;
    $wp_query= null;
    $wp_query = new WP_Query();
    $wp_query->query('showposts=2'.'&paged='.$paged);
    ?>
    <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
    	<a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a>
    <?php endwhile; ?>
    <?php previous_posts_link('&laquo; Previous') ?>
    <?php next_posts_link('More &raquo;') ?>

    <?php $wp_query = null; $wp_query = $temp;?>


</main>

<?php get_footer(); ?>
