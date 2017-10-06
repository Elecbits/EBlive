<?php 
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package CMSSuperHeroes
 * @subpackage CMS Theme
 * @since 1.0.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lte IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php 
	wp_head();
?>
</head>
<?php 
	global $smof_data, $cms_meta;
	if((!empty($cms_meta->_cms_header_mode)) && (!is_search())){

		$page_mode=esc_attr($cms_meta->_cms_header_mode) ;
	}else{
		$page_mode='dark_mode';
	}
 ?>
<body <?php body_class(); ?>>

<div id="page" class="<?php cms_page_class(); ?>">
	<?php if(is_active_sidebar('sidebar-2') || is_active_sidebar('sidebar-3')):?>
		<div class="header-top hidden-sm hidden-xs <?php echo $page_mode ; ?>" >
		    <div class="container">
		        <div class="row">
		            <div class="col-xs-12 col-sm-12 col-md-5 col-lg-6">
		             	<div class="header-top-left pull-left"><?php dynamic_sidebar('sidebar-2'); ?> </div>
	         		</div>
		             <div class="col-xs-12 col-sm-12 col-md-7 col-lg-6">
		             	<div class="header-top-right pull-right"><?php dynamic_sidebar('sidebar-3'); ?></div>
		             </div>
		        </div>
		    </div>
		</div>
	<?php endif; ?>
	<div id="container-wrap" class="container">
		<div class="row">
		<header id="masthead" class="site-header col-xs-12 col-sm-12 col-md-3 col-lg-3" role="banner">
                    <?php cms_header(); ?>
                    

		</header><!-- #masthead -->
	   
		<div id="main" class="col-xs-12 col-sm-12 col-md-9 col-lg-9">
				<?php if(!empty($cms_meta->_cms_page_slider)): ?>
                <div class="page-slider">
                        <?php 
                        $slide = $cms_meta->_cms_page_slider; 
                        cms_revolution_slider($slide);
                        ?>
                </div>
                <?php endif; ?>
		 	<?php cms_page_title(); ?>