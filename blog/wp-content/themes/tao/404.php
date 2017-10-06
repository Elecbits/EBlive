<?php get_header(); ?>

	<h1 class="item-title animated-el massive">
		<?php _e('404 Page Not Found', 'onioneye'); ?>
	</h1>
		
	<p><?php _e('Apologies, but the page you requested could not be found. Perhaps searching will help.', 'onioneye'); ?></p>
			
	<div id="not-found-form">
		<?php get_search_form(); ?>
	</div>

<?php get_footer(); ?>