<?php
// Progress Bar
vc_map(
	array(
		"name" 			=> "Progress Bar",
		"base" 			=> "xaminprogress",
		"description" 	=> esc_html__( "xamin progress bar", "xamin"),
		"category" 		=> esc_html__( "Xamin Shortcodes", "xamin" ),
		"icon" 			=> "icon-wpb-maxtitle",
		"params" => array(


			array(
                "heading"       => esc_html__( "Select Style","xamin" ),
                "description"   => esc_html__( "Position of the title text.","xamin"),
                "type"          => "dropdown",
                "param_name"    => "style_type",
                "value"         => array(
                                        "Style 1" => "0",
                                        "Style 2" => "1",
                                   ),
                ),
		
			array(
			"heading"		=> esc_html__( "Add Progress Bar", "xamin" ),
			"description"	=> esc_html__( "Enter Title and Number out of 100", "xamin" ),
			"type"			=> "param_group",
			"param_name"	=> "progress",
			"params" => array(

					array(
						"heading"		=> esc_html__( "Title", "xamin" ),
						"type"			=> "textfield",
						"param_name"	=> "tab_title",
						"admin_label"	=> true,
						"value"         => esc_html__("Easy to Customize","xamin" ),
					),
					
					array(
						"heading"		=> esc_html__( "Score out of 100", "xamin" ),
						"type"			=> "textfield",
						"param_name"	=> "tab_score",
						"value"         => esc_html__("70","xamin" ),
					),
					
				),
			),

			array(
				"heading"       => esc_html__( "Element Position","xamin" ),
				"description"   => esc_html__( "Position of the title text.","xamin"),
				"type"          => "dropdown",
				"edit_field_class" => "vc_col-xs-6",
				"param_name"    => "position",
				"value" => array(
							"Left" =>  "left",
							"Center" => "center",
							"Right" => "right",
						),
			),

			array(
				"heading"		=> esc_html__( "Progress Bar Color","xamin" ),
				"type"			=> "colorpicker",
				"edit_field_class" => "vc_col-xs-6",
				"group" => esc_html__( "Color", "xamin" ),
				"param_name"	=> "pro_color",
				"value"      => "#437eeb",
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