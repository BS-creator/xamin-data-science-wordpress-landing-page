<?php
// Fancy Clients
vc_map(
	array(
		"name" 			=> esc_html__("Fancy Client","xamin"),
		"base" 			=> "xaminfancyclient",
		"description" 	=> esc_html__( "Display Client Logo", "xamin"),
		"category" 		=> esc_html__( "Xamin Shortcodes", "xamin" ),
		"icon" 			=> "icon-xaminclient",
		"params" => array(

			array(
                "heading"       => esc_html__( "Select Style","xamin" ),
                "description"   => wp_kses( __( "Position of the title text.","xamin"), array( "br" => array() ) ),
                "type"          => "dropdown",
                "param_name"    => "style_type",
                "value"         => array(
                                        "Style 1" => "1",
                                        "Style 2" => "2",
                                   ),
            ),

            array(
                "heading"       => esc_html__( "Select Column","xamin" ),
                "description"   => esc_html__( "Column Style of the Clients.","xamin"),
                "type"          => "dropdown",
                "param_name"    => "column_type",
                "dependency"  => array (
                        "element"  => "style_type",
                        "value" => array ("2") ,
                ),
                "value"         => array(
                                        esc_html__("1 Column","xamin") => "1",
                                        esc_html__("2 Column","xamin") => "2",
                                        esc_html__("3 Column","xamin") => "3",
                                        esc_html__("4 Column","xamin") => "4",
                                        esc_html__("5 Column","xamin") => "5",
                                        esc_html__("6 Column","xamin") => "6",
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