<?php
/**
 * The template for displaying 404 pages (Not Found)
 * 
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<div class="page-wrapper">
				<div class="page-404">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'ERROR 404', THEMENAME ); ?></h1>
					</header>

					<div class="entry-content">
						<p><?php _e( "The Page you are looking for can't be found", THEMENAME ); ?></p>
						<p><?php _e( 'Please go Home by clicking here!', THEMENAME ); ?></p>
						<p><?php _e( 'Thank you.', THEMENAME ); ?></p>
					</div><!-- .entry-content -->
				</div>
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>