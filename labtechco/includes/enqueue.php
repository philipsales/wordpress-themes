<?php

/* For security */
if ( !defined( 'ABSPATH' ) ) {
	die( 'No direct access allowed' );
}




/*
 *  Check if MIN css or not
 */
if( !function_exists('themestek_min_css') ){
function themestek_min_css(){
	global $labtechco_theme_options;
	
	// Checking if MIN enabled
	if(!is_admin()) {
		if( isset($labtechco_theme_options['minify']) && $labtechco_theme_options['minify']==true ){
			define('TS_MIN', '.min');
		} else {
			define('TS_MIN', '');
		}
	}
}
}
add_action( 'init', 'themestek_min_css' );



/**
 * Enqueue scripts and styles for the front end.
 *
 * @since LabtechCO 1.0
 *
 * @return void
 */
if( !function_exists('labtechco_scripts_styles') ){
function labtechco_scripts_styles() {
	global $labtechco_theme_options;
	/*
	 * Adds JavaScript to pages with the comment form to support
	 * sites with threaded comments (when in use).
	 */
	$thread_comments_option = get_option( 'thread_comments' );
	
	if ( is_singular() && comments_open() && $thread_comments_option ){
		wp_enqueue_script( 'comment-reply' );
	}
	
	// Base icon library
	wp_enqueue_style( 'ts-base-icons', get_template_directory_uri() . '/libraries/ts-labtechco-icons/css/ts-labtechco-icons.css' );
	
	// Animsition - Add page translation effect
	if( isset($labtechco_theme_options['pagetranslation']) && $labtechco_theme_options['pagetranslation']!='no'){
		wp_register_script( 'animsition', get_template_directory_uri() . '/libraries/animsition/js/jquery.animsition.min.js', array( 'jquery' ), '', true );
		wp_register_style( 'animsition', get_template_directory_uri() . '/libraries/animsition/css/animsition.min.css' );
	}
	
	// Perfect Scrollbar
	wp_enqueue_script( 'perfect-scrollbar', get_template_directory_uri() . '/libraries/perfect-scrollbar/perfect-scrollbar.jquery.min.js', array( 'jquery' ), '', true );
	wp_enqueue_style( 'perfect-scrollbar', get_template_directory_uri() . '/libraries/perfect-scrollbar/perfect-scrollbar.min.css' );
	
	
	// hower.css : Hover effect (we are using min version)
	wp_register_style( 'hover', get_template_directory_uri() . '/libraries/hover/hover-min.css' );
	
	// Chris Bracco Tooltip
	wp_enqueue_style( 'chrisbracco-tooltip', get_template_directory_uri() . '/libraries/chrisbracco-tooltip/chrisbracco-tooltip.min.css' );
	
	// multi-columns-row
	wp_enqueue_style( 'multi-columns-row', get_template_directory_uri() . '/css/multi-columns-row.css' );
	
	// Select2
	wp_enqueue_script( 'ts-select2', get_template_directory_uri() . '/libraries/select2/select2.min.js', array( 'jquery' ), '', true );
	wp_enqueue_style( 'ts-select2', get_template_directory_uri() . '/libraries/select2/select2.min.css' );
	
	// IsoTope
	wp_enqueue_script( 'isotope', get_template_directory_uri() . '/libraries/isotope/isotope.pkgd.min.js', array( 'jquery' ), '', true );
	
	// jquery-mousewheel
	wp_enqueue_script( 'jquery-mousewheel', get_template_directory_uri() . '/libraries/jquery-mousewheel/jquery.mousewheel.min.js', array( 'jquery' ), '', true );
	
	// Flex Slider
	wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/libraries/flexslider/jquery.flexslider-min.js', array( 'jquery' ), '', true );
	wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/libraries/flexslider/flexslider.css' );
	
	
	// Sticky
	if( !empty($labtechco_theme_options['sticky_header']) && $labtechco_theme_options['sticky_header']=='y' ){
		wp_enqueue_script( 'sticky-kit', get_template_directory_uri() . '/libraries/sticky-kit/jquery.sticky-kit.min.js', array( 'jquery' ) , '', true );
	}
	
	// animate.css
	if ( !wp_style_is( 'animate-css', 'registered' ) ) { // If library is not registered
		wp_register_style( 'animate-css', get_template_directory_uri() . '/libraries/animate/animate.min.css' );
	}
	wp_register_script( 'nivo-slider', get_template_directory_uri() . '/libraries/nivo-slider/jquery.nivo.slider.pack.js', array( 'jquery' ), '', true );
	wp_register_style( 'nivo-slider-css', get_template_directory_uri() . '/libraries/nivo-slider/nivo-slider.css' );
	wp_register_style( 'nivo-slider-theme', get_template_directory_uri() . '/libraries/nivo-slider/themes/default/default.css' );
	
	// Numinate plugin
	if ( !wp_script_is( 'waypoints', 'registered' ) ) { // If library is not registered
		wp_register_script( 'waypoints', get_template_directory_uri() . '/libraries/waypoints/jquery.waypoints.min.js', array( 'jquery' ), '', true );
	}
	wp_register_script( 'numinate', get_template_directory_uri() . '/libraries/numinate/numinate.min.js', array( 'jquery' ), '', true );
	
	// circle-progress
	wp_register_script( 'jquery-circle-progress', get_template_directory_uri() . '/libraries/jquery-circle-progress/circle-progress.min.js', array( 'jquery' ), '', true );
	
	// Slick library
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/libraries/slick/slick.min.js', array('jquery'), '', true );
	wp_enqueue_style( 'slick', get_template_directory_uri() . '/libraries/slick/slick.css' );
	wp_enqueue_style( 'slick-theme', get_template_directory_uri() . '/libraries/slick/slick-theme.css', array('slick') );
	
	// PrettyPhoto
	if ( !wp_script_is( 'prettyphoto', 'registered' ) ) { // If library is not registered
		$prettyphoto_js = get_template_directory_uri() . '/libraries/prettyphoto/js/jquery.prettyPhoto.js';
		if( file_exists( WP_PLUGIN_URL . '/js_composer/libraries/lib/prettyphoto/js/jquery.prettyPhoto.js') ){
			$prettyphoto_js = WP_PLUGIN_URL . '/js_composer/libraries/lib/prettyphoto/js/jquery.prettyPhoto.js';
		}
		wp_register_script( 'prettyphoto', $prettyphoto_js, array('jquery') , '', true);
	}
	if ( !wp_style_is( 'prettyphoto', 'registered' ) ) { // If library is not registered
		$prettyphoto_css = get_template_directory_uri() . '/libraries/prettyphoto/css/prettyPhoto.css';
		if( file_exists( WP_PLUGIN_URL . '/js_composer/libraries/lib/prettyphoto/css/prettyPhoto.css') ){
			$prettyphoto_css = WP_PLUGIN_URL . '/js_composer/libraries/lib/prettyphoto/css/prettyPhoto.css';
		}
		wp_register_style( 'prettyphoto', $prettyphoto_css );
	}
	
	// CSSgram
	wp_register_style( 'cssgram', get_template_directory_uri() . '/libraries/cssgram/cssgram.min.css' );
	
	// Loading prettyPhoto by default
	wp_enqueue_script( 'prettyphoto' );
	wp_enqueue_style( 'prettyphoto' );
	
}
}
add_action( 'wp_enqueue_scripts', 'labtechco_scripts_styles', 10 );




