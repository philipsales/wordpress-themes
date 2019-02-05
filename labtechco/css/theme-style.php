<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) {
	exit;
}


/* Getting skin color */
$skincolor = themestek_get_option('skincolor');

/*
 *  Set skin color set for this page only.
 */
if( isset($_GET['color']) && trim($_GET['color'])!='' ){
	$skincolor = '#'.trim($_GET['color']);
}


/*
 *  Setting variables for different Theme Options
 */
$header_height        = themestek_get_option('header_height');
$first_menu_margin    = themestek_get_option('first_menu_margin');
$titlebar_height      = themestek_get_option('titlebar_height');
$header_height_sticky = themestek_get_option('header_height_sticky');
$center_logo_width    = themestek_get_option('center_logo_width');

$header_btn						   = themestek_get_option('header_btn');
$header_bg_color                   = themestek_get_option('header_bg_color');
$responsive_header_bg_custom_color = themestek_get_option('responsive_header_bg_custom_color');
$header_bg_custom_color            = themestek_get_option('header_bg_custom_color');
$sticky_header_bg_color            = themestek_get_option('sticky_header_bg_color');
$sticky_header_bg_custom_color     = themestek_get_option('sticky_header_bg_custom_color');
$sticky_header_bg_color            = ( empty($sticky_header_bg_color) ) ? $header_bg_color : $sticky_header_bg_color ;
$sticky_header_bg_custom_color     = ( empty($sticky_header_bg_custom_color) ) ? $header_bg_custom_color : $sticky_header_bg_custom_color ;

$sticky_header_menu_bg_color        = themestek_get_option('sticky_header_menu_bg_color');
$sticky_header_menu_bg_custom_color = themestek_get_option('sticky_header_menu_bg_custom_color');

$general_font = themestek_get_option('general_font');


$titlebar_bg_color          = themestek_get_option('titlebar_bg_color');
$titlebar_bg_custom_color   = themestek_get_option('titlebar_bg_custom_color');
$titlebar_text_color        = themestek_get_option('titlebar_text_color');
$titlebar_text_custom_color = themestek_get_option('titlebar_heading_font', 'color');
$titlebar_subheading_text_custom_color = themestek_get_option('titlebar_subheading_font', 'color');
$titlebar_breadcrumb_text_custom_color = themestek_get_option('titlebar_breadcrumb_font', 'color');

$topbar_text_color        = themestek_get_option('topbar_text_color');
$topbar_text_custom_color = themestek_get_option('topbar_text_custom_color');
$topbar_bg_color          = themestek_get_option('topbar_bg_color');
$topbar_bg_custom_color   = themestek_get_option('topbar_bg_custom_color');

$topbar_breakpoint        = themestek_get_option('topbar-breakpoint');
$topbar_breakpoint_custom = themestek_get_option('topbar-breakpoint-custom');


$mainmenufont            = themestek_get_option('mainmenufont');
$mainMenuFontColor       = $mainmenufont['color'];
$stickymainmenufontcolor = themestek_get_option('stickymainmenufontcolor');
$stickymainmenufontcolor = ( empty($stickymainmenufontcolor) ) ? $mainmenufont['color'] : $stickymainmenufontcolor ;

$dropdownmenufont = themestek_get_option('dropdownmenufont');

$mainmenu_active_link_color        = themestek_get_option('mainmenu_active_link_color');
$mainmenu_active_link_custom_color = themestek_get_option('mainmenu_active_link_custom_color');
$dropmenu_active_link_color        = themestek_get_option('dropmenu_active_link_color');
$dropmenu_active_link_custom_color = themestek_get_option('dropmenu_active_link_custom_color');

$dropmenu_background = themestek_get_option('dropmenu_background');

$logoMaxHeight       = themestek_get_option('logo_max_height');
$logoMaxHeightSticky = themestek_get_option('logo_max_height_sticky');

$inner_background = themestek_get_option('inner_background');

$headerbg_color       = themestek_get_option('header_bg_color');
$headerbg_customcolor = themestek_get_option('header_bg_custom_color');

$header_menu_bg_color        = themestek_get_option('header_menu_bg_color');
$header_menu_bg_custom_color = themestek_get_option('header_menu_bg_custom_color');


$menu_breakpoint        = themestek_get_option('menu_breakpoint');
$menu_breakpoint_custom = themestek_get_option('menu_breakpoint-custom');

$breakpoint = $menu_breakpoint;
$breakpoint = ( $menu_breakpoint=='custom' && !empty($menu_breakpoint_custom) ) ? $menu_breakpoint_custom : $breakpoint ;

$logo_font = themestek_get_option('logo_font');

$loaderimg          = themestek_get_option('loaderimg');
$loaderimage_custom = themestek_get_option('loaderimage_custom');

$fbar_breakpoint        = themestek_get_option('floatingbar-breakpoint');
$fbar_breakpoint_custom = themestek_get_option('floatingbar-breakpoint-custom');




/* Output start
------------------------------------------------------------------------------*/ ?>

<?php
/* Custom CSS Code at top */
$custom_css_code_top = themestek_get_option('custom_css_code_top');
if( !empty($custom_css_code_top) ){
	// We are not escaping / sanitizing as we are expecting css code. 
	echo trim($custom_css_code_top);
}
?>

