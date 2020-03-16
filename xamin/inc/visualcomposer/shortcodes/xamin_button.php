<?php
// Icon Box
vc_map( array(
		"name" 			=> esc_html__("Button","xamin"),
		"base" 			=> "xaminButton",
		"description" 	=> esc_html__("xamin Button","xamin"),
		"category" 		=> esc_html__( "Xamin Shortcodes","xamin"),
		"icon" 			=> "icon-wpb-xamintitle",
        "params" => array(

				array(
				"type" => "vc_link",
				"heading" => __( "URL (Link)", "xamin" ),
				"param_name" => "link",
				"description" => __( "Add custom link.", "xamin" ),
				),
		            
				array(
					"type" => "dropdown",
					"class" => "",
					"heading" =>  esc_html__("Button Position","xamin"),
					"param_name" => "button_position",
					"edit_field_class" => "vc_col-xs-6",
					"value" => array(
								"Left" =>  "left",
								"Center" => "center",
								"Right" => "right",
							),
					
				),

				array(
				"heading"       => esc_html__( "Button White","xamin" ),
				"description"   => esc_html__( "button white.","xamin"),
				"type"          => "dropdown",
				"param_name"    => "button_white",
				"edit_field_class" => "vc_col-xs-6",
				"value"         => array(
						"Default"    => "1",
						"Button-White" => "2",
						"Button-Blue" => "3",
						"Button-Border" => "4",
					   ),
				),

				array(
					"heading"		=> esc_html__( "Title Color","xamin" ),
					"type"			=> "colorpicker",
					"group" => esc_html__( "Color", "xamin" ),
					"edit_field_class" => "vc_col-xs-6",
					"param_name"	=> "title_color",
					"value"      => "#525f81",
				),

				array(
					"heading"		=> esc_html__( "background Color","xamin" ),
					"type"			=> "colorpicker",
					"group" => esc_html__( "Color", "xamin" ),
					"edit_field_class" => "vc_col-xs-6",
					"param_name"	=> "background_color",
					"value"      => "#525f81",
				),
				
				array(
					"type"        => "textfield",
					"heading"     => esc_html__( "Extra class name","xamin" ),
					"param_name"  => "extra_class",
					"description" => esc_html__( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.","xamin" ),
					"group" => esc_html__( "Extra class", "xamin" ),
				),

				array(
					"type" 		=> "css_editor",
					"heading" 	=> esc_html__( "Css", "xamin" ),
					"param_name" => "css",
					"group" => esc_html__( "Design options", "xamin" ),
				),


        ),
    ) 
);
?>