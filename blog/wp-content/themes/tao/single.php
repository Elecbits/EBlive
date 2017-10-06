<?php get_header(); ?>

<?php $sidebar_enabled = get_theme_mod('oy_sidebar_enabled', 0); ?>

	<h1 class="item-title animated-el massive">
		<?php the_title(); ?>
	</h1>
	
	<div class="group">
	
		<div class="single-post <?php echo $grid_class = ($sidebar_enabled) ? 'blog-with-sidebar' : 'blog-no-sidebar'; ?>">		
		
			<?php if(have_posts()) while (have_posts()) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class('post group'); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">
					
					<a class="date-circle" href="<?php the_permalink(); ?>" rel="bookmark">
						<time class="post-time" pubdate>
							<?php 
								$pub_date = mysql2date( __( 'd M, Y', 'Dark Knight' ), $post->post_date ); 
								list($day, $month, $year) = explode(' ', $pub_date);
							?>
							<span class="day"><?php echo $day; ?></span>
							<span class="month-and-year"><?php echo $month . ' ' . $year; ?></span>
						</time>
					</a>					
					
					<div class="post-content">	
															
						<?php if(has_post_thumbnail() ) { the_post_thumbnail(array(705, 9999)); } ?>
													
						<div class="the-content single-post-content">
							<?php the_content(); ?>
						</div><!-- /.the-content -->
						
						<?php wp_link_pages( 
						array( 'before' => '<div class="page-link"><span class="page-link-title">Pages &rarr;</span>', 'after' => '</div>', 'pagelink' => ' Page % &nbsp;' ) ); ?>
						
						<?php comments_template(); ?>
						
					</div><!-- /.post-content -->
							
				</article><!-- /.post -->
							
			<?php endwhile; ?>
		
		</div>
		<!-- /.single-post -->
		
		<?php if($sidebar_enabled) { ?>
			<?php get_sidebar('blog'); ?>
		<?php } ?>
	
	</div><!-- /.group -->
	
	<ul class="pager group">
        <li class="prev-page">
			<?php next_post_link( '%link', '&larr; %title' ); ?>
        </li>
			
		<li class="next-page">
           	<?php previous_post_link( '%link', '%title &rarr;' ); ?>        
        </li>
    </ul><!-- /.pager -->
		
<?php get_footer(); ?>