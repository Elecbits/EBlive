<?php

/*-----------------------------------------------------------------------------------*/
/*	Register and Enqueue Theme Styles
/*-----------------------------------------------------------------------------------*/

function oy_add_main_styles() {
	
	wp_enqueue_style( 'oy-normalize', get_template_directory_uri() . '/css/normalize.css' );
    wp_enqueue_style( 'oy-style', get_stylesheet_uri() );  
     
}

function oy_add_ie_styles() {
		
	 wp_register_style( 'ie-style', get_template_directory_uri() . '/css/ie9.css', 'all' ); 
     wp_enqueue_style( 'ie-style' );  
     
}    

function oy_add_fonts() {

    $protocol = is_ssl() ? 'https' : 'http';
    wp_enqueue_style( 'oy-lora', "$protocol://fonts.googleapis.com/css?family=Lora:400,700,400italic" );
    wp_enqueue_style( 'oy-istok', "$protocol://fonts.googleapis.com/css?family=Istok+Web:400,400italic&subset=latin,cyrillic-ext,latin-ext,cyrillic" );
    wp_enqueue_style( 'oy-merriweather', "$protocol://fonts.googleapis.com/css?family=Merriweather:300,400" );
    
} 

add_action( 'wp_enqueue_scripts', 'oy_add_main_styles', 1 );
add_action( 'wp_enqueue_scripts', 'oy_add_ie_styles', 2 );
add_action( 'wp_enqueue_scripts', 'oy_add_fonts', 3 );


/*-----------------------------------------------------------------------------------*/
/*	Register and Enqueue Theme Scripts
/*-----------------------------------------------------------------------------------*/

function oy_add_modernizr() {
	
    wp_register_script( 'oy-modernizr', get_template_directory_uri() . '/js/modernizr.custom-2.6.2.min.js', false, '2.6.2' );
    wp_enqueue_script( 'oy-modernizr' );

}  


function oy_add_prefixfree() {
	
    wp_register_script( 'oy-prefixfree', get_template_directory_uri() . '/js/prefixfree.min.js', false, '1.0.3' );
    wp_enqueue_script( 'oy-prefixfree' );

}  


function oy_add_jquery() {
	
    wp_enqueue_script( 'jquery' );
	
}  


function oy_add_jquery_easing() {
	
    wp_register_script( 'oy-easing', get_template_directory_uri() . '/js/jquery.easing.1.3.js', array( 'jquery' ), false, true );
    wp_enqueue_script( 'oy-easing' );
	
} 


function oy_add_fit_vids() {
	
    wp_register_script( 'oy-fit_vids', get_template_directory_uri() . '/js/jquery.fitvids.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'oy-fit_vids' );
	
} 


function oy_add_overthrow() {
	
    wp_register_script( 'oy-overthrow', get_template_directory_uri() . '/js/overthrow.js', array( 'jquery' ), '1.0.0', true );
    wp_enqueue_script( 'oy-overthrow' );
	
} 


function oy_add_hammer() {
	
    wp_register_script( 'oy-hammer', get_template_directory_uri() . '/js/jquery.hammer.min.js', array( 'jquery' ), '1.0.4' );
    wp_enqueue_script( 'oy-hammer' );
	
} 


function oy_add_hoverIntent() {
	
    wp_register_script( 'oy-hover-intent', get_template_directory_uri() . '/js/jquery.hoverIntent.min.js', array( 'jquery' ), '7.0.0', true );
    wp_enqueue_script( 'oy-hover-intent' );
	
} 


function oy_add_transit() {
	
    wp_register_script( 'oy-transit', get_template_directory_uri() . '/js/jquery.transit.min.js', array( 'jquery' ), '0.9.9', true );
    wp_enqueue_script( 'oy-transit' );
	
} 


function oy_add_comment_reply() {
	// Adds JavaScript to pages with the comment form to support sites with
	// threaded comments (when in use).
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );
}


function oy_add_custom_footer_jquery() {
	
	wp_enqueue_script( 'oy-custom-footer-js', get_template_directory_uri() . '/js/jquery.footer.custom.js', array( 'jquery' ), false, true );
	wp_enqueue_script( 'oy-custom-footer-js' );	
	
} 


/* wp enqueue script */
add_action( 'wp_enqueue_scripts', 'oy_add_modernizr', 5 ); 
add_action( 'wp_enqueue_scripts', 'oy_add_prefixfree', 8 );
add_action( 'wp_enqueue_scripts', 'oy_add_transit', 10 );
add_action( 'wp_enqueue_scripts', 'oy_add_jquery', 15 );
add_action( 'wp_enqueue_scripts', 'oy_add_jquery_easing', 30 );
add_action( 'wp_enqueue_scripts', 'oy_add_fit_vids', 70 );
add_action( 'wp_enqueue_scripts', 'oy_add_overthrow', 77 );
add_action( 'wp_enqueue_scripts', 'oy_add_hammer', 78 );
add_action( 'wp_enqueue_scripts', 'oy_add_hoverIntent', 80 );
add_action( 'wp_enqueue_scripts', 'oy_add_custom_footer_jquery', 90 );
add_action( 'wp_enqueue_scripts', 'oy_add_comment_reply' );

?>