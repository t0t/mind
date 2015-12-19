<?php get_header(); ?>

  <?php //the_category(); ?>

  <main class="site-main" role="main">

    <?php if ( in_category( 'proyectos' ) ): ?>
      <h1 class="site-main__title">Proyectos</h1>
    <?php elseif ( in_category( 'notas' ) ): ?>
      <h1 class="site-main__title">Notas</h1>
    <?php elseif ( in_category( 'cosas' ) ): ?>
      <h1 class="site-main__title">Cosas</h1>
    <?php endif; ?>

      <?php while( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', get_post_format() ); ?>

        <footer class="posts-meta">
          <?php //the_tags('Tags: ') ?>
          <?php //the_category(', ') ?>
          <div class="posts-nav">
            <div class="nav-prev"><?php previous_post_link('&laquo; %link') ?></div>
            <div class="nav-next"><?php next_post_link('%link &raquo;') ?></div>
          </div>
        </footer>

      <?php endwhile; ?>

  </main>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
