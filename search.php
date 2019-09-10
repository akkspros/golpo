<?php
/**
 * The template for displaying search results pages.
 * 
 * User Profile: https://profiles.wordpress.org/fahimmurshed
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Golpo
 */

get_header(); ?>

	<div class="container">
		<div class="row">
			<section id="primary" class="content-area col-md-8">
				<main id="main" class="site-main" role="main">
			
				<?php if ( have_posts() ) : ?>
			
					<header class="page-header">
					<?php /* translators: %s: search term */ ?>
						<h2 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'golpo' ), '<span>' . get_search_query() . '</span>' ); ?></h2>
					</header><!-- .page-header -->
			
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>
			
						<?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/content', 'search' );
						?>
			
					<?php endwhile; ?>
			
					<?php the_posts_navigation(); ?>
			
				<?php else : ?>
			
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
			
				<?php endif; ?>
			
				</main><!-- #main -->
			</section><!-- #primary -->

			<?php get_sidebar(); ?>
			
		</div>
	</div>


<?php get_footer(); ?>