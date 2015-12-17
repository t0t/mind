<?php
  /**
   * content.php
   * The default template for displaying content.
   */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class('entry'); ?>>
	<div class="entry__content">
		<h1 class="entry__title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
		<?php
			if ( is_search() ) {
				the_excerpt();
			} else {
				the_content( __( 'Continue reading &rarr;', 'alpha' ) );
				wp_link_pages();
			}
		?>
	</div>
  <?php
  /* Header */
  if ( has_post_thumbnail() && ! post_password_required() ) : ?>
   <header class="entry__header">
      <figure class="entry__thumbnail"><?php the_post_thumbnail(); ?></figure>
   </header>
  <?php endif; ?>

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
