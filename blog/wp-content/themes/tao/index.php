<?php get_header(); ?>

<?php 
	$sidebar_enabled = get_theme_mod('oy_sidebar_enabled', 0); 
	$post_type = get_theme_mod('oy_post_content', 'excerpt'); //get the post type; excerpt or full post.
?>	

	<h1 class="item-title animated-el massive">
		<?php single_post_title(); ?>
	</h1>
	
	<div class="group">

		<div class="blog-posts <?php echo $grid_class = ($sidebar_enabled) ? 'blog-with-sidebar' : 'blog-no-sidebar'; ?>">		
		
			<?php if (have_posts()) while (have_posts()) : the_post(); ?>
				
				<article id="post-<?php the_ID(); ?>" <?php post_class('post group'); ?>>
					
					<a class="date-circle" href="<?php the_permalink(); ?>" rel="bookmark">
						<time class="post-time" pubdate>
							<?php 
								$pub_date = mysql2date( __( 'd M, Y', 'onioneye' ), $post->post_date ); 
								list($day, $month, $year) = explode(' ', $pub_date);
							?>
							<span class="day"><?php echo $day; ?></span>
							<span class="month-and-year"><?php echo $month . ' ' . $year; ?></span>
						</time>
					</a>
										
					<div class="post-content">	
						<h2>
							<a href="<?php the_permalink(); ?>" class="post-title-link" rel="bookmark" 
							title="<?php printf( __( 'Permanent Link to %s', 'onioneye' ), get_the_title()); ?>"><?php the_title(); ?>
							</a>
						</h2>
							
						<a href="<?php the_permalink(); ?>" rel="bookmark" class="featured-img-link group">				
							<?php if(has_post_thumbnail()) { the_post_thumbnail(array(705, 9999)); } ?>
						</a>
						
						<ul class="additional-post-meta group">
							
							
							<?php edit_post_link( __('Edit', 'onioneye'), '<li class="edit-post">&nbsp;&nbsp; &#8226; &nbsp;&nbsp;', '</li>' ); // Display the edit link, if logged in ?>
						</ul><!-- /.additional-post-meta -->
							
						<div class="excerpt-content">
							<?php if( $post_type === 'excerpt' || !$post_type) { the_excerpt(); } else { the_content( __( 'Read the Rest', 'onioneye' ) ); } ?>
						</div><!-- /.excerpt-content -->
					</div><!-- /.post-content -->
							
				</article><!-- /.post -->
							
			<?php endwhile; ?>
		
		</div><!-- /.blog-posts -->
		
		<?php if($sidebar_enabled) { ?>
			<?php get_sidebar( 'blog' ); ?>
		<?php } ?>
	
	</div><!-- /.group -->
	
	<ul class="pager group">
        <li class="prev-page">
			<?php next_posts_link( __('&larr; Older Entries', 'onioneye' ) ); ?>
        </li>
			
		<li class="next-page">
           	<?php previous_posts_link( __( 'Newer Entries &rarr;', 'onioneye' ) ); ?> 
        </li>
    </ul><!-- /.pager -->
	
<?php get_footer(); ?>