/*------------------------------------------------------------------
* theme-style.php index *
[Table of contents]

1.  Background color
2.  Topbar Background color
3.  Element Border color
4.  Textcolor
5.  Boxshadow
6.  Header / Footer background color
7.  Footer background color
8.  Logo Color
9.  Genral Elements
10. "Center Logo Between Menu" options
11. Floating Bar
-------------------------------------------------------------------*/



/**
 * 0. Background properties
 * ----------------------------------------------------------------------------
 */
<?php
// We are not escaping / sanitizing as we are expecting css code. 
echo trim(themestek_get_all_background_css());
?>


/**
 * 0. Font properties
 * ----------------------------------------------------------------------------
 */
<?php
// We are not escaping / sanitizing as we are expecting css code. 
echo trim(themestek_get_all_font_css());
?>



/**
 * 0. Text link and hover color properties
 * ----------------------------------------------------------------------------
 */
<?php
// We are not escaping / sanitizing as we are expecting css code. 
echo trim(themestek_a_color());
?>



/**
 * 0. Header bg color
 * ----------------------------------------------------------------------------
 */
<?php
if( $header_bg_color=='custom' && !empty($header_bg_custom_color) ){
	?>
	.site-header.ts-bgcolor-custom:not(.is_stuck),
	.ts-header-style-classic-box.ts-header-overlay .site-header.ts-bgcolor-custom:not(.is_stuck) .ts-container-for-header{
		background-color:<?php echo esc_attr($header_bg_custom_color); ?> !important;
	}
	<?php
}
?>

/**
 * 0. Sticky header bg color
 * ----------------------------------------------------------------------------
 */
<?php
if( $sticky_header_bg_color=='custom' && !empty($sticky_header_bg_custom_color) ){
	?>
	.is_stuck.site-header.ts-sticky-bgcolor-custom{
		background-color:<?php echo esc_attr($sticky_header_bg_custom_color); ?> !important;
	}
	<?php
}
?>


/**
 * 0. header menu bg color
 * ----------------------------------------------------------------------------
 */
<?php
if( $header_menu_bg_color=='custom' && !empty($header_menu_bg_custom_color) ){
	?>
	.ts-header-menu-bg-color-custom{
		background-color:<?php echo esc_attr($header_menu_bg_custom_color); ?>;
		<!-- center logo transparent header ma issue kare che important -->
	}
	<?php
}
?>


/**
 * 0. Sticky menu bg color
 * ----------------------------------------------------------------------------
 */
<?php
if( $sticky_header_menu_bg_color=='custom' && !empty($sticky_header_menu_bg_custom_color) ){
	?>
	.is_stuck.ts-sticky-bgcolor-custom,
	.is_stuck .ts-sticky-bgcolor-custom{
		background-color:<?php echo esc_attr($sticky_header_menu_bg_custom_color); ?> !important;
	}
	<?php
}
?>


/**
 * 0. Header button bg color
 * ----------------------------------------------------------------------------
 */
<?php
if( !empty($header_btn['header_btn_bg_color'])  ){
	?>
	@media (min-width: 1200px){
		.ts-header-style-infostack .ts-header-block .ts-vc_btn3-container .ts-vc_btn3{
			background-color:<?php echo esc_attr($header_btn['header_btn_bg_color']); ?> !important;
		}
	}
	<?php
}
if( !empty($header_btn['header_btn_bg_color_hover'])  ){
	?>
	@media (min-width: 1200px){
		.ts-header-style-infostack .ts-header-block .ts-vc_btn3-container .ts-vc_btn3:hover{
			background-color:<?php echo esc_attr($header_btn['header_btn_bg_color_hover']); ?> !important;
		}
	}
	<?php
}
?>


/**
 * 0. List style special style
 * ----------------------------------------------------------------------------
 */
.wpb_row .vc_tta.vc_general.vc_tta-color-white:not(.vc_tta-o-no-fill) .vc_tta-panel-body .wpb_text_column{
	color:<?php echo esc_attr($general_font['color']); ?>;
}


/**
 * 0. Page loader css
 * ----------------------------------------------------------------------------
 */
<?php echo themestek_get_page_loader_css(); ?>



/**
 * 0. Floating bar
 * ----------------------------------------------------------------------------
 */
<?php echo themestek_floatingbar_inline_css(); ?>




/* This is Titlebar Background color */
<?php if( $titlebar_bg_color=='custom' && !empty($titlebar_bg_custom_color['rgba']) ) : ?>
.ts-titlebar-wrapper .ts-titlebar-inner-wrapper{
	background-color: <?php echo esc_attr( $titlebar_bg_custom_color['rgba'] ); ?>;
}
.ts-titlebar-wrapper{
	background-color:  <?php echo esc_attr( $titlebar_bg_custom_color['rgba'] ); ?>;
}
<?php endif; ?>
.ts-header-overlay .ts-titlebar-wrapper .ts-titlebar-inner-wrapper{	
	padding-top: <?php echo esc_attr($header_height); ?>px;
}


