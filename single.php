<?php get_header(); ?>

  <?php //the_category(); ?>

  <?php
  /* Nav extra */
  get_template_part( 'partials/nav', 'extra' );
  ?>

  <main class="site-main" role="main">

    <?php //if ( in_category( 'proyectos' ) ): ?>
      <!-- <h1 class="site-main__title">Proyectos</h1> -->
    <?php //elseif ( in_category( 'notas' ) ): ?>
      <!-- <h1 class="site-main__title">Notas</h1> -->
    <?php //elseif ( in_category( 'cosas' ) ): ?>
      <!-- <h1 class="site-main__title">Cosas</h1> -->
    <?php //endif; ?>

      <?php while( have_posts() ) : the_post(); ?>

        <?php get_template_part( 'content', get_post_format() ); ?>

        <footer class="posts-meta">
          <div class="widget widget--share">


            <div class="share">
              <a href="http://www.facebook.com/share.php?u=<?php print(urlencode(get_permalink())); ?>&title=<?php print(urlencode(the_title())); ?>" class="ico ico-fb">FaceBook Share</a>
              <a href="http://twitter.com/home?status=<?php print(urlencode(the_title())); ?>+<?php print(urlencode(get_permalink())); ?>%20" class="ico ico-tw">Tweet</a>
            </div>


            <a class="js-social-share" href="http://www.facebook.com/share.php?u=<?php print(urlencode(get_permalink())); ?>&title=<?php print(urlencode(the_title())); ?>">
              <svg class="icon icon--facebook">
        				<use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#facebook"></use>
        			</svg>
            </a>
        		<a class="js-social-share" href="https://twitter.com/intent/tweet/?text=<?php bloginfo('title'); ?>&url=http%3A<?php the_permalink(); ?>">
              <svg class="icon icon--twitter">
      			    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#twitter"></use>
        		  </svg>
        		</a>
        		<a class="js-social-share" target="_new" href="mailto:?subject=<?php print(urlencode(get_permalink())); ?>&body=Check out this article I came across <?php print(urlencode(get_permalink())); ?>">
              <svg class="icon icon--email">
      			    <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#email"></use>
        		  </svg>
        		</a>

            <!-- https://www.addtoany.com/services/email_button -->
            <!-- <script type="text/javascript" src="//static.addtoany.com/menu/page.js"></script> -->

        	</div>

          <?php //the_tags('Tags: ') ?>
          <?php //the_category(', ') ?>
          <!-- <div class="posts-nav">
            <div class="nav-prev"><?php previous_post_link('&laquo; %link') ?></div>
            <div class="nav-next"><?php next_post_link('%link &raquo;') ?></div>
          </div> -->
        </footer>

      <?php endwhile; ?>

  </main>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
