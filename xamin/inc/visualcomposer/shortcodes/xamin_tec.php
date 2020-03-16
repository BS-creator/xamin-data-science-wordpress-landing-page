<?php
vc_map(
	array(
		"name" 			=> esc_html__( "Tec","xamin" ),
		"base" 			=> "xamintec",
		"description" 	=> esc_html__( "xamin tec","xamin" ),
		"category" 		=> esc_html__( "Xamin Shortcodes","xamin" ),
		"icon" 			=> "icon-wpb-xamintec",
		"params" => array(

			/* First Image */
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Select Type", "xamin" ),
				"value" => array(
					esc_html__( "Icon", "xamin" ) => "iq-icon",
					esc_html__( "Image", "xamin" ) => "iq-image",
				),
				"admin_label" => true,
				"param_name" => "icon_type",
				"group" => esc_html__( "Image 1", "xamin" ),
				"description" => esc_html__( "Select icon Type.", "xamin" ),
			),


			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Icon library", "xamin" ),
				"value" => array(
					esc_html__( "Font Awesome", "xamin" ) => "fontawesome",
					esc_html__( "Open Iconic", "xamin" ) => "openiconic",
					esc_html__( "Typicons", "xamin" ) => "typicons",
					esc_html__( "Entypo", "xamin" ) => "entypo",
					esc_html__( "Linecons", "xamin" ) => "linecons",
					esc_html__( "Ionicons", "xamin" ) => "Ionicons",
					esc_html__( "Flaticon", "xamin" ) => "flaticon",
				),
				"admin_label" => true,
				"param_name" => "type",
				"description" => esc_html__( "Select icon library.", "xamin" ),
				"group" => esc_html__( "Image 1", "xamin" ),
				"dependency" => array(
					"element" => "icon_type",
					"value" => "iq-icon",
				),
			),
			
			array(
				"type" => "iconpicker",
				"heading" => esc_html__( "Icon", "xamin" ),
				"param_name" => "fontawesome",
				"value" => "fa fa-adjust", // default value to backend editor admin_label
				"settings" => array(
					"emptyIcon" => false,
					// default true, display an "EMPTY" icon?
					"iconsPerPage" => 4000,
					// default 100, how many icons per/page to display, we use (big number) to display all icons in single page
				),
				"group" => esc_html__( "Image 1", "xamin" ),
				"dependency" => array(
					"element" => "type",
					"value" => "fontawesome",
				),
				"description" => esc_html__( "Select icon from library.", "xamin" ),
			),
			array(
				"type" => "iconpicker",
				"heading" => esc_html__( "Icon", "xamin" ),
				"param_name" => "openiconic",
				"value" => "vc-oi vc-oi-dial", // default value to backend editor admin_label
				"settings" => array(
					"emptyIcon" => false, // default true, display an "EMPTY" icon?
					"type" => "openiconic",
					"iconsPerPage" => 4000, // default 100, how many icons per/page to display
				),
				"group" => esc_html__( "Image 1", "xamin" ),
				"dependency" => array(
					"element" => "type",
					"value" => "openiconic",
				),
				"description" => esc_html__( "Select icon from library.", "xamin" ),
			),
			array(
				"type" => "iconpicker",
				"heading" => esc_html__( "Icon", "xamin" ),
				"param_name" => "typicons",
				"value" => "typcn typcn-adjust-brightness", // default value to backend editor admin_label
				"settings" => array(
					"emptyIcon" => false, // default true, display an "EMPTY" icon?
					"type" => "typicons",
					"iconsPerPage" => 4000, // default 100, how many icons per/page to display
				),
				"group" => esc_html__( "Image 1", "xamin" ),
				"dependency" => array(
					"element" => "type",
					"value" => "typicons",
				),
				"description" => esc_html__( "Select icon from library.", "xamin" ),
			),
			array(
				"type" => "iconpicker",
				"heading" => esc_html__( "Icon", "xamin" ),
				"param_name" => "entypo",
				"value" => "entypo-icon entypo-icon-note", // default value to backend editor admin_label
				"settings" => array(
					"emptyIcon" => false, // default true, display an "EMPTY" icon?
					"type" => "entypo",
					"iconsPerPage" => 4000, // default 100, how many icons per/page to display
				),
				"group" => esc_html__( "Image 1", "xamin" ),
				"dependency" => array(
					"element" => "type",
					"value" => "entypo",
				),
			),
			array(
				"type" => "iconpicker",
				"heading" => esc_html__( "Icon", "xamin" ),
				"param_name" => "linecons",
				"value" => "vc_li vc_li-heart", // default value to backend editor admin_label
				"settings" => array(
					"emptyIcon" => false, // default true, display an "EMPTY" icon?
					"type" => "linecons",
					"iconsPerPage" => 4000, // default 100, how many icons per/page to display
				),
				"group" => esc_html__( "Image 1", "xamin" ),
				"dependency" => array(
					"element" => "type",
					"value" => "linecons",
				),
				"description" => esc_html__( "Select icon from library.", "xamin" ),
			),
			array(
				"type" => "iconpicker",
				"heading" => esc_html__( "Icon", "xamin" ),
				"param_name" => "ionicons",
				"settings" => array(
					"emptyIcon" => false, // default true, display an "EMPTY" icon?
					"type" => "Ionicons",
					"iconsPerPage" => 4000, // default 100, how many icons per/page to display
				),
				"group" => esc_html__( "Image 1", "xamin" ),
				"dependency" => array(
					"element" => "type",
					"value" => "Ionicons",
				),
			),

			array(
				"type" => "iconpicker",
				"heading" => esc_html__( "Icon", "xamin" ),
				"param_name" => "flaticon",
				"settings" => array(
					"emptyIcon" => false,
					"type" => "flaticon",
					"iconsPerPage" => 4000, 
				),
				"group" => esc_html__( "Image 1", "xamin" ),
				"dependency" => array(
					"element" => "type",
					"value" => "flaticon",
				),
				"description" => esc_html__( "Select icon from library.", "xamin" ),
			), 

			array(
				"type"        => "attach_image",
				"heading"     => esc_html__( "Image", "xamin" ),
				"param_name"  => "image1",
				"description" => "Select image/icon from library.",
				"group" => esc_html__( "Image 1", "xamin" ),
				"dependency"  => array
									(
									"element"  => "icon_type",
									"value" => "iq-image" ,
									),
			),

			/** Second Image */
			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Select Type", "xamin" ),
				"value" => array(
					esc_html__( "Icon", "xamin" ) => "iq-icon2",
					esc_html__( "Image", "xamin" ) => "iq-image2",
				),
				"admin_label" => true,
				"param_name" => "icon_type2",
				"group" => esc_html__( "Image 2", "xamin" ),
				"description" => esc_html__( "Select icon Type.", "xamin" ),
			),


			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Icon library", "xamin" ),
				"value" => array(
					esc_html__( "Font Awesome", "xamin" ) => "fontawesome2",
					esc_html__( "Open Iconic", "xamin" ) => "openiconic2",
					esc_html__( "Typicons", "xamin" ) => "typicons2",
					esc_html__( "Entypo", "xamin" ) => "entypo2",
					esc_html__( "Linecons", "xamin" ) => "linecons2",
					esc_html__( "Ionicons", "xamin" ) => "Ionicons2",
					esc_html__( "Flaticon", "xamin" ) => "flaticon2",
				),
				"admin_label" => true,
				"param_name" => "type2",
				"description" => esc_html__( "Select icon library.", "xamin" ),
				"group" => esc_html__( "Image 2", "xamin" ),
				"dependency" => array(
					"element" => "icon_type2",
					"value" => "iq-icon2",
				),
			),
			
			array(
				"type" => "iconpicker",
				"heading" => esc_html__( "Icon", "xamin" ),
				"param_name" => "fontawesome2",
				"value" => "fa fa-adjust", // default value to backend editor admin_label
				"settings" => array(
					"emptyIcon" => false,
					// default true, display an "EMPTY" icon?
					"iconsPerPage" => 4000,
					// default 100, how many icons per/page to display, we use (big number) to display all icons in single page
				),
				"group" => esc_html__( "Image 2", "xamin" ),
				"dependency" => array(
					"element" => "type2",
					"value" => "fontawesome2",
				),
				"description" => esc_html__( "Select icon from library.", "xamin" ),
			),
			array(
				"type" => "iconpicker",
				"heading" => esc_html__( "Icon", "xamin" ),
				"param_name" => "openiconic2",
				"value" => "vc-oi vc-oi-dial", // default value to backend editor admin_label
				"settings" => array(
					"emptyIcon" => false, // default true, display an "EMPTY" icon?
					"type" => "openiconic",
					"iconsPerPage" => 4000, // default 100, how many icons per/page to display
				),
				"group" => esc_html__( "Image 2", "xamin" ),
				"dependency" => array(
					"element" => "type2",
					"value" => "openiconic2",
				),
				"description" => esc_html__( "Select icon from library.", "xamin" ),
			),
			array(
				"type" => "iconpicker",
				"heading" => esc_html__( "Icon", "xamin" ),
				"param_name" => "typicons2",
				"value" => "typcn typcn-adjust-brightness", // default value to backend editor admin_label
				"settings" => array(
					"emptyIcon" => false, // default true, display an "EMPTY" icon?
					"type" => "typicons",
					"iconsPerPage" => 4000, // default 100, how many icons per/page to display
				),
				"group" => esc_html__( "Image 2", "xamin" ),
				"dependency" => array(
					"element" => "type2",
					"value" => "typicons2",
				),
				"description" => esc_html__( "Select icon from library.", "xamin" ),
			),
			array(
				"type" => "iconpicker",
				"heading" => esc_html__( "Icon", "xamin" ),
				"param_name" => "entypo2",
				"value" => "entypo-icon entypo-icon-note", // default value to backend editor admin_label
				"settings" => array(
					"emptyIcon" => false, // default true, display an "EMPTY" icon?
					"type" => "entypo",
					"iconsPerPage" => 4000, // default 100, how many icons per/page to display
				),
				"group" => esc_html__( "Image 2", "xamin" ),
				"dependency" => array(
					"element" => "type2",
					"value" => "entypo2",
				),
			),
			array(
				"type" => "iconpicker",
				"heading" => esc_html__( "Icon", "xamin" ),
				"param_name" => "linecons2",
				"value" => "vc_li vc_li-heart", // default value to backend editor admin_label
				"settings" => array(
					"emptyIcon" => false, // default true, display an "EMPTY" icon?
					"type" => "linecons",
					"iconsPerPage" => 4000, // default 100, how many icons per/page to display
				),
				"group" => esc_html__( "Image 2", "xamin" ),
				"dependency" => array(
					"element" => "type2",
					"value" => "linecons2",
				),
				"description" => esc_html__( "Select icon from library.", "xamin" ),
			),
			array(
				"type" => "iconpicker",
				"heading" => esc_html__( "Icon", "xamin" ),
				"param_name" => "ionicons2",
				"settings" => array(
					"emptyIcon" => false, // default true, display an "EMPTY" icon?
					"type" => "Ionicons",
					"iconsPerPage" => 4000, // default 100, how many icons per/page to display
				),
				"group" => esc_html__( "Image 2", "xamin" ),
				"dependency" => array(
					"element" => "type2",
					"value" => "Ionicons2",
				),
			),

			array(
				"type" => "iconpicker",
				"heading" => esc_html__( "Icon", "xamin" ),
				"param_name" => "flaticon2",
				"settings" => array(
					"emptyIcon" => false,
					"type" => "flaticon",
					"iconsPerPage" => 4000, 
				),
				"group" => esc_html__( "Image 2", "xamin" ),
				"dependency" => array(
					"element" => "type2",
					"value" => "flaticon2",
				),
				"description" => esc_html__( "Select icon from library.", "xamin" ),
			),

			array(
				"type"        => "attach_image",
				"heading"     => esc_html__( "Image", "xamin" ),
				"param_name"  => "image2",
				"description" => "Select image/icon from library.",
				"group" => esc_html__( "Image 2", "xamin" ),
				"dependency"  => array
									(
									"element"  => "icon_type2",
									"value" => "iq-image2" ,
									),
			),

			/** Third Image */

			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Select Type", "xamin" ),
				"value" => array(
					esc_html__( "Icon", "xamin" ) => "iq-icon3",
					esc_html__( "Image", "xamin" ) => "iq-image3",
				),
				"admin_label" => true,
				"param_name" => "icon_type3",
				"group" => esc_html__( "Image 3", "xamin" ),
				"description" => esc_html__( "Select icon Type.", "xamin" ),
			),


			array(
				"type" => "dropdown",
				"heading" => esc_html__( "Icon library", "xamin" ),
				"value" => array(
					esc_html__( "Font Awesome", "xamin" ) => "fontawesome3",
					esc_html__( "Open Iconic", "xamin" ) => "openiconic3",
					esc_html__( "Typicons", "xamin" ) => "typicons3",
					esc_html__( "Entypo", "xamin" ) => "entypo3",
					esc_html__( "Linecons", "xamin" ) => "linecons3",
					esc_html__( "Ionicons", "xamin" ) => "Ionicons3",
					esc_html__( "Flaticon", "xamin" ) => "flaticon3",
				),
				"admin_label" => true,
				"param_name" => "type3",
				"description" => esc_html__( "Select icon library.", "xamin" ),
				"group" => esc_html__( "Image 3", "xamin" ),
				"dependency" => array(
					"element" => "icon_type3",
					"value" => "iq-icon3",
				),
			),
			
			array(
				"type" => "iconpicker",
				"heading" => esc_html__( "Icon", "xamin" ),
				"param_name" => "fontawesome3",
				"value" => "fa fa-adjust", // default value to backend editor admin_label
				"settings" => array(
					"emptyIcon" => false,
					// default true, display an "EMPTY" icon?
					"iconsPerPage" => 4000,
					// default 100, how many icons per/page to display, we use (big number) to display all icons in single page
				),
				"group" => esc_html__( "Image 3", "xamin" ),
				"dependency" => array(
					"element" => "type3",
					"value" => "fontawesome3",
				),
				"description" => esc_html__( "Select icon from library.", "xamin" ),
			),
			array(
				"type" => "iconpicker",
				"heading" => esc_html__( "Icon", "xamin" ),
				"param_name" => "openiconic3",
				"value" => "vc-oi vc-oi-dial", // default value to backend editor admin_label
				"settings" => array(
					"emptyIcon" => false, // default true, display an "EMPTY" icon?
					"type" => "openiconic",
					"iconsPerPage" => 4000, // default 100, how many icons per/page to display
				),
				"group" => esc_html__( "Image 3", "xamin" ),
				"dependency" => array(
					"element" => "type3",
					"value" => "openiconic3",
				),
				"description" => esc_html__( "Select icon from library.", "xamin" ),
			),
			array(
				"type" => "iconpicker",
				"heading" => esc_html__( "Icon", "xamin" ),
				"param_name" => "typicons3",
				"value" => "typcn typcn-adjust-brightness", // default value to backend editor admin_label
				"settings" => array(
					"emptyIcon" => false, // default true, display an "EMPTY" icon?
					"type" => "typicons",
					"iconsPerPage" => 4000, // default 100, how many icons per/page to display
				),
				"group" => esc_html__( "Image 3", "xamin" ),
				"dependency" => array(
					"element" => "type3",
					"value" => "typicons3",
				),
				"description" => esc_html__( "Select icon from library.", "xamin" ),
			),
			array(
				"type" => "iconpicker",
				"heading" => esc_html__( "Icon", "xamin" ),
				"param_name" => "entypo3",
				"value" => "entypo-icon entypo-icon-note", // default value to backend editor admin_label
				"settings" => array(
					"emptyIcon" => false, // default true, display an "EMPTY" icon?
					"type" => "entypo",
					"iconsPerPage" => 4000, // default 100, how many icons per/page to display
				),
				"group" => esc_html__( "Image 3", "xamin" ),
				"dependency" => array(
					"element" => "type3",
					"value" => "entypo3",
				),
			),
			array(
				"type" => "iconpicker",
				"heading" => esc_html__( "Icon", "xamin" ),
				"param_name" => "linecons3",
				"value" => "vc_li vc_li-heart", // default value to backend editor admin_label
				"settings" => array(
					"emptyIcon" => false, // default true, display an "EMPTY" icon?
					"type" => "linecons",
					"iconsPerPage" => 4000, // default 100, how many icons per/page to display
				),
				"group" => esc_html__( "Image 3", "xamin" ),
				"dependency" => array(
					"element" => "type3",
					"value" => "linecons3",
				),
				"description" => esc_html__( "Select icon from library.", "xamin" ),
			),
			array(
				"type" => "iconpicker",
				"heading" => esc_html__( "Icon", "xamin" ),
				"param_name" => "ionicons3",
				"settings" => array(
					"emptyIcon" => false, // default true, display an "EMPTY" icon?
					"type" => "Ionicons",
					"iconsPerPage" => 4000, // default 100, how many icons per/page to display
				),
				"group" => esc_html__( "Image 3", "xamin" ),
				"dependency" => array(
					"element" => "type3",
					"value" => "Ionicons3",
				),
			),

			array(
				"type" => "iconpicker",
				"heading" => esc_html__( "Icon", "xamin" ),
				"param_name" => "flaticon3",
				"settings" => array(
					"emptyIcon" => false,
					"type" => "flaticon",
					"iconsPerPage" => 4000, 
				),
				"group" => esc_html__( "Image 3", "xamin" ),
				"dependency" => array(
					"element" => "type3",
					"value" => "flaticon3",
				),
				"description" => esc_html__( "Select icon from library.", "xamin" ),
			), 

			array(
				"type"        => "attach_image",
				"heading"     => esc_html__( "Image", "xamin" ),
				"param_name"  => "image3",
				"description" => "Select image/icon from library.",
				"group" => esc_html__( "Image 3", "xamin" ),
				"dependency"  => array
									(
									"element"  => "icon_type3",
									"value" => "iq-image3" ,
									),
			),

			array(
				"heading" 		=> esc_html__( "Title","xamin" ),
				"description" 	=> esc_html__( "Enter the title","xamin"),
				"type" 			=> "textfield",
				"param_name" 	=> "xamintec_title",
				"group" => esc_html__( "Title", "xamin" ),
			),

			array(
				"heading" 		=> esc_html__( "Title Element Tag","xamin" ),
				"description" 	=> wp_kses( __( "Element Tag of the title text.","xamin"), array( "br" => array() ) ),
				"type" 			=> "dropdown",
				"param_name" 	=> "tag",
				"edit_field_class" => "vc_col-xs-6",
				"group" => esc_html__( "Title", "xamin" ),
				"value" => array(
								"1" => "h2",
								"2" => "h3",
								"3" => "h4",
								"4" => "h5",
								"5" => "h6",
							),
			),

			array(
                "heading"		=> esc_html__( "Title Color","xamin" ),
                "type"			=> "colorpicker",
				"edit_field_class" => "vc_col-xs-6",
				"group" => esc_html__( "Title", "xamin" ),
                "param_name"	=> "title_color",
                "value"      => "#313e5b",
            ),

			array(
				"type"        => "textfield",
				"heading"     => esc_html__( "Extra class name","xamin" ),
				"param_name"  => "extra_class",
				"group" => esc_html__( "Extra Class", "xamin" ),
				"description" => esc_html__( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.","xamin" )
			),


			array(
				"type" => "css_editor",
				"heading" => esc_html__( "Css", "xamin" ),
				"param_name" => "css",
				"group" => esc_html__( "Design options", "xamin" ),
			),
						
		),
	) 
);
?>