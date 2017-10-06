<?php get_header(); ?>
		
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			
		<?php $terms = get_the_terms( $post->ID , 'portfolio_category', 'string' ); ?>
		<?php $num_of_terms = count($terms); ?>
        <?php $prev_txt = __( 'Previous project', 'onioneye' ); ?>
        <?php $next_txt = __( 'Next project', 'onioneye' ); ?>
        <?php $is_pub_date_displayed = get_post_meta( $post->ID, 'onioneye_publication_date', true ); ?>
        <?php $client = get_post_meta( $post->ID, 'onioneye_client', true ); ?>
		<?php $project_url = get_post_meta( $post->ID, 'onioneye_item_url', true ); ?>
		<?php $adjacent_links = oy_get_next_and_prev_links($post->ID); ?>
		<?php $prev_link = $adjacent_links[0]; ?>
		<?php $next_link = $adjacent_links[1]; ?>
			
		<h1 class="item-title post-title massive"><?php the_title(); ?></h1>
		
		<ul class="pager group">
        	<li class="prev-page">   				  
				<?php if($prev_link) { ?>
		    	    <a class="pager-link prev-link" href="<?php echo $prev_link; ?>"><span class="arrows">&larr;</span> <?php echo $prev_txt; ?></a>   
			    <?php } else { ?>
			    	<span class="no-link"><span class="arrows">&larr;</span> <?php echo $prev_txt; ?><span>
			    <?php } ?>
            </li>
			
			<li class="next-page">
            	<?php if($next_link) { ?>
                	<a class="pager-link next-link" href="<?php echo $next_link; ?>"><?php echo $next_txt; ?> <span class="arrows">&rarr;</span></a> 
                <?php } else { ?>
			    	<span class="no-link"><?php echo $next_txt; ?> <span class="arrows">&rarr;</span><span>
			    <?php } ?>
            </li>
        </ul><!-- /.pager -->
		
		<section class="the-content single-item group">
			<?php the_content(); ?>
		</section><!-- /.single-item -->
		
		<?php 
		    $no_of_columns = 0; 
		    
		    if($is_pub_date_displayed) {
				$no_of_columns++;  
		    }
			if($terms) {
				$no_of_columns++; 	
			}
			if($client) {
				$no_of_columns++;
			}
			if($project_url) {
				$no_of_columns++;
			}
		?>
		
		<div class="project-meta group <?php echo 'oy-' . $no_of_columns . '-cols'; ?>">
	         
	        <?php if($is_pub_date_displayed) { ?>
	        
		        <div class="meta-column">
		           	<strong><?php _e( 'Date', 'onioneye' ); ?></strong>
					<p><?php echo mysql2date( __( 'F Y', 'onioneye' ), $post->post_date ); ?></p>
				</div>
			
			<?php } ?>
	          
			<?php if($terms) { ?>	
	          
	         	<div class="meta-column">
		           	<strong><?php _e( 'Skills', 'onioneye' ); ?></strong>
					<p>
						<?php 
							$i = 0;
	
							foreach($terms as $term) {
		
								if($i + 1 == $num_of_terms) {
		    						echo $term -> name;
		 						}
								else {
									echo $term -> name . ', ';
								}
									
								$i++;
							}
						?>
					</p>
				</div>
		          	
			<?php } ?>
	          
			<?php if($client) { ?>
				<div class="meta-column">
		       		<strong><?php _e( 'Client', 'onioneye' ); ?></strong>
			  		<p><?php echo $client; ?></p> 
			  	</div>
		  	<?php } ?>
	          
		  	<?php if($project_url) { ?>
			  	<div class="meta-column">
		           	<a class="url-button" href="<?php echo esc_url($project_url); ?>"><?php _e( 'Visit site', 'onioneye' ); ?></a> 
				</div>
			<?php } ?>
	          
		</div><!-- /.project-meta -->
		
		<ul class="pager group">
        	<li class="prev-page">   				  
				<?php if($prev_link) { ?>
		    	    <a class="pager-link prev-link" href="<?php echo $prev_link; ?>"><span class="arrows">&larr;</span> <?php echo $prev_txt; ?></a>   
			    <?php } else { ?>
			    	<span class="no-link"><span class="arrows">&larr;</span> <?php echo $prev_txt; ?><span>
			    <?php } ?>
            </li>
			
			<li class="next-page">
            	<?php if($next_link) { ?>
                	<a class="pager-link next-link" href="<?php echo $next_link; ?>"><?php echo $next_txt; ?> <span class="arrows">&rarr;</span></a> 
                <?php } else { ?>
			    	<span class="no-link"><?php echo $next_txt; ?> <span class="arrows">&rarr;</span><span>
			    <?php } ?>
            </li>
        </ul><!-- /.pager -->
        
    <?php endwhile; ?>
    				
<?php get_footer(); ?>