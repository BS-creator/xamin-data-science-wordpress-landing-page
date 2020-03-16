<?php
     vc_map( 
  
        array(
            "name"          => esc_html__("Contact","xamin" ),
            "base"          => "xaminconatct",
            "description"   => esc_html__( "xamin contact","xamin" ),
            "category"      => esc_html__( "Xamin Shortcodes","xamin" ),
            "icon"          => "icon-wpb-xamintitle",       
            "params" => array(

                                                                
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
                    "param_name"	=> "title_color",
                    "value"      => "#313e5b;",
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
                    "value"      => "#ffffff",
                ),

                array(
                    "heading"		=> esc_html__( "Icon Background Color","xamin" ),
                    "type"			=> "colorpicker",
                    "edit_field_class" => "vc_col-xs-6",
                    "group" => esc_html__( "Icon", "xamin" ),
                    "param_name"	=> "back_color",
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
                    "heading"       => esc_html__( "Element Position","xamin" ),
                    "description"   => wp_kses( __( "Position of the title text.","xamin"), array( "br" => array() ) ),
                    "type"          => "dropdown",
                    "param_name"    => "contact_type",
                    "group" => esc_html__( "Conatct", "xamin" ),
                    "value" => array(
                                "Email" =>  "1",
                                "Phone" => "2",
                                "Address" => "3",
                                "Social Media" => "4",
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
                    "type" => "css_editor",
                    "heading" => esc_html__( "Css", "xamin" ),
                    "param_name" => "css",
                    "group" => esc_html__( "Design options", "xamin" ),
                ),
                
            )
        )
    );
?>