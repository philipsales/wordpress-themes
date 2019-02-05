<?php

/* Options */


// Social services
$sociallist = array(
	esc_attr__('Select service','labtechco') => '',
	'Twitter'      => 'twitter',
	'YouTube'      => 'youtube',
	'Flickr'       => 'flickr',
	'Facebook'     => 'facebook',
	'LinkedIn'     => 'linkedin',
	'Google+'      => 'gplus',
	'yelp'         => 'yelp',
	'Dribbble'     => 'dribbble',
	'Pinterest'    => 'pinterest',
	'Podcast'      => 'podcast',
	'Instagram'    => 'instagram',
	'Xing'         => 'xing',
	'Vimeo'        => 'vimeo',
	'VK'           => 'vk',
	'Houzz'        => 'houzz',
	'Issuu'        => 'issuu',
	'Google Drive' => 'google-drive',
	'Rss Feed'     => 'rss',
);



/**
 * Boxes Appearance options
 */
$boxParams = ts_box_params();


$allParams = array_merge(
	$heading_element,
	array(
		array(
			'type'        => 'textfield',
			'heading'     => esc_attr__( 'Extra class name', 'labtechco' ),
			'param_name'  => 'el_class',
			'description' => esc_attr__( 'Style particular content element differently - add a class name and refer to it in custom CSS.', 'labtechco' ),
		),
		array(
			'type'        => 'param_group',
			'heading'     => esc_attr__( 'Social Services List', 'labtechco' ),
			'param_name'  => 'socialservices',
			'description' => esc_attr__( 'Select social service and add URL for it.', 'labtechco' ).'<br><strong>'.esc_attr__('NOTE:','labtechco').'</strong> '.esc_attr__("You don't need to add URL if you are selecting 'RSS' in the social service",'labtechco'),
			'group'       => esc_attr__( 'Social Services', 'labtechco' ),
			'params'     => array(
				array( // First social service
					'type'        => 'dropdown',
					'heading'     => esc_attr__( 'Select Social Service', 'labtechco' ),
					'param_name'  => 'servicename',
					'std'         => 'none',
					'value'       => $sociallist,
					'description' => esc_attr__( 'Select social service', 'labtechco' ),
					'group'       => esc_attr__( 'Social Services', 'labtechco' ),
					'admin_label' => true,
					'edit_field_class' => 'vc_col-sm-4 vc_column',
				),
				array(
					'type'        => 'textarea',
					'heading'     => esc_attr__( 'Social URL', 'labtechco' ),
					'param_name'  => 'servicelink',
					'dependency'  => array(
						'element'            => 'servicename',
						'value_not_equal_to' => array( 'rss' )
					),
					'value'       => '',
					'description' => esc_attr__( 'Fill social service URL', 'labtechco' ),
					'group'       => esc_attr__( 'Social Services', 'labtechco' ),
					'admin_label' => true,
					'edit_field_class' => 'vc_col-sm-8 vc_column',
				),
			),
		),
		array( // First social service
			'type'        => 'dropdown',
			'heading'     => esc_attr__( 'Select column', 'labtechco' ),
			'param_name'  => 'column',
			'value'       => array(
				esc_attr__('One column','labtechco')   => 'one',
				esc_attr__('Two column','labtechco')   => 'two',
				esc_attr__('Three column','labtechco') => 'three',
				esc_attr__('Four column','labtechco')  => 'four',
				esc_attr__('Five column','labtechco')  => 'five',
				esc_attr__('Six column','labtechco')   => 'six',
			),
			'std'         => 'six',
			'description' => esc_attr__( 'Select how many column will show the social icons', 'labtechco' ),
			'group'       => esc_attr__( 'Social Services', 'labtechco' ),
			'edit_field_class' => 'vc_col-sm-6 vc_column',
		),
		array( // First social service
			'type'        => 'dropdown',
			'heading'     => esc_attr__( 'Social icon size', 'labtechco' ),
			'param_name'  => 'iconsize',
			'std'         => 'large',
			'value'       => array(
				esc_attr__('Small icon','labtechco')  => 'small',
				esc_attr__('Medium icon','labtechco') => 'medium',
				esc_attr__('Large icon','labtechco')  => 'large',
			),
			'description' => esc_attr__( 'Select social icon size', 'labtechco' ),
			'group'       => esc_attr__( 'Social Services', 'labtechco' ),
			'edit_field_class' => 'vc_col-sm-6 vc_column',
		),
	),
	$boxParams,
	array(
		ts_vc_ele_css_editor_option(),
	)
);


$params = $allParams;


global $ts_sc_params_clients;
$ts_sc_params_clients = $params;


vc_map( array(
	"name"     => esc_attr__("ThemeStek Social Box", "labtechco"),
	"base"     => "ts-socialbox",
	"icon"     => "icon-themestek-vc",
	'category' => esc_attr__( 'THEMESTEK', 'labtechco' ),
	"params"   => $params,
) );