/* This is Titlebar Text color */
<?php if( $titlebar_text_color=='custom' && !empty($titlebar_text_custom_color) ): ?>
.ts-titlebar-wrapper .ts-titlebar-main h1.entry-title{
	color: <?php echo esc_attr($titlebar_text_custom_color); ?> !important;
}
.ts-titlebar-wrapper .ts-titlebar-main h3.entry-subtitle{
	color: <?php echo esc_attr($titlebar_subheading_text_custom_color); ?> !important;
}
.ts-titlebar-main .breadcrumb-wrapper, .ts-titlebar-main .breadcrumb-wrapper a:hover{ /* Breadcrumb */
	color: rgba( <?php echo themestek_hex2rgb($titlebar_breadcrumb_text_custom_color); ?> , 1) !important;
}
.ts-titlebar-main .breadcrumb-wrapper a{ /* Breadcrumb */
	color: rgba( <?php echo themestek_hex2rgb($titlebar_breadcrumb_text_custom_color); ?> , 0.7) !important;
}
<?php endif; ?>

.ts-titlebar-wrapper .ts-titlebar-inner-wrapper{
	height: <?php echo esc_attr($titlebar_height); ?>px;	
}
.ts-header-overlay .themestek-titlebar-wrapper .ts-titlebar-inner-wrapper{	
	padding-top: <?php echo esc_attr(($header_height+30)); ?>px;
}
.themestek-header-style-3.ts-header-overlay .ts-titlebar-wrapper .ts-titlebar-inner-wrapper{
	padding-top: <?php echo esc_attr(($header_height+55)) ?>px;
}

/* Logo Max-Height */
.headerlogo img{
    max-height: <?php echo esc_attr($logoMaxHeight); ?>px;
}
.is_stuck .headerlogo img{
    max-height: <?php echo esc_attr($logoMaxHeightSticky); ?>px;
}
span.ts-sc-logo.ts-sc-logo-type-image {
    position: relative;
	display: block;
	z-index: 1;
}

/**
 * Topbar Background color
 * ----------------------------------------------------------------------------
 */
<?php if( $topbar_text_color=='custom' && !empty($topbar_text_custom_color) ): ?>
	.site-header .themestek-topbar{
		color: rgba( <?php echo themestek_hex2rgb($topbar_text_custom_color); ?> , 0.7);
	}
	.themestek-topbar-textcolor-custom .social-icons li a{
		  border: 1px solid rgba( <?php echo themestek_hex2rgb($topbar_text_custom_color); ?> , 0.7);
	}
	.site-header .themestek-topbar a{
		color: rgba( <?php echo themestek_hex2rgb($topbar_text_custom_color); ?> , 1);
	}
<?php endif; ?>

<?php if( $topbar_bg_color=='custom' && !empty($topbar_bg_custom_color) ) : ?>
	.site-header .themestek-topbar{
		background-color: <?php echo esc_attr($topbar_bg_custom_color); ?>;
	}
<?php endif; ?>

<?php

if( !empty($topbar_breakpoint) && trim($topbar_breakpoint)!='all' ){
	if( esc_attr($topbar_breakpoint)=='custom' ) {
		$topbar_breakpoint = ( !empty($topbar_breakpoint_custom) ) ?  trim($topbar_breakpoint_custom) : '1200' ;
	}

?>
	
/* Show/hide topbar in some devices */
	@media (max-width: <?php echo esc_attr($topbar_breakpoint); ?>px){
		.themestek-pre-header-wrapper{
			display: none !important;
		}
	}

	<?php
}
?>

.main-holder .site #content table.cart td.actions .input-text:focus, 
textarea:focus, input[type="text"]:focus, input[type="password"]:focus, 
input[type="datetime"]:focus, input[type="datetime-local"]:focus, 
input[type="date"]:focus, input[type="month"]:focus, input[type="time"]:focus, 
input[type="week"]:focus, input[type="number"]:focus, input[type="email"]:focus, 
input[type="url"]:focus, input[type="search"]:focus, input[type="tel"]:focus, 
input[type="color"]:focus, input.input-text:focus, 
select:focus, 
blockquote{
	border-color: <?php echo esc_attr($skincolor); ?>;
}


/* Dynamic main menu color applying to responsive menu link text */
.header-controls .search_box i.tsicon-fa-search,
.righticon i,
.menu-toggle i,
.header-controls a{
    color: rgba( <?php echo esc_attr( themestek_hex2rgb($mainMenuFontColor) ); ?> , 1) ;
}
.menu-toggle i:hover,
.header-controls a:hover {
    color: <?php echo esc_attr($skincolor); ?> !important;
}

<?php if( !empty($dropdownmenufont['color']) ) : ?>
	.ts-mmmenu-override-yes  #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu > li.mega-menu-item-type-widget div{
		color: rgba( <?php echo themestek_hex2rgb($dropdownmenufont['color']); ?> , 0.8);
		font-weight: normal;
	}
<?php endif; ?>


/*Logo Color --------------------------------*/ 
h1.site-title{
	color: <?php echo esc_attr($logo_font['color']); ?>;
}




/**
 * Heading Elements
 * ----------------------------------------------------------------------------
 */
