<?php
     vc_map( 
  
        array(
            "name"          => esc_html__("Fancybox","xamin" ),
            "base"          => "xaminFancybox",
            "description"   => esc_html__( "xamin Fancybox","xamin" ),
            "category"      => esc_html__( "Xamin Shortcodes","xamin" ),
            "icon"          => "icon-wpb-xamintitle",
            "params" => array(

                array(
                "heading"       => esc_html__( "Select Style","xamin" ),
                "description"   => wp_kses( __( "Position of the title text.","xamin"), array( "br" => array() ) ),
                "type"          => "dropdown",
                "param_name"    => "style_type",
                "value"         => array(
                                        "Style 1" => "0",
                                        "Style 2" => "1",
                                        "Style 3" => "2",
                                        "Style 4" => "3",
                                        "Style 5" => "4",
                                        "Style 6" => "5",
                                        "Style 7" => "6",
                                        "Style 8" => "7",
                                        "Style 9" => "8",
                                        "Style 10" => "9",
                                        "Style 11" => "10",
                                        "Style 12" => "11",
                                        "Style 13" => "12",
                                   ),
                ),

                array(
                    "heading"       => esc_html__( "Icon Size","xamin" ),
                    "description"   => wp_kses( __( "Size of the icon.","xamin"), array( "br" => array() ) ),
                    "type"          => "dropdown",
                    "param_name"    => "icon_size",
                    "value"         => array(
                            "Default" => "default",
                            "Large" => "large",
                    ),
                    "dependency"  => array (
                            "element"  => "style_type",
                            "value" => "2" ,
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
                    "heading"       => esc_html__( "Title Text White","xamin" ),
                    "description"   => esc_html__( "title text-white.","xamin"),
                    "type"          => "dropdown",
                    "param_name"    => "text_white",
                    "edit_field_class" => "vc_col-xs-6",
                    "dependency"  => array
                                                (
                                                "element"  => "style_type",
                                                "value" => "0" ,
                                                ),
                    "value"         => array(
                                            "Default"    => "1",
                                            "Text-White" => "2",
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
                    "heading"       => esc_html__( "Content Color","xamin" ),
                    "type"          => "colorpicker",
                    "edit_field_class" => "vc_col-xs-6",
                    "param_name"    => "content_color",
                    "value"      => "#313e5b",
                ),
                    
                array( 
                    "type" => "checkbox",
                    "holder" => "div",
                    "admin_label" => true,
                    "heading" => esc_html__( "Arrow Effect", "xamin" ),
                    "edit_field_class" => "vc_col-xs-6",
                    "param_name" => "circle_effect",
                    "group" => esc_html__( "Arrow", "xamin" ),
                    "dependency"  => array
                        (
                        "element"  => "style_type",
                        "value" => array ("2","4","8") ,
                        ),
                    "value"       => array(
                        "enabal" => "0",
                    ),                     
                    "description" => esc_html__( "If selected, arrow effect is enabal","xamin"),
                ),

                array(
                    "heading"       => esc_html__( "Arrow","xamin" ),
                    "description"   => esc_html__( "Arrow effect.","xamin"),
                    "type"          => "dropdown",
                    "edit_field_class" => "vc_col-xs-6",
                    "param_name"    => "circle_type",
                    "group" => esc_html__( "Arrow", "xamin" ),
                    "value"         => array(
                                            "Yes" => "0",
                                            "No" => "1",
                                       ),
                    "dependency"  => array(
                                        "element"  => "style_type",
                                        "value" => array ("2", "4" ,"8"),
                                        ),
                ),

                 array(
                    "type"        => "attach_image",
                    "heading"     => esc_html__( "Background Arrow Image", "xamin" ),
                    "param_name"  => "arrow_image",
                    "edit_field_class" => "vc_col-xs-6",
                    "description" => "Select image from library.",
                    "group" => esc_html__( "Arrow", "xamin" ),
                    "dependency"  => array
                                        (
                                        "element"  => "style_type",
                                        "value" => array ("2", "4" ,"8"),
                                        ),
                ),

                  array(
                    "type"        => "attach_image",
                    "heading"     => esc_html__( "Background  Image", "xamin" ),
                    "param_name"  => "arrowbackground_image",
                    "edit_field_class" => "vc_col-xs-6",
                    "description" => "Select image from library.",
                    "group" => esc_html__( "Arrow", "xamin" ),
                    "dependency"  => array
                                        (
                                        "element"  => "style_type",
                                        "value" => array ("8"),
                                        ),
                ),

                 array( 
                    "type" => "checkbox",
                    "holder" => "div",
                    "admin_label" => true,
                    "heading" => esc_html__( "background Effect", "xamin" ),
                    "edit_field_class" => "vc_col-xs-6",
                    "param_name" => "circle_backgroundeffect",
                    "group" => esc_html__( "Arrow", "xamin" ),
                    "dependency"  => array
                        (
                        "element"  => "style_type",
                        "value" => array ("8") ,
                        ),
                    "value"       => array(
                        "enabal" => "0",
                    ),                     
                    "description" => esc_html__( "If selected, arrow effect is enabal","xamin"),
                ),

                array(
                    "type"        => "attach_image",
                    "heading"     => esc_html__( "Background Hover Image", "xamin" ),
                    "param_name"  => "bg_image",
                    "description" => "Select image/icon from library.",
                    "group" => esc_html__( "Hover Image", "xamin" ),
                    "dependency"  => array
                                        (
                                        "element"  => "style_type",
                                        "value" => "1" ,
                                        ),
                ),
               
                
                array(
                    "heading"       => esc_html__( "Contant","xamin" ),
                    "description"   => esc_html__( "Enter the Contant","xamin"),
                    "type"          => "textarea",
                    "param_name"    => "xaminsubtitle_content",
                    "value"         => esc_html__("It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.","xamin" ),
                ),

                array(
                    "heading"       => esc_html__( "Show Icon/Image","xamin" ),
                    "description"   => wp_kses( __( "Icon/Image Options.","xamin"), array( "br" => array() ) ),
                    "type"          => "dropdown",
                    "param_name"    => "iconimg_option",
                    "value"         => array(
                            "Default(Hide)" => "default",
                            "Show" => "yes",
                    ),
                    "dependency"  => array (
                            "element"  => "style_type",
                            "value" => "11" ,
                    ),
                ),

                array( 
                    "type" => "checkbox",
                    "holder" => "div",
                    "admin_label" => true,
                    "heading" => esc_html__( "Number Effect", "xamin" ),
                    "param_name" => "number_effect",
                    "group" => esc_html__( "Number", "xamin" ),
                    "dependency"  => array(
                        "element"  => "style_type",
                        "value" => array ("2") ,
                    ),
                    "value"       => array(
                        "enabal" => "0",
                    ),                     
                    "description" => esc_html__( "If selected, number effect is enabal","xamin"),
                ),

                array(
                    "heading"       => esc_html__( "Number","xamin" ),
                    "description"   => esc_html__( "Enter the Number","xamin"),
                    "type"          => "textfield",
                    "param_name"    => "xamin_number",
                    "group" => esc_html__( "Number", "xamin" ),
                    "value"         => esc_html__("0","xamin" ),
                    "dependency"  => array(
                        "element"  => "style_type",
                        "value" => array ("2") ,
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
                    "heading"       => esc_html__( "Icon background Color","xamin" ),
                    "type"          => "colorpicker",
                    "edit_field_class" => "vc_col-xs-6",
                    "group" => esc_html__( "Icon", "xamin" ),
                    "param_name"    => "icon_bg_color",
                    "value"      => "#437eeb",
                    "dependency"  => array (
                        "element"  => "style_type",
                        "value" => array ("12"),
                    ),                
                ),

                array( 
                    "type" => "checkbox",
                    "holder" => "div",
                    "admin_label" => true,
                    "heading" => esc_html__( "Icon Background Color", "xamin" ),
                    "edit_field_class" => "vc_col-xs-6",
                    "param_name" => "icon_bgcolor_option",
                    "group" => esc_html__( "Icon", "xamin" ),
                    "value"       => array(
                        "enabal" => "0",
                    ),   
                    "dependency"  => array (
                        "element"  => "style_type",
                        "value" => array ("12"),
                    ),                   
                    "description" => esc_html__( "If selected, Background color effect is enabal","xamin"),
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
                    "heading"       => esc_html__( "Content Margin","xamin" ),
                    "description"   => wp_kses( __( "Margin of the content text.","xamin"), array( "br" => array() ) ),
                    "type"          => "dropdown",
                    "param_name"    => "content_margin",
                    "value" => array(
                            esc_html__( "Default","xamin" ) =>  "default",
                            esc_html__( "Margin Top","xamin" ) => "margintop",
                    ),
                    "dependency"    => array(
                            'element' => 'style_type',
                            'value'   => array('2'),
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
                    "heading"       => esc_html__( "Box Hover Effect","xamin" ),
                    "description"   => esc_html__( "Show a Hover Effect on Box Shadow","xamin"),
                    "type"          => "dropdown",
                    "param_name"    => "box_hover_effect",
                    "group" => esc_html__( "Animation", "xamin" ),
                    "value"         => array(
                            "None" => "none",
                            "Hover Effect" => "box-hover-effect",
                    ),
                    "dependency"  => array (
                            "element"  => "style_type",
                            "value" => "2" ,
                    ),
                ),
                        
                array(
                    "type"        => "textfield",
                    "heading"     => esc_html__( "Extra class name","xamin" ),
                    "param_name"  => "extra_class",
                    "group" => esc_html__( "Extra Class", "xamin" ),
                    "description" => esc_html__( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.","xamin" )
                ),

                array(
    				"heading" 		=> esc_html__( 'Link Title','xamin' ),
    				"description" 	=> esc_html__( "Enter the Title",'xamin'),
    				"type" 			=> "textfield",
    				"param_name" 	=> "link_title",
                    "dependency"    => array(
                            'element' => 'style_type',
                            'value'   => array('5','11'),
                    ),				
               	),
				
				array(
    				"heading" 		=> esc_html__( "Link URL",'xamin' ),
    				"description" 	=> esc_html__( "Enter the URL",'xamin'),
    				"type" 			=> "textfield",
    				"param_name" 	=> "link_url",
    				"dependency"    => array(
                            'element' => 'style_type',
                            'value'   => array('5','11'),
                    ),              
                ),

                array(
                    "heading"       => esc_html__( "Link Style","xamin" ),
                    "description"   => esc_html__( "Link Style.","xamin"),
                    "type"          => "dropdown",
                    "param_name"    => "link_style",
                    "edit_field_class" => "vc_col-xs-6",
                    "value"         => array(
                            "Default"    => "1",
                            "Link Button" => "2",
                            "Button-White" => "3",
                            "Button-Blue" => "4",
                            "Button-Border" => "5",
                    ),
                    "dependency"    => array(
                        'element' => 'style_type',
                        'value'   => array('5','11'),
                    ),              
                ),

                array(
                "heading"       => esc_html__( "Background Image Enable","xamin" ),
                "description"   => esc_html__( "Display Background Image.","xamin"),
                "type"          => "dropdown",
                "param_name"    => "bg_style_enable",
                "edit_field_class" => "vc_col-xs-6",
                "value"         => array(
                        "No"    => "1",
                        "Yes" => "2",
                       ),
                "dependency"  => array
                                        (
                                        "element"  => "style_type",
                                        "value" => "5" ,
                                        ),
                ),

                  array(
                    "type"        => "attach_image",
                    "heading"     => esc_html__( "Background Image  ", "xamin" ),
                    "param_name"  => "bg_img",
                    "description" => "Select imagefrom library.",
                    "group" => esc_html__( "Image", "xamin" ),
                    "dependency"  => array
                                        (
                                        "element"  => "style_type",
                                        "value" => "5" ,
                                        ),
                    "dependency"  => array
                                        (
                                        "element"  => "bg_style_enable",
                                        "value" => "2" ,
                                        ),
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