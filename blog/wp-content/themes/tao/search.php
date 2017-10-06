<?php get_header(); ?>

	<h1 class="animated-el huge item-title"><?php printf( __( 'Search Results for &ldquo;%s&rdquo;', 'onioneye' ), get_search_query()); ?></h1>
	
	<div class="search-results group">

		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
			
			<h2 class="search-post-title post-title">
				<a href="<?php the_permalink(); ?>" rel="bookmark" title="<?php printf( __( 'Permanent Link to %s', 'onioneye' ), get_the_title() ); ?>">
					<?php the_title(); ?>
				</a>
			</h2>
		
		<?php endwhile; ?>
		
		<?php else: ?>
	
			<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'onioneye' ); ?></p>
			<?php get_search_form(); ?>
			
		<?php endif; ?>
		
	</div><!-- /.search-results -->
	
<?php get_footer(); ?>