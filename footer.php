<?php
/**
 * footer.php
 *
 * The template for displaying the footer.
 */
?>
<?php get_sidebar( 'footer' ); ?>
	<footer class="main-footer">
		<p>
			&copy; <?php echo date( 'Y' ); ?>
			<a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a>
			<?php _e( 'All rights reserved.', 'alpha' ); ?>
		</p>
		<?php edit_post_link( __( 'Edit', 'alpha' ), '{{ ', ' }}' ); ?>
	</footer> <!-- end site-footer -->
	<?php wp_footer(); ?>
</body>
</html>
