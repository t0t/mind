<?php get_header(); ?>
<?php if(have_posts()): ?>
  <main class="site-main" role="main">
  <?php if (is_category( 'proyectos' )): ?>
    <h1 class="site-main__title">Proyectos</h1>
    <p>
      <?php echo category_description( get_category_by_slug('proyectos')->term_id ); ?>
    </p>
  <?php endif; ?>
    <section class="posts-wrap">
      <?php while(have_posts()): the_post(); ?>
        <div class="posts-wrap-item">
          <h2 class="title">
            <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
          </h2>
		      <small><?php the_time('l, j F, Y') ?></small>
          <?php if ( has_post_thumbnail() ) : ?>
            <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
              <figure>
                  <?php the_post_thumbnail( 'medium' ); ?>
                <figcaption></figcaption>
              </figure>
          	</a>
          <?php endif; ?>
          <div class="content">
            <?php the_excerpt(); ?>
          </div>
        </div>
      <?php endwhile; ?>

  		<div class="navigation">
  			<div class="nav-prev">
  				<?php next_posts_link('&laquo; Older Entries') ?>
  			</div>
  			<div class="nav-next">
  				<?php previous_posts_link('Newer Entries &raquo;') ?>
  			</div>
  		</div>
    </section>
  </main>

<?php else: ?>
  <main class="site-main" role="main">
    <h2>There were no results that matched your request</h2>
    <p>Do you want to search for it?</p>
    <?php get_search_form(); ?>
   </main>
<?php endif; ?>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
