<?php
/**
 * footer.php
 * The template for displaying the footer.
 */
?>

	<footer class="main-footer">

    <header>
      <h4 class="main-footer__title"><?php bloginfo( 'name' ); ?></h4>
    </header>

      <?php
        wp_nav_menu( array(
          'theme_location'  => 'secondary-menu',
          'menu_class'      => 'main-footer__nav '
        ));
      ?>

		<p class="main-footer__credits">
      <svg class="icon icon--cc">
        <use xlink:href="<?php echo get_template_directory_uri(); ?>/assets/icons/icons.svg#cc">
      </svg>
      <?php echo date( 'Y' ); ?> - <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
		</p>

		<?php edit_post_link( __( 'Edit', 'alpha' ), '{{ ', ' }}' ); ?>

	</footer>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){ (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*newDate();a=s.createElement(o),m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m) })(window,document,'script','//www.google-analytics.com/analytics.js ','ga');
    ga('create', 'UA-71611514-1', 'auto');
    ga('send', 'pageview');
  </script>
	<?php wp_footer(); ?>
</body>
</html>
