<?php get_header(); ?>

<?php /* Nav extra */ get_template_part( 'partials/nav', 'extra' ); ?>
<?php /* SLIDER */ get_template_part( 'partials/slider' ); ?>

<?php if( have_posts() ): ?>

  <main class="site-main" role="main">
    <section class="posts-wrap">

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
          <p class="posts-wrap__excerpt">
            <?php the_excerpt(); ?>
            <p class="readmore">Leer más &raquo;</p>
          </p>
        </a>
      </article>

    <?php endwhile; ?>

  </section>

	<ul class="pagination">
    <li class="pagination__prev">
      <?php if( get_previous_posts_link() ) : ?>
        <svg class="icon icon--arrow-left">
          <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#arrow-left">
        </svg>
        <?php previous_posts_link('Página Anterior'); ?>
      <?php endif; ?>
    </li>
		<li class="pagination__next">
      <?php if( get_next_posts_link() ) : ?>
  			<?php next_posts_link('Próxima página'); ?>
        <svg class="icon icon--arrow-right">
          <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#arrow-right">
        </svg>
      <?php endif; ?>
		</li>
	</ul>

</main>

<?php else : ?>
  <main class="site-main" role="main">
    <h2>There were no results that matched your request</h2>
    <?php get_search_form(); ?>
   </main>
<?php endif; ?>


<?php get_footer(); ?>