if( !function_exists('labtechco_scripts_styles_14') ){
function labtechco_scripts_styles_14() {
	wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'multi-columns-row', get_template_directory_uri() . '/css/multi-columns-row.min.css', array('bootstrap') );
	wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri() . '/css/bootstrap-theme.min.css', array('bootstrap') );
	
	if ( file_exists( ABSPATH . 'wp-content/plugins/js_composer/libraries/css/js_composer_tta.min.css') ) {
		wp_enqueue_style( 'vc_tta_style',  plugins_url() . '/js_composer/libraries/css/js_composer_tta.min.css' );
	}
	
	wp_enqueue_style( 'labtechco-core-style', get_template_directory_uri() . '/css/core'.TS_MIN.'.css', array('bootstrap','bootstrap-theme') );
}
}
add_action( 'wp_enqueue_scripts', 'labtechco_scripts_styles_14', 14 );







if( !function_exists('labtechco_scripts_styles_15') ){
function labtechco_scripts_styles_15() {
	global $labtechco_theme_options;
	$min = TS_MIN;
	if( is_child_theme() ){
		$min = '';
	}
	if( defined( 'WPB_VC_VERSION' ) ){
		wp_enqueue_style( 'labtechco-master-style', get_template_directory_uri() . '/css/master'.TS_MIN.'.css' , array('js_composer_front') );
		wp_register_style( 'labtechco-dark', get_template_directory_uri() . '/css/dark'.TS_MIN.'.css' , array('js_composer_front', 'labtechco-master-style') );  // Dark
	} else {
		wp_enqueue_style( 'labtechco-master-style', get_template_directory_uri() . '/css/master'.TS_MIN.'.css' );
		wp_register_style( 'labtechco-dark', get_template_directory_uri() . '/css/dark'.TS_MIN.'.css' , array( 'labtechco-master-style') );  // Dark
	}
	
	
	// Load dark.css if dark layout
	if( isset($labtechco_theme_options['inner_background']['background-color']) && trim($labtechco_theme_options['inner_background']['background-color'])!='' && ts_check_dark_color($labtechco_theme_options['inner_background']['background-color']) ){
		wp_enqueue_style('labtechco-dark');
	}
}
}
add_action( 'wp_enqueue_scripts', 'labtechco_scripts_styles_15', 15 );




if( !function_exists('labtechco_scripts_styles_17') ){
function labtechco_scripts_styles_17() {
	// Responsive
	global $labtechco_theme_options;
	
	// Responsive CSS
	wp_enqueue_style( 'labtechco-responsive-style', get_template_directory_uri() . '/css/responsive'.TS_MIN.'.css' );
	
	// Loads JavaScript file with functionality specific to LabtechCO.
	if ( wp_script_is( 'wpb_composer_front_js', 'registered' ) ) {
		wp_enqueue_script( 'labtechco-script', get_template_directory_uri() . '/js/scripts'.TS_MIN.'.js', array( 'jquery', 'wpb_composer_front_js' ), '1.0', true );
	} else {
		wp_enqueue_script( 'labtechco-script', get_template_directory_uri() . '/js/scripts'.TS_MIN.'.js', array( 'jquery' ), '1.0', true );
	}
}
}
add_action( 'wp_enqueue_scripts', 'labtechco_scripts_styles_17', 17 );