.ts-textcolor-skincolor h1,
.ts-textcolor-skincolor h2,
.ts-textcolor-skincolor h3,
.ts-textcolor-skincolor h4,
.ts-textcolor-skincolor h5,
.ts-textcolor-skincolor h6,

.ts-textcolor-skincolor .ts-vc_cta3-content-header h2{
	color: <?php echo esc_attr($skincolor); ?> !important;
}
.ts-textcolor-skincolor .ts-vc_cta3-content-header h4{
	color: rgba( <?php echo themestek_hex2rgb($skincolor); ?> , 0.90) !important;
}
.ts-textcolor-skincolor .ts-vc_cta3-content .ts-cta3-description{
	color: rgba( <?php echo themestek_hex2rgb($skincolor); ?> , 0.60) !important;
}
.ts-textcolor-skincolor{
	color: rgba( <?php echo themestek_hex2rgb($skincolor); ?> , 0.60);
}
.ts-textcolor-skincolor a{
	color: rgba( <?php echo themestek_hex2rgb($skincolor); ?> , 0.80);
}

/**
 * Floating Bar
 * ----------------------------------------------------------------------------
 */
<?php

if( !empty($fbar_breakpoint) && trim($fbar_breakpoint)!='all' ){

	if( esc_attr($fbar_breakpoint)=='custom' ) {
		$fbar_breakpoint = ( !empty($fbar_breakpoint_custom) ) ?  trim($fbar_breakpoint_custom) : '1200' ;
	}

?>
	
/* Show/hide topbar in some devices */
@media (max-width: <?php echo esc_attr($fbar_breakpoint); ?>px){
	.themestek-fbar-btn,
	    .themestek-fbar-box-w{
			display: none !important;
		}
	}
	<?php
}
?>


/**
 * 1. Textcolor
 * ----------------------------------------------------------------------------
 */

.ts-col-bgcolor-darkgrey .ts-ihbox-style-5.ts-ihbox i,

.ts-servicebox-style-2.themestek-box h3 a:hover,
.ts-servicebox-style-1.themestek-box .themestek-box-category a,


.themestek-pre-header-wrapper .top-contact li a:hover,

footer a:hover,
blockquote:after,
section.error-404 .ts-big-icon,

/* Pricing table */
.ts-ptablebox-style-1 .ts-ihbox-icon-wrapper,

/* Slick Slider */
.themestek-boxes-row-wrapper .slick-arrow:not(.slick-disabled):hover:before,

/* Icon basic color */
.ts-icolor-skincolor,

.ts-bgcolor-darkgrey ul.labtechco_contact_widget_wrapper li a:hover,
.ts-vc_general.ts-vc_cta3.ts-vc_cta3-color-skincolor.ts-vc_cta3-style-classic .ts-vc_cta3-content-header, 
.ts-vc_icon_element-color-skincolor, 
 
.ts-bgcolor-skincolor .themestek-pagination .page-numbers.current, 
.ts-bgcolor-skincolor .themestek-pagination .page-numbers:hover,
.ts-dcap-txt-color-skincolor,


/* Global Button */ 
.ts-vc_general.ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-color-white:hover,
article.post .entry-title a:hover,

.comment-reply-link,

 /* Global */ 
 .ts-skincolor-strong  strong,
.ts-skincolor,
.ts-element-heading-wrapper .ts-vc_general .ts-vc_cta3_content-container .ts-vc_cta3-content .ts-vc_cta3-content-header h4.ts-skincolor,

 /* lsit style */ 
.ts-list-style-disc.ts-list-icon-color-skincolor li,
.ts-list-style-circle.ts-list-icon-color-skincolor li,
.ts-list-style-square.ts-list-icon-color-skincolor li,

.ts-list-style-decimal.ts-list-icon-color-skincolor li,
.ts-list-style-upper-alpha.ts-list-icon-color-skincolor li,
.ts-list-style-roman.ts-list-icon-color-skincolor li,
.ts-list.ts-skincolor li .ts-list-li-content, 
 .ts-search-results-pages-w .ts-list-li-content a:hover,
.ts-textcolor-white a:hover, 

.ts-fid-icon-wrapper i,
.ts-textcolor-skincolor,
.ts-textcolor-skincolor a,
.themestek-box-title h4 a:hover,

/* Text color skin in row secion*/
.ts-background-image.ts-row-textcolor-skin h1, 
.ts-background-image.ts-row-textcolor-skin h2, 
.ts-background-image.ts-row-textcolor-skin h3, 
.ts-background-image.ts-row-textcolor-skin h4, 
.ts-background-image.ts-row-textcolor-skin h5, 
.ts-background-image.ts-row-textcolor-skin h6,
.ts-background-image.ts-row-textcolor-skin .ts-element-heading-wrapper h2,
.ts-background-image.ts-row-textcolor-skin .themestek-testimonial-title,
.ts-background-image.ts-row-textcolor-skin a,
.ts-background-image.ts-row-textcolor-skin .item-content a:hover,

.ts-row-textcolor-skin h1, 
.ts-row-textcolor-skin h2, 
.ts-row-textcolor-skin h3, 
.ts-row-textcolor-skin h4, 
.ts-row-textcolor-skin h5, 
.ts-row-textcolor-skin h6,
.ts-row-textcolor-skin .ts-element-heading-wrapper h2,
.ts-row-textcolor-skin .themestek-testimonial-title,
.ts-row-textcolor-skin a,
.ts-row-textcolor-skin .item-content a:hover,

