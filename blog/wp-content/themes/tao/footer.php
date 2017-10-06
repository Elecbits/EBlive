<?php $facebook_url = get_theme_mod('oy_facebook', ''); ?>		
<?php $twitter_url = get_theme_mod('oy_twitter', ''); ?>		
<?php $googleplus_url = get_theme_mod('oy_googleplus', ''); ?>		
<?php $pinterest_url = get_theme_mod('oy_pinterest', ''); ?>		
<?php $instagram_url = get_theme_mod('oy_instagram', ''); ?>		
<?php $youtube_url = get_theme_mod('oy_youtube', ''); ?>		
<?php $vimeo_url = get_theme_mod('oy_vimeo', ''); ?>			
<?php $is_social_existent = ($facebook_url || $twitter_url || $googleplus_url || $pinterest_url || $instagram_url || $youtube_url || $vimeo_url) ? 1 : 0; ?>		
		
				</div><!-- /.main-content --> 
			
				<footer class="footer group <?php if($is_social_existent) { ?>multi-columned<?php } ?>">
										
					<?php if($is_social_existent) { ?>
						<ul class="social-networks">
							<?php if($facebook_url) { ?>
								<li><a target="_blank" class="facebook-link" href="<?php echo esc_url($facebook_url); ?>" title="<?php __('FaceBook', 'onioneye'); ?>"></a></li>
							<?php } ?>
							<?php if($twitter_url) { ?>
								<li><a target="_blank" class="twitter-link" href="<?php echo esc_url($twitter_url); ?>" title="<?php __('Twitter', 'onioneye'); ?>"></a></li>
							<?php } ?>
							<?php if($googleplus_url) { ?>
								<li><a target="_blank" class="googleplus-link" href="<?php echo esc_url($googleplus_url); ?>" title="<?php __('Google Plus', 'onioneye'); ?>"></a></li>
							<?php } ?>
							<?php if($pinterest_url) { ?>
								<li><a target="_blank" class="pinterest-link" href="<?php echo esc_url($pinterest_url); ?>" title="<?php __('Pinterest', 'onioneye'); ?>"></a></li>
							<?php } ?>
							<?php if($instagram_url) { ?>
								<li><a target="_blank" class="instagram-link" href="<?php echo esc_url($instagram_url); ?>" title="<?php __('Instagram', 'onioneye'); ?>"></a></li>
							<?php } ?>
							<?php if($youtube_url) { ?>
								<li><a target="_blank" class="youtube-link" href="<?php echo esc_url($youtube_url); ?>" title="<?php __('YouTube', 'onioneye'); ?>"></a></li>
							<?php } ?>
							<?php if($vimeo_url) { ?>
								<li><a target="_blank" class="vimeo-link" href="<?php echo esc_url($vimeo_url); ?>" title="<?php __('Vimeo', 'onioneye'); ?>"></a></li>
							<?php } ?>
						</ul><!-- /.social-networking -->	
					<?php } ?>
								
					<p>
						<small><?php printf(__('&copy; %1$s %2$s. All rights reserved.', 'onioneye'), date("Y"), get_bloginfo('name')); ?></small>
					</p>
				
				</footer><!-- ./footer -->
		
			</div><!-- /.main-container -->
		
			</div><!-- /.padding-container -->
		</div><!-- /.hide-overflow -->
	</div><!-- /.contents -->
		
	<!-- wordpress footer functions -->
	<?php wp_footer(); ?>
	<!-- end of wordpress footer -->	

	</body>
</html>