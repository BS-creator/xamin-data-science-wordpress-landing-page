<?php
vc_map(
	array(
		"name" 			=> "Map",
		"base" 			=> "xaminMap",
		"description" 	=> esc_html__( "xamin map","xamin" ),
		"category" 		=> esc_html__( "Xamin Shortcodes","xamin" ),
		"icon" 			=> "icon-wpb-xaminMap",
		"params" => array(

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