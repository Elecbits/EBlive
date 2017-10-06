<?php
/*
Template Name: Page with Sidebar
*/
?>
<?php get_header(); ?>
	
	<?php if ( have_posts() ) : while ( have_posts()) : the_post(); ?>
	
		<h1 class="item-title animated-el massive">
			<?php the_title(); ?>
		</h1>
		
		<section class="page-content the-content group">
			<?php the_content(); ?>
		</section>
		
		<?php get_sidebar(); ?>
		
	<?php endwhile; endif; ?>
	
<?php get_footer(); ?>