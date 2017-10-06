<!DOCTYPE html>
<!--[if (IE 8)&!(IEMobile)]> <html <?php language_attributes(); ?> class="no-js ie8 oldie"> <![endif]-->
<!--[if(IE 9)&!(IEMobile)]> <html <?php language_attributes(); ?> class="no-js ie9 oldie"> <![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)|!(IEMobile)|!(IE)]><!--><html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>"/>
	
	<!-- title -->	
	<title>
		<?php
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;
		wp_title( '-', true, 'right' );
		// Add the blog name.
		bloginfo( 'name' );
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' - ' . sprintf( __( 'Page %s', 'onioneye' ), max( $paged, $page ) );
		?>
	</title>
	
	<!-- meta tags -->	
	<meta name="description" content="<?php bloginfo( 'description' ); ?>" />
	<meta name="author" content="OnionEye">
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
			
  	<!-- RSS and pingback -->
  	<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">
  	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
		
	<!-- wordpress head functions -->
	<?php wp_head(); ?>
	<!-- end of wordpress head -->	
</head>

<body <?php body_class(); ?>>

	<?php $tagline = get_option('blogdescription', ''); ?>
	<?php $main_logo_url = get_theme_mod('oy_logo', ''); ?>
	<?php $secondary_logo_url = get_theme_mod('oy_secondary_logo', ''); ?>
	<?php $is_logo_retina = get_theme_mod('oy_is_logo_retina', ''); ?>
	<?php $email = get_theme_mod('oy_email', ''); ?>
	<?php $telephone = get_theme_mod('oy_telephone', ''); ?>
	<?php $address = get_theme_mod('oy_address', ''); ?>
					
	<?php // Display the main menu and the page content area, if the menu is selected in the theme locations box ?>
	<?php if (($locations = get_nav_menu_locations()) && $locations[ 'main' ]) { ?>
						
		<div class="menu-container scrollable">
			
			<div class="secondary-logo-container">
				<a class="secondary-logo-link" href="<?php echo esc_url( home_url( '/' ) ); ?>">
							
					<?php if($secondary_logo_url && $is_logo_retina) { ?>
								
						<?php 
							$image_details = wp_get_attachment_image_src( oy_get_attachment_id_from_src( $secondary_logo_url ), 'full');
										
							// If the dimensions of the image are correctly returned, calculate half of its width and height. 
							if($image_details[1] && $image_details[2]) { 
								$image_half_width = round($image_details[1] / 2);
								$image_half_height = round($image_details[2] / 2);
							}
						?>
						
						<img src="<?php echo $secondary_logo_url; ?>" alt="<?php esc_attr_e( 'Site Logo', 'onioneye' ); ?>" 
						width="<?php echo $image_half_width; ?>" height="<?php echo $image_half_height ?>">
									
					<?php } else if($secondary_logo_url) { ?>
								
						<img src="<?php echo $secondary_logo_url; ?>" alt="<?php esc_attr_e( 'Site Logo', 'onioneye' ); ?>">
									
					<?php } else { ?>
								
						<?php echo get_option( 'blogname' ); ?>
									
					<?php } ?>
								
				</a><!-- /.secondary-logo-link -->
				
			</div><!-- /.secondary-logo-container -->
													
			<?php wp_nav_menu( array( 'theme_location' => 'main', 'container' => 'nav', 'menu' => 'custom_menu', 'container_class' => 'group', 'depth' => 2, 'walker' => new Nfr_Menu_Walker() ) ); ?>
									
		</div><!-- /.menu-container --> 
			
		<div class="menu-indicator"><span></span></div>
								
	<?php } ?>
				
	<div class="contents scrollable">
		<div class="hide-overflow">
			<div class="padding-container">
		
			<?php if(($locations = get_nav_menu_locations()) && $locations[ 'main' ]) { ?>
				<div class="alt-menu-pos">
					<div class="alt-menu-trigger"></div>
				</div>
			<?php } ?>
		
			<div class="main-container">
			
				<header class="header group">
				
					<div class="header-primary-content">
						
						<div class="logo">
							
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
							
								<?php if($main_logo_url && $is_logo_retina) { ?>
								
									<?php 
										$image_details = wp_get_attachment_image_src( oy_get_attachment_id_from_src( $main_logo_url ), 'full');
										
										// If the dimensions of the image are correctly returned, calculate half of its width and height. 
										if($image_details[1] && $image_details[2]) { 
											$image_half_width = round($image_details[1] / 2);
											$image_half_height = round($image_details[2] / 2);
										}
								    ?>
						
									<img src="<?php echo $image_details[0]; ?>" alt="<?php esc_attr_e( 'Site Logo', 'onioneye' ); ?>" 
									width="<?php echo $image_half_width; ?>" height="<?php echo $image_half_height ?>">
									
								<?php } else if($main_logo_url) { ?>
								
									<img src="<?php echo $main_logo_url; ?>" alt="<?php esc_attr_e( 'Site Logo', 'onioneye' ); ?>">
									
								<?php } else { ?>
								
									<?php echo get_option( 'blogname' ); ?>
									
								<?php } ?>
								
							</a>
						</div><!-- /.logo -->
						
										
						<div class="header-buttons <?php if(!$email && !$telephone && !$address) { ?>contact-excluded<?php } ?>">
							<div class="buttons-container">
								<form method="get" class="main-search-form" action="<?php echo home_url(); ?>">
								    <div class="input-wrap">
								    	<input type="text" class="main-search-field" name="s" id="s" />
									</div>
								</form><!-- /.main-search-form -->
								<span class="search-icon header-icon"><span class="close-search"></span></span>
									
								<?php if($email || $telephone || $address) { ?>	
									<span class="contact-icon header-icon"></span>
									<div class="contact-content">
										<span class="close-contact">×</span>
										<ul>
											<?php if($email) { ?><li class="contact-information my-mail word-break"><a href="mailto:<?php echo $email; ?>"><?php echo $email; ?></a></li><?php } ?>
											<?php if($telephone) { ?><li class="contact-information telephone"><?php echo $telephone; ?></li><?php } ?>
											<?php if($address) { ?><li class="contact-information location"><?php echo $address; ?></li><?php } ?>
										</ul>						
									</div><!-- /.contact-content -->
								<?php } ?>
											
							</div><!-- /.buttons-container -->						
						</div><!-- /.header-buttons -->
						
					</div><!-- /.header-primary-content -->
					
					<?php if($tagline && is_front_page()) { ?>
					
						<h1 class="tagline">
							<?php echo $tagline; ?>
						</h1>
																	
					<?php } ?>
									
				</header><!-- /.header -->	
						
				<div class="main-content group">	