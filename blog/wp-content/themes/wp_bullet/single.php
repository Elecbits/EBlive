<?php
/**
 * The Template for displaying all single posts
 *
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 */
global $smof_data;
get_header(); ?>
    <div id="primary" >
        <div id="content" role="main" >
        	<div class="page-wrapper">
        		<?php while ( have_posts() ) : the_post(); ?>

	                <?php get_template_part( 'single-templates/single/content', get_post_format() ); ?>

					<?php
                    
                    ?>
	                <?php comments_template( '', true ); ?>

	            <?php endwhile; // end of the loop. ?>

        	</div>
	            
        </div><!-- #content -->
    </div><!-- #primary -->
<?php get_footer(); ?>