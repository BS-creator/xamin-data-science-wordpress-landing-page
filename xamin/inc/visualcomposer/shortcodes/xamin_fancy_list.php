<?php
// Fancy List
vc_map(
	array(
		"name" 			=> esc_html__("Fancy List","xamin" ),
		"base" 			=> "consulfancyList",
		"description" 	=> esc_html__( "xamin fancy list","xamin" ),
		"category" 		=> esc_html__( "Xamin Shortcodes","xamin" ),
		"icon" 			=> "icon-wpb-xamintitle",
		"params" => array(
			 array(
                "heading"       => esc_html__( "Select Style","xamin" ),
                "description"   => wp_kses( __( "Position of the title text.","xamin"), array( "br" => array() ) ),
                "type"          => "dropdown",
                "param_name"    => "style_type",
                "value"         => array(
                                        "Style 1" => "0",
                                        "Style 2" => "1",
                                   ),
                ),

            array(
				"heading" 		=> esc_html__( "Title","xamin" ),
				"description" 	=> esc_html__( "Enter the title","xamin"),
				"type" 			=> "textfield",
                "param_name" 	=> "xamintitle_content",
                "value"         => esc_html__("Easy to Customize","xamin" ),
			),

			array(
				"heading" 		=> esc_html__( "Element Tag","xamin" ),
				"description" 	=> esc_html__( "Element Tag of the title text.","xamin"),
				"type" 			=> "dropdown",
				"param_name" 	=> "tag",
				"edit_field_class" => "vc_col-xs-6",
				"value" => array(
								"1" => "h2",
								"2" => "h3",
								"3" => "h4",
								"4" => "h5",
								"5" => "h6",
							),
            ),

            array(
				"heading" 		=> esc_html__( "Alignment","xamin" ),
				"description" 	=> esc_html__( "Alignment of the title text.","xamin"),
				"type" 			=> "dropdown",
                "param_name" 	=> "position",
                "edit_field_class" => "vc_col-xs-6",
				"value" => array(
								"Left" =>  "left",
								"Center" => "center",
								"Right" => "right",
							),
            ),

            array(
                "heading"		=> esc_html__( "Title Color","xamin" ),
                "type"			=> "colorpicker",
                "edit_field_class" => "vc_col-xs-6",
                "param_name"	=> "title_color",
                "value"      => "#313e5b",
            ),

            array( 
                "type" => "checkbox",
                "holder" => "div",
                "admin_label" => true,
                "heading" => esc_html__( "Effect on Hover", "xamin" ),
                "edit_field_class" => "vc_col-xs-6",
                "param_name" => "effect_on_hover",
                "dependency"  => array
                    (
                    "element"  => "style_type",
                    "value" => array ("1") ,
                    ),
                "value"       => array(
                    "enabal" => "0",
                ),                     
                "description" => esc_html__( "If selected, arrow effect is enabal","xamin"),
            ),
            
            array(
                "heading"       => esc_html__( "Contant","xamin" ),
                "description"   => esc_html__( "Enter the Contant","xamin"),
                "type"          => "textarea",
                "param_name"    => "fancylist_content",
                "value"         => esc_html__("It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.","xamin" ),
            ),

            array(
                "type"        => "attach_image",
                "heading"     => esc_html__( "Image", "xamin" ),
                "param_name"  => "image",
                "description" => "Select image from library.",
            ),
            
			array(
			"heading"		=> esc_html__( "Add List", "xamin" ),
			"description"	=> esc_html__( "Enter Your List Data.", "xamin" ),
            "type"			=> "param_group",
            "group" => esc_html__( "List", "xamin" ),
			"param_name"	=> "features",
			"params" => array(

                    array(
                    "heading" 		=> esc_html__( "Text","xamin" ),
                    "description" 	=> esc_html__( "Enter the Text","xamin"),
                    "type" 			=> "textarea",
                    "param_name" 	=> "xaminsubtitle_content",
                    "value"         => esc_html__( "Simply dummy text of the Lorem Ipsum is printing and type setting industry.","xamin" ),
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
                           
                        ),
                        "param_name" => "type",
                        "description" => esc_html__( "Select icon library.", "xamin" ),
                        "group" => esc_html__( "Icon", "xamin" ),
                        "dependency" => array(
                            "element" => "icon_type",
                            "value" => "iq-icon",
                        ),
                    ),
					
				array(
                        "type" => "iconpicker",
                        "heading" => esc_html__( "Icon", "xamin" ),
                        "param_name" => "fontawesome",
                        "value" => "fa fa-adjust", 
                        "settings" => array(
                            "emptyIcon" => false,
                            "iconsPerPage" => 4000,
                        ),
                        "group" => esc_html__( "Icon", "xamin" ),
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
                        "value" => "vc-oi vc-oi-dial", 
                        "settings" => array(
                            "emptyIcon" => false, 
                            "type" => "openiconic",
                            "iconsPerPage" => 4000, 
                        ),
                        "group" => esc_html__( "Icon", "xamin" ),
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
                        "value" => "typcn typcn-adjust-brightness", 
                        "settings" => array(
                            "emptyIcon" => false, 
                            "type" => "typicons",
                            "iconsPerPage" => 4000, 
                        ),
                        "group" => esc_html__( "Icon", "xamin" ),
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
                        "value" => "entypo-icon entypo-icon-note", 
                        "settings" => array(
                            "emptyIcon" => false, 
                            "type" => "entypo",
                            "iconsPerPage" => 4000, 
                        ),
                        "group" => esc_html__( "Icon", "xamin" ),
                        "dependency" => array(
                            "element" => "type",
                            "value" => "entypo",
                        ),
                    ),
                    array(
                        "type" => "iconpicker",
                        "heading" => esc_html__( "Icon", "xamin" ),
                        "param_name" => "linecons",
                        "value" => "vc_li vc_li-heart", 
                        "settings" => array(
                            "emptyIcon" => false, 
                            "type" => "linecons",
                            "iconsPerPage" => 4000, 
                        ),
                        "group" => esc_html__( "Icon", "xamin" ),
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
                            "emptyIcon" => false, 
                            "type" => "Ionicons",
                            "iconsPerPage" => 4000, 
                        ),
                        "group" => esc_html__( "Icon", "xamin" ),
                        "dependency" => array(
                            "element" => "type",
                            "value" => "Ionicons",
                        ),
                        "description" => esc_html__( "Select icon from library.", "xamin" ),
                    ),

			    ),	
            ),

            array(
                "heading"		=> esc_html__( "Text Color","xamin" ),
                "type"			=> "colorpicker",
                "group" => esc_html__( "List", "xamin" ),
                "edit_field_class" => "vc_col-xs-6",
                "param_name"	=> "list_text_color",
                "value"      => "#525f81",
            ),
            
            array(
                "heading"		=> esc_html__( "Icon Color","xamin" ),
                "type"			=> "colorpicker",
                "group" => esc_html__( "List", "xamin" ),
                "edit_field_class" => "vc_col-xs-6",
                "param_name"	=> "icon_color",
                "value"      => "#525f81",
            ),

            array(
				"heading"       => esc_html__( "Delay Time","xamin" ),
				"description"   => esc_html__( "Enter delay time of fancybox","xamin"),
				"type"          => "textfield",
				"group" => esc_html__( "Animation", "xamin" ),
				"param_name"    => "delay_time",
			),
            
            array(
				"type"        => "textfield",
				"heading"     => esc_html__( "Extra class name","xamin" ),
				"param_name"  => "extra_class",
				"description" => esc_html__( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.","xamin" ),
				"group" => esc_html__( "Extra class", "xamin" ),
            ),
            	
				
		),
	) 
);
?>