.sidebar .widget_recent_comments li.recentcomments a:hover, 
.sidebar .themestek_widget_recent_entries a:hover, 
.sidebar .widget_recent_entries a:hover, 
.sidebar .widget_meta a:hover, 
.sidebar .widget_categories a:hover, 
.sidebar .widget_archive li a:hover, 
.sidebar .widget_pages li a:hover, 
.sidebar .widget_nav_menu li a:hover,

ul.ts-recent-post-list > li .post-date,
.single-ts-portfolio .nav-links a:hover,
.author-info .ts-author-social-links-wrapper ul li a:hover,


.ts-team-details-line .ts-team-list-value a:hover,
.ts-team-details-line i,
.ts-pf-details-heading i,
.ts-pf-single-content-wrapper .ts-social-share-links ul li a:hover,
.ts-custom-bt .ts-vc_general.ts-vc_btn3:hover,
.ts-custom-bt .ts-vc_btn3.ts-vc_btn3-style-text.ts-vc_btn3-size-md.ts-vc_btn3-icon-left:not(.ts-vc_btn3-o-empty) .ts-vc_btn3-icon,
ul.labtechco_contact_widget_wrapper li:before,

.ts-featured-meta-wrapper .ts-metaline .ts-meta-line:not(.cat-links) a:hover,
.themestek-boxes-view-carousel:not(.themestek-boxes-col-one) .themestek-boxes-row-wrapper .slick-arrow:hover:before,


.ts-col-bgcolor-darkgrey .ts-testimonialbox-style-2.themestek-box-testimonial .themestek-box-content:after,
.ts-testimonialbox-style-2.themestek-box-testimonial .themestek-box-content .themestek-box-title:after,
.ts-testimonialbox-style-1.themestek-box-testimonial .themestek-box-content:after,


.ts-testimonialbox-style-2.themestek-box-testimonial .themestek-author-name a:hover,
.ts-testimonialbox-style-1.themestek-box-testimonial .themestek-author-name a:hover,


.ts-testimonialbox-style-3.themestek-box-testimonial .themestek-box-content:after,
.ts-testimonialbox-style-3.themestek-box-testimonial .themestek-box-content .themestek-author-name,
.ts-testimonialbox-style-3.themestek-box-testimonial .themestek-box-content .themestek-author-name a,
.themestek-box-team-style-3 .themestek-box-team-position,
.themestek-box-team-style-3 .themestek-box-content-inner .themestek-teambox-email i,
.themestek-box-team-style-3 .themestek-box-content-inner .themestek-teambox-email a:hover,

.themestek-box-blog.ts-blogbox-style-2 .ts-featured-meta-wrapper .ts-meta-line a,
.ts-vc_general.ts-vc_btn3-color-skincolor,
.ts-icon-skincolor-strong strong,
.ts-icon-skincolor i, 
.ts-ihbox-style-4 .ts-ihbox-icon-type-text,
.ts-team-social-links li a:hover,
.ts-skincolor h3,
.themestek-box-testimonial .themestek-author-name,
.themestek-box-testimonial .themestek-author-name a,
h3.ts-fid-inner span:first-child,
.ts-portfoliobox-style-1.themestek-box h3 a:hover,
.ts-portfoliobox-style-3.themestek-box h3 a:hover,
.themestek-box.ts-portfoliobox-style-1 .themestek-box-category a,
.ts-featured-meta-wrapper .ts-meta-line i,
.themestek-box-blog .themestek-box-title h4 a:hover,
.themestek-box-blog .themestek-blogbox-footer-readmore a:hover,
.themestek-blogbox-footer-readmore a:hover,
.ts-featured-meta-wrapper .ts-meta-line a:hover{
	color: <?php echo esc_attr($skincolor); ?>;
}


/**
 * 2. Background
 * ----------------------------------------------------------------------------
 */


.edit-link a:hover,

/* Search result */
.ts-team-member-single-content-wrapper .ts-team-social-links li a:hover,

/* Pricing table */
.ts-ptablebox-featured-col .ts-ptablebox-style-1 .ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-flat,
.ts-ptablebox-style-1 .ts-vc_btn3.ts-vc_btn3-color-inverse.ts-vc_btn3-style-flat:hover,
.ts-ptablebox-featured-col .ts-ptablebox-style-1 .themestek-ptable-main,

/* Blogbox */
.ts-blogbox-style-2 .ts-featured-meta-wrapper .ts-meta-line.cat-links,


/* Header bacground color */
.themestek-pre-header-wrapper .social-icons li > a:hover,


.ts-header-overlay .site-header.ts-sticky-bgcolor-skincolor.is_stuck,
.site-header-menu.ts-sticky-bgcolor-skincolor.is_stuck,
.ts-header-style-infostack .site-header .ts-stickable-header.is_stuck.ts-sticky-bgcolor-skincolor,
.is_stuck.ts-sticky-bgcolor-skincolor,

