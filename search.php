<?php
/**
 * The template for displaying search results pages.
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 * @package alpha
 */

get_header(); ?>

	<main class="site-main" role="main">

    <?php if ( have_posts() ) : ?>
			
			<header class="site-header">
				<h1 class="site-title">
          <?php printf( esc_html__( 'Resultados búsqueda: %s', 'alpha' ), '<span>' . get_search_query() . '</span>' ); ?>
        </h1>
			</header>

			<?php
			while ( have_posts() ) : the_post();
				get_template_part( 'partials/content', 'search' );
			endwhile;
				the_posts_navigation();
			else :
				get_template_part( 'partials/content', 'none' );
			endif;
			?>

	</main>

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
