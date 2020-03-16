<?php
// Slider Box
    vc_map( 
  
        array(
            "name"          => esc_html__("Box Slider","xamin" ),
            "base"          => "xaminBoxslider",
            "description"   => esc_html__( "xamin Box Slider","xamin" ),
            "category"      => esc_html__( "Xamin Shortcodes","xamin" ),
            "icon"          => "icon-wpb-xaminboxslider",
            "params" => array(

                array(
                    "heading"       => esc_html__( "Add Box", "xamin" ),
                    "description"   => esc_html__( "Enter Your Box Data.", "xamin" ),
                    "type"          => "param_group",
                    "param_name"    => "box_data",
                    "params" => array(
                                                
                        array(
                            "heading"       => esc_html__( "Title","xamin" ),
                            "description"   => esc_html__( "Enter the title","xamin"),
                            "type"          => "textfield",
                            "param_name"    => "xamintitle_content",
                            "value"         => esc_html__("Easy to Customize","xamin" ),
                        ),

                        array(
                            "heading"       => esc_html__( "Title Element Tag","xamin" ),
                            "description"   => esc_html__( "Element Tag of the title text.","xamin"),
                            "type"          => "dropdown",
                            "param_name"    => "tag",
                            "edit_field_class" => "vc_col-xs-6",
                            "value" => array(
                                            "h2" => "h2",
                                            "h3" => "h3",
                                            "h4" => "h4",
                                            "h5" => "h5",
                                            "h6" => "h6",
                                        ),
                        ),

                        array(
                            "heading"       => esc_html__( "Sub Title","xamin" ),
                            "description"   => esc_html__( "Enter the sub title","xamin"),
                            "type"          => "textfield",
                            "param_name"    => "xamin_subtitle",
                            "value"         => esc_html__("Easy to Customize","xamin" ),
                        ),

                        array(
                            "heading"       => esc_html__( "Date","xamin" ),
                            "description"   => esc_html__( "Enter the date","xamin"),
                            "type"          => "textfield",
                            "param_name"    => "xamin_box_date",
                        ),

                        array(
                            "heading"       => esc_html__( "Result Title","xamin" ),
                            "description"   => esc_html__( "Enter the Result title","xamin"),
                            "type"          => "textfield",
                            "param_name"    => "xamin_box_resulttitle",
                        ),

                        array(
                            "heading"       => esc_html__( "Result","xamin" ),
                            "description"   => esc_html__( "Enter the result","xamin"),
                            "type"          => "textfield",
                            "param_name"    => "xamin_box_result",
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




                    ),    
                ),

                array(
                    "type"           => "textfield",
                    "heading"        => esc_html__("Desktop view", "xamin" ),
                    "param_name"     => "desk_number",
                    "edit_field_class" => "vc_col-xs-3",             
                    "description"   => esc_html__("Enter Number of post to Show.", "xamin" ),
                    "group" => esc_html__( "Slider Setting", "xamin" ), 
                ),

                array(
                    "type"           => "textfield",
                    "heading"        => esc_html__("Laptop view", "xamin" ),
                    "param_name"    => "lap_number",
                    "edit_field_class" => "vc_col-xs-3",                
                    "description"   => esc_html__("Enter Number of post to Show.", "xamin" ),
                    "group" => esc_html__( "Slider Setting", "xamin" ),    
                ),

                array(
                    "type"           => "textfield",
                    "heading"        => esc_html__("Tablet view", "xamin" ),
                    "param_name"    => "tab_number",
                    "edit_field_class" => "vc_col-xs-3",                
                    "description"   => esc_html__("Enter Number of post to Show.", "xamin" ),
                    "group" => esc_html__( "Slider Setting", "xamin" ),
                ),

                array(
                    "type"           => "textfield",
                    "heading"        => esc_html__("Mobile view", "xamin" ),
                    "param_name"     => "mob_number",
                    "edit_field_class" => "vc_col-xs-3",             
                    "description"   => esc_html__("Enter Number of post to Show.", "xamin" ),
                    "group" => esc_html__( "Slider Setting", "xamin" ),
                ),              

                array(
                    "type"          => "dropdown",
                    "heading"      => esc_html__( "Arrow", "xamin" ),
                    "group" => esc_html__( "Slider Setting", "xamin" ),
                    "param_name"    => "arrow",               
                    "value"         => array(
                                            "True"    => "true",
                                            "False"   => "false",
                                        ),    
                ),

                array(
                    "type"          => "dropdown",
                    "heading"      => esc_html__( "Dots", "xamin" ),
                    "group" => esc_html__( "Slider Setting", "xamin" ),
                    "param_name"    => "dots",                
                    "value"         => array(
                            "False"   => "false",
                            "True"    => "true",
                    ),   
                ),

                array(
                    "type"          => "dropdown",
                    "heading"       => esc_html__( "Autoplay", "xamin" ),
                    "group" => esc_html__( "Slider Setting", "xamin" ),
                    "param_name"    => "auto",              
                    "value"         => array(
                            "True"    => "true",
                            "False"   => "false",
                     ),
                ),

                array(
                    "type"          => "dropdown",
                    "heading"       => esc_html__( "Loop", "xamin" ),
                    "group" => esc_html__( "Slider Setting", "xamin" ),
                    "param_name"    => "loop",              
                    "value"         => array(
                            "True"    => "true",
                            "False"   => "false",
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
                    "type" => "css_editor",
                    "heading" => esc_html__( "Css", "xamin" ),
                    "param_name" => "css",
                    "group" => esc_html__( "Design options", "xamin" ),
                ),
                
            )
        )
    );
?>