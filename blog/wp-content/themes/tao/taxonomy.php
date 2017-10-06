<?php get_header(); ?>

	<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

	<h1 class="item-title animated-el massive">
		<?php echo $term -> name; ?>
	</h1>
	
	<?php get_template_part('includes/portfolio'); ?>			    			
	
<?php get_footer(); ?>
