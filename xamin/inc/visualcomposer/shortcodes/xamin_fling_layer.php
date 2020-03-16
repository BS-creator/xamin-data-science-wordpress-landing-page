<?php
vc_map(
	array(
		"name" 			=> "Fling Layer",
		"base" 			=> "xaminflinglayer",
		"description" 	=> esc_html__( "xamin subscribe","xamin" ),
		"category" 		=> esc_html__( "Xamin Shortcodes","xamin" ),
		"icon" 			=> "icon-wpb-xaminflinglayer",
		"params" => array(

			array(
				"type" => "dropdown",
				"heading" =>  esc_html__("Style","xamin"),
				"param_name" => "fling_style",
				"value" => array(
							"Style1"  =>  "style-one",
							"Style2"  =>  "style-two",
						),
				
			),
			
			array(
				"heading" 		=> esc_html__( "Background Image 1", "xamin" ),
				"type" 			=> "attach_image",
				"param_name" 	=> "layer_image1",
				"description" 	=> esc_html__( "Select Image.", "xamin"),
				"dependency" => array(
					"element" => "fling_style",
					"value" => array("style-one","style-two"),
				),
			),

			array(
				"heading" 		=> esc_html__( "Background Image 2", "xamin" ),
				"type" 			=> "attach_image",
				"param_name" 	=> "layer_image2",
				"description" 	=> esc_html__( "Select Image.", "xamin"),
				"dependency" => array(
					"element" => "fling_style",
					"value" => "style-two",
				),
			),
			array(
				"type" => "dropdown",
				"heading" =>  esc_html__("Position","xamin"),
				"param_name" => "fling_position",
				"value" => array(
							"Left"  =>  "left",
							"Right"  =>  "right",
						),
				"dependency" => array(
					"element" => "fling_style",
					"value" => "style-one",
				),
				
			),
			
			array(
				"type"        => "textfield",
				"heading"     => esc_html__( "Extra class name","xamin" ),
				"param_name"  => "extra_class",
				"description" => esc_html__( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.","xamin" ),
				"group" => esc_html__( "Extra class", "xamin" ),
			),
			
		),
	) 
);
?>