.ts-bgcolor-skincolor,
.ts-skincolor-bg,
.ts-col-bgcolor-skincolor .ts-bg-layer-inner,
.ts-bgcolor-skincolor > .ts-bg-layer,
footer#colophon.ts-bgcolor-skincolor > .ts-bg-layer,
.ts-titlebar-wrapper.ts-bgcolor-skincolor .ts-titlebar-wrapper-bg-layer,
.ts-titlebar-wrapper.ts-breadcrumb-on-bottom .ts-titlebar .breadcrumb-wrapper .container,

.themestek-pagination .page-numbers.current, 
.themestek-pagination .page-numbers:hover,
.ts-social-share-links ul li a:hover,

/*Search Result Page*/
.ts-sresults-title small a,
.ts-sresult-form-wrapper,

.widget.labtechco_category_list_widget li a:hover,
.widget.themestek_widget_list_all_posts ul > li.ts-post-active a,

.widget.labtechco_category_list_widget li.current-cat a,
.widget.themestek_widget_list_all_posts ul > li a:hover,

.sidebar h3.widget-title:after,
mark, 
ins,

.tagcloud a:hover,
.ts_prettyphoto .vc_single_image-wrapper:after, 
#totop,
.ts-commonform input[type="submit"],
.ts-sortable-list .ts-sortable-link a:hover,
.ts-sortable-list .ts-sortable-link a.selected,
.comment-body .reply a:hover,


.themestek-pf-single-content-bottom .ts-pf-single-category-w a:hover,
.themestek-box-portfolio.themestek-box-view-overlay .themestek-icon-box:hover,

.ts-vc_icon_element-background-color-skincolor,

.footer .widget-title:after,


.ts-vc_general.ts-vc_btn3.ts-vc_btn3-color-skincolor.ts-vc_btn3-style-outline:hover,
.ts-vc_general.ts-vc_btn3.ts-vc_btn3-color-skincolor:not(.ts-vc_btn3-style-text):not(.ts-vc_btn3-style-outline),
.vc_progress_bar.vc_progress-bar-color-skincolor .vc_single_bar .vc_bar,
.themestek-box-blog-classic .ts-blog-classic-datebox-overlay,
 button, input[type="submit"],
.ts-col-bgcolor-skincolor,
.ts-ihbox-style-3.ts-ihbox:hover,
.ts-ihbox-style-4 .ts-vc_cta3-headers:after,
.ts-ihbox-style-left-icon-skin-hover:hover,
.ts-ihbox-hoverstyle-1:hover,
.ts-ihbox-style-4 .ts-ihbox-big-number-text:after,
.ts-featured-meta-wrapper .ts-featured-meta-comments-tableper,
.themestek-box-view-overlay.themestek-portfolio-box-view-overlay-icon-desc .themestek-media-link a, 
.themestek-teambox-left-image .themestek-box-content ul li a:hover{
	background-color: <?php echo esc_attr($skincolor); ?>;
}
.comment-body .reply a,
.themestek-box-team-style4 .themestek-box-content,
.twentytwenty-handle,
.themestek-box-team-style-3.themestek-box .ts-team-social-links li a:hover,
.themestek-portfolio-box-view-overlay-simple.themestek-box-view-overlay .themestek-overlay,
.themestek-portfolio-box-view-overlay-two-icon-title.themestek-box-view-overlay .themestek-overlay,
.themestek-portfolio-box-view-overlay-two-icon-skin.themestek-box-view-overlay .themestek-overlay{
	background-color: rgba( <?php echo themestek_hex2rgb($skincolor); ?> , 0.80) ;
}


.ts-bt-skincolor{
	background-color: <?php echo esc_attr($skincolor); ?> !important;
}




/**
 * 3. Tabs and Accordion
 * ----------------------------------------------------------------------------
 */

/******** Tab style ********/

/* Tab flat style */
.wpb-js-composer .vc_tta-style-flat.vc_tta-color-skincolor .vc_tta-tab>a,
.wpb-js-composer .vc_tta-style-flat.vc_tta-color-skincolor .vc_tta-panel .vc_tta-panel-heading,
.wpb-js-composer .vc_tta-style-flat.vc_tta-color-skincolor .vc_tta-panel.vc_active .vc_tta-panel-heading,
.wpb-js-composer .vc_tta-style-flat.vc_tta-color-skincolor .vc_tta-tab>a:focus, 
.wpb-js-composer .vc_tta-style-flat.vc_tta-color-skincolor .vc_tta-tab>a:hover,
.wpb-js-composer .vc_tta-style-flat.vc_tta-color-skincolor .vc_tta-tab.vc_active>a,

/* Tab modern style */
.wpb-js-composer .vc_tta-style-modern.vc_tta-color-skincolor .vc_tta-tab>a, 
.wpb-js-composer .vc_tta-style-modern.vc_tta-color-skincolor .vc_tta-panel .vc_tta-panel-heading,


/* Tab classic style */
.wpb-js-composer .vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-tab.vc_active > a, 
.wpb-js-composer .vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-tab > a:focus,
.wpb-js-composer .vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-tab > a:hover,
.wpb-js-composer .vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-tab.vc_active > a,
.wpb-js-composer .vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-panel.vc_active .vc_tta-panel-title>a{
	background-color: <?php echo esc_attr($skincolor); ?>;
}


