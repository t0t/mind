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
			<?php echo date( 'Y' ); ?> - <a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
		</p>

		<?php edit_post_link( __( 'Edit', 'alpha' ), '{{ ', ' }}' ); ?>

	</footer>

	<?php wp_footer(); ?>
</body>
</html>
