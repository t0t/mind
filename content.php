<?php
  /**
   * content.php
   * The default template for displaying content.
   */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
	<div class="entry__content">
    <?php /* Bloques */ if (have_rows('layouts')): ?>
    	<?php while (have_rows('layouts')): the_row(); ?>

    		<?php /* Layout tipo 1 */ if (get_row_layout() == 'layout1'): ?>
      		<?php if (have_rows('div')): ?>
        		<?php while (have_rows('div')): the_row(); ?>
        		<div class="main-post__content">
          		<?php if /* Main post content */ (get_sub_field("content")): ?>
            		<article class="main-post__content__entry" role="article">
              		<?php /* Header image */ if (get_sub_field("header_image")) { ?>
              		  <figure><img src="<?php the_sub_field("header_image"); ?>" alt=""></figure>
              		  <?php } else { ?>
              		<?php } ?>
              		<?php /* Header video */ if (get_sub_field("header_video")) { ?>
              		  <?php the_sub_field("header_video"); ?>
              		<?php } ?>
                  <h1 class="entry__title"><?php the_title(); ?></h1>
                  <?php /* The post content */ the_sub_field("content"); ?>
            		</article>

                <!-- https://codex.wordpress.org/Function_Reference/get_query_var -->
                <?php //echo do_shortcode('<!--nextpage-->'); ?>

          		<?php endif; /* End Main post content */ ?>
        		</div>
        		<?php endwhile; ?>
      		<?php endif ?>
    		<?php /* End Layout 1 */ endif; ?>

        <?php /* Layout tipo 2 */ if (get_row_layout() == 'layout2'): ?>
      		<?php if (have_rows('div')): ?>
        		<?php while (have_rows('div')): the_row(); ?>
        		<div class="main-post__content">
          		<?php if /* Main post content */ (get_sub_field("content")): ?>
            		<article class="main-post__content__entry" role="article">
              		<?php /* Header image */ if (get_sub_field("header_image")) { ?>
                    <div class="two-cols">
                      <figure><img src="<?php the_sub_field("header_image"); ?>" alt=""></figure>
                      <figure><img src="<?php the_sub_field("header_image_2"); ?>" alt=""></figure>
                    </div>
              		  <?php } else { ?>
              		<?php } ?>
                  <h1 class="entry__title"><?php the_title(); ?></h1>
                  <?php /* The post content */ the_sub_field("content"); ?>
            		</article>
          		<?php endif; /* End Main post content */ ?>
        		</div>
        		<?php endwhile; ?>
      		<?php endif ?>
    		<?php /* End Layout 1 */ endif; ?>

    	<?php /* End Layouts */ endwhile; ?>
    	<?php else: ?>
    <?php
    /* /bloques */
    endif; ?>


    <?php
			// if ( is_search() ) {
			// 	the_excerpt();
			// } else {
			// 	the_content( __( 'Continue reading &rarr;', 'alpha' ) );
			// 	wp_link_pages();
			// }
		?>
	</div>

	<footer class="entry__footer">
		<?php
			// If we have a single page and the author bio exists, display it
			if ( is_single() && get_the_author_meta( 'description' ) ) {
				echo '<h2>' . __( 'Written by ', 'alpha' ) . get_the_author() . '</h2>';
				echo '<p>' . the_author_meta( 'description' ) . '</p>';
			}
		?>
	</footer>
</article>
