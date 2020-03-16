<?php
vc_map(
	array(
		"name" 			=> "Title",
		"base" 			=> "xamintitle",
		"description" 	=> esc_html__( "xamin title","xamin" ),
		"category" 		=> esc_html__( "Xamin Shortcodes","xamin" ),
		"icon" 			=> "icon-wpb-xamintitle",
		"params" => array(


			array(
				"heading" 		=> esc_html__( "Title","xamin" ),
				"description" 	=> esc_html__( "Enter the title","xamin"),
				"type" 			=> "textfield",
				"param_name" 	=> "xamintitle_content",
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
			"heading"       => esc_html__( "Title Text White","xamin" ),
			"description"   => esc_html__( "title text-white.","xamin"), 
			"type"          => "dropdown",
			"param_name"    => "text_white",
			"edit_field_class" => "vc_col-xs-6",
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
				"heading" 		=> esc_html__( "Sub Heading","xamin" ),
				"description" 	=> esc_html__( "Enter the sub Heading","xamin"),
				"type" 			=> "textfield",
				"param_name" 	=> "xamin_subtitle_content",
			),

			array(
				"heading"		=> esc_html__( "Sub Heading Color","xamin" ),
				"type"			=> "colorpicker",
				"edit_field_class" => "vc_col-xs-6",
				"param_name"	=> "sub_title_color",
				"value"      => "#437eeb",
			),

			array(
			"heading"       => esc_html__( "Sub Heading Text White","xamin" ),
			"description"   => esc_html__( "Sub title text-white.","xamin"), 
			"type"          => "dropdown",
			"edit_field_class" => "vc_col-xs-6",
			"param_name"    => "sub_text_white",
			"value"         => array(
			                        "Default"    => "1",
			                        "Text-White" => "2",
			                   ),
			),
	

			array(
				"heading" 		=> esc_html__( "Alignment","xamin" ),
				"description" 	=> esc_html__( "Alignment of the title text.","xamin"), 
				"type" 			=> "dropdown",
				"edit_field_class" => "vc_col-xs-6",
				"param_name" 	=> "position",
				"value" => array(
								"Left" =>  "left",
								"Center" => "center",
								"Right" => "right",
							),
			),

			array(
			"heading"       => esc_html__( "Shadow Margin","xamin" ),
			"type"          => "dropdown",
			"edit_field_class" => "vc_col-xs-6",
			"param_name"    => "shadow_margin",
			"value"         => array(
			                        "Default Margin"    => "1",
			                        "Shadow Margin" => "2",
			                   ),
			),

			array(
				"heading" 		=> esc_html__( "Content","xamin" ),
				"description" 	=> esc_html__( "Enter the content.","xamin"),
				"type" 			=> "textarea",
				"param_name" 	=> "title_content",
			),

			array(
				"heading"		=> esc_html__( "Content Color","xamin" ),
				"type"			=> "colorpicker",
				"edit_field_class" => "vc_col-xs-6",
				"param_name"	=> "content_color",
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