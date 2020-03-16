<?php
// Clients
vc_map(
	array(
		"name" 			=> esc_html__("Client","xamin"),
		"base" 			=> "xaminclient",
		"description" 	=> esc_html__( "Display Client Logo", "xamin"),
		"category" 		=> esc_html__( "Xamin Shortcodes", "xamin" ),
		"icon" 			=> "icon-xaminclient",
		"params" => array(

			array(
	            "heading"       => esc_html__( "Select Style","xamin" ),
	            "description"   => esc_html__( "Position of the title text.","xamin"),
	            "type"          => "dropdown",
	            "param_name"    => "style_type",
	            "value"         => array(
                    esc_html__( "Style 1","xamin" ) => "1",
                    esc_html__( "Style 2","xamin" ) => "2",
                ),
            ),

            array(
	            "heading"       => esc_html__( "Select Clients Effect Style","xamin" ),
	            "description"   => esc_html__( "Style of the Clients.","xamin"),
	            "type"          => "dropdown",
	            "param_name"    => "hover_effect_style",
	            "value"         => array(
                    esc_html__( "Defailt","xamin" ) => "default",
                    esc_html__( "Hover Effct","xamin" ) => "hover-effect",
                    esc_html__( "Box Shadow","xamin" ) => "box-shadow",
                ),
                "dependency"  => array(
	                "element"  => "style_type",
	                "value" => array ("2") ,
                ),
            ),

			array(
				"type"        => "attach_images",
				"heading"     => esc_html__("Client Logo Images", "xamin"),
				"param_name"  => "images",
				"value"       => "",
				"description" => esc_html__("Select logo from media library.", "xamin")
			),

			array( 
                "type" => "checkbox",
                "holder" => "div",
                "admin_label" => true,
                "heading" => esc_html__( "Enable Hover Effect ", "xamin" ),
                "edit_field_class" => "vc_col-xs-6",
                "param_name" => "hover_effct",
                "value"       => array(
                    "Enable" => "0",
                ),     
                "dependency"  => array(
	                "element"  => "style_type",
	                "value" => array ("1") ,
                ),                
                "description" => esc_html__( "If selected, hover effect is enable.","xamin"),
            ),

            array( 
                "type" => "checkbox",
                "holder" => "div",
                "admin_label" => true,
                "heading" => esc_html__( "Enable Background Shadow ", "xamin" ),
                "edit_field_class" => "vc_col-xs-6",
                "param_name" => "background_shadow",
                "value"       => array(
                    "Enable" => "0",
                ),                     
                "description" => esc_html__( "If selected, hover effect is enable.","xamin"),
            ),

			array(
				"type" 			=> "heading",
				"heading" 		=> esc_html__("Number of Post :", "xamin" ),
				"param_name" 	=> "desk_number1",
			 ),
			array(
				"type" 			=> "textfield",
				"heading" 		=> esc_html__("Desktop view", "xamin" ),
				"param_name" 	=> "desk_number",
				"edit_field_class" => "vc_col-xs-3",
				"description" 	=> esc_html__("Enter Number of images to Show.", "xamin" )
			 ),
			 array(
				"type" 			=> "textfield",
				"heading" 		=> esc_html__("Laptop view", "xamin" ),
				"param_name" 	=> "lap_number",
				"edit_field_class" => "vc_col-xs-3",
				"description" 	=> esc_html__("Enter Number of images to Show.", "xamin" )
			 ),
			 array(
				"type" 			=> "textfield",
				"heading" 		=> esc_html__("Tablet view", "xamin" ),
				"param_name" 	=> "tab_number",
				"edit_field_class" => "vc_col-xs-3",
				"description" 	=> esc_html__("Enter Number of images to Show.", "xamin" )
			 ),
			 array(
				"type" 			=> "textfield",
				"heading" 		=> esc_html__("Mobile view", "xamin" ),
				"param_name" 	=> "mob_number",
				"edit_field_class" => "vc_col-xs-3",
				"description" 	=> esc_html__("Enter Number of images to Show.", "xamin" )
			 ),				
 
			array(
                "type" 			=> "dropdown",
                "heading" 		=> esc_html__( "Arrow", "xamin" ),
                "param_name" 	=> "arrow",
                "value" 		=> array(
					"True"    => "true",
					"False"   => "false",
				),
			),
			array(
                "type" 			=> "dropdown",
                "heading" 		=> esc_html__( "Dots", "xamin" ),
                "param_name" 	=> "dots",
                "value" 		=> array(
					"False"   => "false",
					"True"    => "true",
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