<?php
// Counter Box
vc_map(
	array(
		"name" 			=> esc_html__("Counter", "xamin"),
		"base" 			=> "xamincounter",
		"description" => esc_html__("xamin Counter", "xamin"), 
		"category" => esc_html__("Xamin Shortcodes", "xamin"),   
		"icon" 			=> "xamin_Portfolio",
		"params" => array(

            array(
                "type" => "dropdown",
                "heading" => esc_html__( "Select Counter Type", "xamin" ),
                "value" => array(
                    esc_html__( "Style 1", "xamin" ) => "Style1",
                    esc_html__( "Style 2", "xamin" ) => "Style2",
                    esc_html__( "Style 3", "xamin" ) => "Style3",
                    esc_html__( "Style 4", "xamin" ) => "Style4",
                ),
                "admin_label" => true,
                "param_name" => "counter_type",
                "description" => esc_html__( "Select Counter Type.", "xamin" ),
            ),
		
			array(
				"type"			=> "textfield",
				"heading"		=> esc_html__("Title","xamin"),
				"param_name"	=> "counter_title",
				"value"			=> "",
				"description" 	=> esc_html__( "Title","xamin")
            ),
            array(
                "type"          => "textfield",
                "heading"       => esc_html__("Text After Figure","xamin"),
                "param_name"    => "counter_postfix",
                "value"         => "",
                "description"   => esc_html__( "Postfix text","xamin"),
                "dependency"  => array (
                    "element"  => "counter_type",
                    "value" => array ("Style2","Style4") ,
                ),
            ),

            array(
                "heading"		=> esc_html__( "Title Color","xamin" ),
                "type"			=> "colorpicker",
                "edit_field_class" => "vc_col-xs-6",
                "param_name"	=> "title_color",
                "value"      => "#ffffff",
            ),
            
            
	        array(
				"type" 			=> "textfield",
				"heading" 		=> esc_html__( "Counter Figure Number","xamin" ),
				"param_name" 	=> "counter_content",
				"description" 	=> esc_html__( "Number Only Accepted.","xamin"),
            ),

            array(
                "heading"		=> esc_html__( "Counter Figure Color","xamin" ),
                "type"			=> "colorpicker",
                "edit_field_class" => "vc_col-xs-6",
                "param_name"	=> "number_color",
                "value"      => "#ffffff",
            ),
            array(
                "heading"       => esc_html__( "Icon Color","xamin" ),
                "type"          => "colorpicker",
                "edit_field_class" => "vc_col-xs-6",
                "param_name"    => "plus_icon_color",
                "value"      => "#437eeb",
            ),
            
            array( 
                "type" => "checkbox",
                "holder" => "div",
                "admin_label" => true,
                "heading" => esc_html__( "Disable Plus Icon", "xamin" ),
                "edit_field_class" => "vc_col-xs-6",
                "param_name" => "disble_plus",
                "value"       => array(
                    "disable" => "0",
                ),
                "dependency"  => array (
                    "element"  => "counter_type",
                    "value" => array ("Style1","Style2","Style3") ,
                ),                     
                "description" => esc_html__( "If selected, plus will disable.","xamin"),
            ),
            array( 
                "type" => "checkbox",
                "holder" => "div",
                "admin_label" => true,
                "heading" => esc_html__( "Disable Percentage Icon", "xamin" ),
                "edit_field_class" => "vc_col-xs-6",
                "param_name" => "disble_percentage",
                "value"       => array(
                    "disable" => "0",
                ),
                "dependency"  => array (
                    "element"  => "counter_type",
                    "value" => array ("Style1","Style2","Style3") ,
                ),                                          
                "description" => esc_html__( "If selected, plus will disable.","xamin"),
            ),

            

            array( 
                "type" => "checkbox",
                "holder" => "div",
                "admin_label" => true,
                "heading" => esc_html__( "Disable Icon", "xamin" ),
                "edit_field_class" => "vc_col-xs-6",
                "param_name" => "disble_icon",
                "value"       => array(
                    "disable" => "0",
                ),                                         
                "description" => "If selected, icon will disable.",
            ),

             array(
                    "heading"       => esc_html__( "Element Position","xamin" ),
                    "description"   => wp_kses( __( "Position of the title text.","xamin"), array( "br" => array() ) ),
                    "type"          => "dropdown",
                    "param_name"    => "position",
                    "value" => array(
                                "Left" =>  "left",
                                "Center" => "center",
                                "Right" => "right",
                            ),
                ),

			array(
                "type" => "dropdown",
                "heading" => esc_html__( "Select Type", "xamin" ),
                "value" => array(
                    esc_html__( "Icon", "xamin" ) => "iq-icon",
                    esc_html__( "Image", "xamin" ) => "iq-image",
                ),
                "admin_label" => true,
                "param_name" => "icon_type",
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
                    "value" => "fa fa-adjust", // default value to backend editor admin_label
                    "settings" => array(
                        "emptyIcon" => false,
                        // default true, display an "EMPTY" icon?
                        "iconsPerPage" => 4000,
                        // default 100, how many icons per/page to display, we use (big number) to display all icons in single page
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
                    "value" => "vc-oi vc-oi-dial", // default value to backend editor admin_label
                    "settings" => array(
                        "emptyIcon" => false, // default true, display an "EMPTY" icon?
                        "type" => "openiconic",
                        "iconsPerPage" => 4000, // default 100, how many icons per/page to display
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
                    "value" => "typcn typcn-adjust-brightness", // default value to backend editor admin_label
                    "settings" => array(
                        "emptyIcon" => false, // default true, display an "EMPTY" icon?
                        "type" => "typicons",
                        "iconsPerPage" => 4000, // default 100, how many icons per/page to display
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
                    "value" => "entypo-icon entypo-icon-note", // default value to backend editor admin_label
                    "settings" => array(
                        "emptyIcon" => false, // default true, display an "EMPTY" icon?
                        "type" => "entypo",
                        "iconsPerPage" => 4000, // default 100, how many icons per/page to display
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
                    "value" => "vc_li vc_li-heart", // default value to backend editor admin_label
                    "settings" => array(
                        "emptyIcon" => false, // default true, display an "EMPTY" icon?
                        "type" => "linecons",
                        "iconsPerPage" => 4000, // default 100, how many icons per/page to display
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
                        "emptyIcon" => false, // default true, display an "EMPTY" icon?
                        "type" => "Ionicons",
                        "iconsPerPage" => 4000, // default 100, how many icons per/page to display
                    ),
                    "group" => esc_html__( "Icon", "xamin" ),
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
                        "emptyIcon" => false, // default true, display an "EMPTY" icon?
                        "type" => "flaticon",
                        "iconsPerPage" => 4000, // default 100, how many icons per/page to display
                    ),
                    "group" => esc_html__( "Icon", "xamin" ),
                    "dependency" => array(
                        "element" => "type",
                        "value" => "flaticon",
                
                    ),
                    "description" => esc_html__( "Select icon from library.", "xamin" ),
                ), 

                array(
                    "heading"		=> esc_html__( "Icon Color","xamin" ),
                    "type"			=> "colorpicker",
                    "edit_field_class" => "vc_col-xs-6",
                    "group" => esc_html__( "Icon", "xamin" ),
                    "param_name"	=> "icon_color",
                    "value"      => "#437eeb",
                ),

                array(
                    "type"        => "attach_image",
                    "heading"     => esc_html__( "Image", "xamin" ),
                    "param_name"  => "image",
                    "description" => "Select image/icon from library.",
                    "group" => esc_html__( "Image", "xamin" ),
                    "dependency"  => array
                                        (
                                        "element"  => "icon_type",
                                        "value" => "iq-image" ,
                                        ),
                ),

                array(
                    "type"        => "textfield",
                    "heading"     => esc_html__( "Extra class name","xamin" ),
                    "param_name"  => "extra_class",
                    "description" => esc_html__( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.","xamin" ),
                    "group" => esc_html__( "Extra class", "xamin" ),
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