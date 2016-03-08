<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
<?php
  if ( has_post_thumbnail() ) {
    the_post_thumbnail();
  }
  else {
    echo '<img src="' . get_bloginfo( 'stylesheet_directory' )
      . '/assets/img/not-available.png" />';
  }
?>
<?php the_excerpt(); ?>