.wpb-js-composer .vc_tta-style-flat.vc_tta-color-skincolor:not(.vc_tta-o-no-fill) .vc_tta-panel .vc_tta-panel-body{
	background-color: rgba( <?php echo themestek_hex2rgb($skincolor); ?> , 0.80);
}

/* Tab outline style */
.wpb-js-composer .vc_tta-container  .vc_tta-style-outline.vc_tta.vc_general.vc_tta-color-skincolor .vc_tta-tab.vc_active>a {
    border-color: <?php echo esc_attr($skincolor); ?>;    
    color: <?php echo esc_attr($skincolor); ?>;
}
.wpb-js-composer .vc_tta-style-outline.vc_tta-color-skincolor .vc_tta-panel .vc_tta-panel-heading,
.wpb-js-composer .vc_tta-style-outline.vc_tta-color-skincolor .vc_tta-tab>a {
    border-color: <?php echo esc_attr($skincolor); ?>;    
    color: <?php echo esc_attr($skincolor); ?>;
}
.wpb-js-composer .vc_tta-style-outline.vc_tta-color-skincolor .vc_tta-panel .vc_tta-panel-heading:hover,
.wpb-js-composer .vc_tta-style-outline.vc_tta-color-skincolor .vc_tta-tab>a:focus, 
.wpb-js-composer .vc_tta-style-outline.vc_tta-color-skincolor .vc_active .vc_tta-tab>a:hover{
	background-color: <?php echo esc_attr($skincolor); ?>;
}


.wpb-js-composer .vc_tta-color-skincolor.vc_tta-style-outline .vc_tta-tab>a:focus, 
.wpb-js-composer .vc_tta-color-skincolor.vc_tta-style-outline .vc_tta-tab>a:hover {
    background-color: <?php echo esc_attr($skincolor); ?>;
}



.wpb-js-composer .vc_tta-style-outline.vc_tta-color-skincolor .vc_tta-panel.vc_active .vc_tta-panel-title>a{
	color: <?php echo esc_attr($skincolor); ?>;
}
 .wpb-js-composer .vc_tta-color-skincolor.vc_tta-style-outline:not(.vc_tta-o-no-fill) .vc_tta-panel .vc_tta-panel-body,
 .wpb-js-composer .vc_tta-accordion.vc_tta-style-outline.vc_tta-color-skincolor .vc_tta-panel.vc_active .vc_tta-panel-heading{
 	border-color: <?php echo esc_attr($skincolor); ?>;    
}


/******** Accordion style ********/
/* Tab classic style */
.wpb-js-composer .vc_tta-color-skincolor.vc_tta-style-classic:not(.vc_tta-o-no-fill) .vc_tta-panel .vc_tta-panel-body {
    background-color: <?php echo esc_attr($skincolor); ?>;
}
.wpb-js-composer .vc_tta-accordion.vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-panel.vc_active .vc_tta-panel-heading,
.wpb-js-composer .vc_tta-accordion.vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-panel .vc_tta-panel-heading:focus, 
.wpb-js-composer .vc_tta-accordion.vc_tta-style-classic.vc_tta-color-skincolor .vc_tta-panel .vc_tta-panel-heading:hover {
	background-color: <?php echo esc_attr($skincolor); ?>;
}


/**
 * Border color
 * ----------------------------------------------------------------------------
 */
.ts-clientbox-style-2:hover .themestek-item-thumbnail,

.ts-vc_btn3-style-outline.ts-vc_btn3-color-skincolor:not(.ts-vc_btn3-style-text),
.wpb-js-composer .vc_tta-color-skincolor.vc_tta-style-modern .vc_tta-tab>a{
	border-color: <?php echo esc_attr($skincolor); ?>;
}
.main-form .select2-container--default .select2-selection--single .select2-selection__arrow b {
    border-color: <?php echo esc_attr($skincolor); ?> transparent transparent transparent;
}
.main-form  .select2-container--default.select2-container--open .select2-selection--single .select2-selection__arrow b {
    border-color: transparent transparent <?php echo esc_attr($skincolor); ?> transparent;
    border-width: 0 4px 5px 4px;
}

/* Progress Bar Section */
.vc_progress_bar .vc_general.vc_single_bar.vc_progress-bar-color-skincolor span.ts-vc_label_units.vc_label_units:before,
span.ts-vc_label_units.vc_label_units:before{ 
	border-color: <?php echo esc_attr($skincolor); ?> transparent; 
}
.nav-links .nav-next:before, .nav-links .nav-previous:before{
	border-bottom-color: <?php echo esc_attr($skincolor); ?>; 
}
body table.booked-calendar td.today .date span,
body table.booked-calendar th{
	border-color: <?php echo esc_attr($skincolor); ?> !important;
}
.slick-dots li.slick-active button{
	box-shadow: inset 0 0 0 2px <?php echo esc_attr($skincolor); ?>;
}


 /************************ Mega Main Menu **************************/  
