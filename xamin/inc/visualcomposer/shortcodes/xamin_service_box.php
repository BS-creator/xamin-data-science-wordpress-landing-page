<?php
vc_map( 
    array(
        "name"          => esc_html__("Service Box","xamin" ),
        "base"          => "xaminServiceBox",
        "description"   => esc_html__( "Xamin Service Box","xamin" ),
        "category"      => esc_html__( "Xamin Shortcodes","xamin" ),
        "icon"          => "icon-wpb-xaminServiceBox",
        "params" => array(

            array(
                "heading"       => esc_html__( "Select Style","xamin" ),
                "description"   => wp_kses( __( "Style of the box.","xamin"), array( "br" => array() ) ),
                "type"          => "dropdown",
                "param_name"    => "style_type",
                "value"         => array(
                        esc_html__( "Style 1","xamin" ) => "1",
                        esc_html__( "Style 2","xamin" ) => "2",
                ),
            ),

        	array(
                "heading"       => esc_html__( "Title","xamin" ),
                "description"   => esc_html__( "Enter the title","xamin"),
                "type"          => "textfield",
                "param_name"    => "xamintitle_content",
                "value"         => esc_html__("Easy to Customize","xamin" ),
            ),

            array(
                "heading" 		=> esc_html__( "Title Element Tag","xamin" ),
                "description" 	=> esc_html__( "Element Tag of the title text.","xamin"),
                "type" 			=> "dropdown",
                "param_name" 	=> "title_tag",
	            "edit_field_class" => "vc_col-xs-6",
                "value" => array(
                    "h1" => "h1",
                    "h2" => "h2",
                    "h3" => "h3",
                    "h4" => "h4",
                    "h5" => "h5",
                    "h6" => "h6",
                ),
            ),

            array(
                "heading"		=> esc_html__( "Title Text Color","xamin" ),
                "type"			=> "colorpicker",
                "edit_field_class" => "vc_col-xs-6",
                "param_name"	=> "title_color",
                "value"      => "#313e5b",
            ),

            array(
                "heading"       => esc_html__( "Contant","xamin" ),
                "description"   => esc_html__( "Enter the Contant","xamin"),
                "type"          => "textarea",
                "param_name"    => "xaminsubtitle_content",
                "value"         => esc_html__("It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.","xamin" ),
            ),

            array(
                "heading" 		=> esc_html__( "Title Element Tag","xamin" ),
                "description" 	=> esc_html__( "Element Tag of the title text.","xamin"),
                "type" 			=> "dropdown",
                "param_name" 	=> "content_tag",
	            "edit_field_class" => "vc_col-xs-6",
                "value" => array(
                    "span" => "span",
                    "p" => "p",
                ),
            ),

            array(
                "heading"       => esc_html__( "Content Color","xamin" ),
                "type"          => "colorpicker",
                "edit_field_class" => "vc_col-xs-6",
                "param_name"    => "content_color",
                "value"      => "#313e5b",
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
                    "heading"       => esc_html__( "Step",'xamin' ),
                    "description"   => esc_html__( "Enter the step",'xamin'),
                    "type"          => "textfield",
                    "param_name"    => "xamin_title_step",
                    "dependency" => array(
                        "element" => "style_type",
                        "value" => "2",
                    ),
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
                    "emptyIcon" => false,
                    "type" => "flaticon",
                    "iconsPerPage" => 4000, 
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
                "dependency"  =>array(
                    "element"  => "icon_type",
                    "value" => "iq-image" ,
                ),
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
                "heading"       => esc_html__( "Delay Time","xamin" ),
                "description"   => esc_html__( "Enter delay time of fancybox","xamin"),
                "type"          => "textfield",
                "group" => esc_html__( "Animation", "xamin" ),
                "param_name"    => "delay_time",
            ),   

            array( 
                "type" => "checkbox",
                "holder" => "div",
                "admin_label" => true,
                "heading" => esc_html__( "Shadow on Hover", "xamin" ),
                "edit_field_class" => "vc_col-xs-6",
                "param_name" => "shadow_on_hover",
                "group" => esc_html__( "Animation", "xamin" ),
                "value"       => array(
                    "enabal" => "0",
                ),                     
                "description" => esc_html__( "If selected, Shadow on hover is enabal","xamin"),
            ),                       

            array(
				"heading" 		=> esc_html__( 'Link Title','xamin' ),
				"description" 	=> esc_html__( "Enter the Title",'xamin'),
				"type" 			=> "textfield",
				"param_name" 	=> "link_title",
                "group" => esc_html__( "Button", "xamin" ),				
           	),
			
			array(
				"heading" 		=> esc_html__( "Link URL",'xamin' ),
				"description" 	=> esc_html__( "Enter the URL",'xamin'),
				"type" 			=> "textfield",
				"param_name" 	=> "link_url",
                "group" => esc_html__( "Button", "xamin" ),              
            ),

            array( 
                "type" => "checkbox",
                "holder" => "div",
                "admin_label" => true,
                "heading" => esc_html__( "Button Enable", "xamin" ),
                "edit_field_class" => "vc_col-xs-6",
                "param_name" => "button_enable",
                "group" => esc_html__( "Button", "xamin" ),
                "value"       => array(
                    "enabal" => "0",
                ),                     
                "description" => esc_html__( "If selected, Button is enabal","xamin"),
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

        )
    )
);
?>