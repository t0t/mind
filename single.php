<?php get_header(); ?>
  <main class="site-main" role="main">
      <?php while( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'content', get_post_format() ); ?>
        <footer class="posts-meta">
          <?php the_tags('Tags: ') ?>.
          Category: <?php the_category(', ') ?>. <?php the_time('l, j F, Y') ?>
          <div class="posts-nav">
            <div class="nav-prev"><?php previous_post_link('&laquo; %link') ?></div>
            <div class="nav-next"><?php next_post_link('%link &raquo;') ?></div>
          </div>
        </footer>
      <?php endwhile; ?>
  </main>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