ul.nav-menu li ul li a, 
div.nav-menu > ul li ul li a, 
.ts-mmmenu-override-yes #site-header-menu #site-navigation .mega-menu-wrap .mega-menu.mega-menu-horizontal .mega-sub-menu a{
	opacity: 0.95;
}
#site-header-menu #site-navigation div.nav-menu > ul > li li.current_page_ancestor > a, 
#site-header-menu #site-navigation div.nav-menu > ul > li li.current_page_item > a, 
#site-header-menu #site-navigation div.nav-menu > ul > li li.current_page_parent > a, 
#site-header-menu #site-navigation div.nav-menu > ul > li li.current-menu-ancestor > a, 
#site-header-menu #site-navigation div.nav-menu > ul > li li.current-menu-parent > a, 
#site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.current-menu-item > a, 
#site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.mega-current-menu-item > a,
#site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.mega-current-menu-ancestor > a{
	opacity: 1;
}


<?php if( $dropmenu_active_link_color=='custom' && !empty($dropmenu_active_link_custom_color) ){ ?>
	/* Dropdown Menu Active Link Color -------------------------------- */   
	.ts-dmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li li.current_page_ancestor > a,
	.ts-dmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li li.current_page_item > a,
	.ts-dmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li li.current-menu-item > a,
	.ts-dmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li li.current_page_parent > a, 
	.ts-dmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li li.current-menu-ancestor > a, 
	.ts-dmenu-active-color-custom #site-header-menu #site-navigation div.nav-menu > ul > li li.current-menu-parent > a,       
	        
	.ts-dmenu-active-color-custom #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.current-menu-item > a,    
	.ts-dmenu-active-color-custom #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.mega-current-menu-item > a,    

	.ts-dmenu-active-color-custom #site-header-menu #site-navigation div.mega-menu-wrap ul.mega-menu.mega-menu-horizontal > li.mega-menu-item ul.mega-sub-menu li.mega-current-menu-ancestor > a {
	    color: <?php echo esc_attr($dropmenu_active_link_custom_color); ?>;
	}
<?php } ?>


/*.ts-servicebox-style-2*/
.ts-servicebox-style-2 .themestek-serviceimagebox{
	border-color: <?php echo esc_attr($skincolor); ?>;
}

.ts-ihbox-style-6 .ts-ihbox-icon-wrapper{	
	background-color: <?php echo esc_attr($skincolor); ?>;
}

.ts-search-overlay input[type="search"]{
	border-bottom-color: <?php echo esc_attr($skincolor); ?>;
}

/* Blog box style */  
.widget_recent_entries a,
.footer .social-icons li > a,
.ts-bgcolor-skincolor .ts-blogbox-style-1 .ts-post-format-icon-w i,
.ts-blogbox-style-1 .themestek-blogbox-footer-left a:hover,
.themestek-box-blog-classic .more-link-wrapper a:hover,
.ts-blogbox-style-1 .ts-entry-meta-wrapper a,
.ts-blogbox-style-1 .ts-entry-meta-wrapper{
	color: <?php echo esc_attr($skincolor); ?>;
}
.ts-blogbox-style-1 .ts-post-format-icon-w {
	border-top-color: <?php echo esc_attr($skincolor); ?>;
}
.themestek-boxes-testimonial.themestek-boxes-view-carousel.themestek-boxes-col-one.ts-boxes-carousel-arrows-below.ts-right-arrow .themestek-boxes-row-wrapper .slick-next,
.themestek-boxes-testimonial.themestek-boxes-view-carousel.themestek-boxes-col-one.ts-boxes-carousel-arrows-below.ts-right-arrow .themestek-boxes-row-wrapper .slick-prev,
.ts-team-member-single-content-wrapper .ts-team-social-links li a{
	background-color: <?php echo esc_attr($skincolor); ?>;
}
.ts-servicebox-style-2 .themestek-overlay{
	background-color: rgba( <?php echo themestek_hex2rgb($skincolor); ?> , 0.80);
}
.ts-search-overlay{
	background-color: rgba( <?php echo themestek_hex2rgb($skincolor); ?> , 0.90);
}
.ts-blogbox-style-1 .ts-post-format-icon-w,
.ts-headerstyle-classic.ts-slider-yes #ts-home{
	border-top-color: <?php echo esc_attr($skincolor); ?>;
}

/************************ End Mega Main Menu **************************/  






/* ********************* Responsive Menu Code Start *************************** */
<?php
/*
 *  Generate dynamic style for responsive menu. The code with breakpoint.
 */
require_once( get_template_directory() .'/css/theme-menu-style.php' ); // Functions
?>
/* ********************** Responsive Menu Code END **************************** */




/******************************************************/
/******************* Custom Code **********************/

<?php
// We are not escaping / sanitizing as we are expecting css code. 
$custom_css_code = themestek_get_option('custom_css_code');
if( !empty($custom_css_code) ){
	$custom_css_code = str_replace( '&gt;', '>', $custom_css_code);
	$custom_css_code = str_replace( '&gt;', '>', $custom_css_code);
	$custom_css_code = str_replace( '&gt;', '>', $custom_css_code);
	$custom_css_code = str_replace( '&gt;', '>', $custom_css_code);
	$custom_css_code = str_replace( '&gt;', '>', $custom_css_code);
	echo trim($custom_css_code);
}
?>

/******************************************************/
