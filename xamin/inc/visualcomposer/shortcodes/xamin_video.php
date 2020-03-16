<?php
// Parallax Video
vc_map(
	array(
		"name" 			=> esc_html__("Video","xamin"),
		"base" 			=> "xaminvideo",
		"description" 	=> esc_html__( "xamin video","xamin"),
		"category" 		=> esc_html__( "Xamin Shortcodes","xamin" ),
		"icon" 			=> "icon-xaminvideo",
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
                "type" 			=> "attach_image",
                "heading" 		=> esc_html__( "Video Baground Image","xamin" ),
                "param_name" 	=> "video_image",
				"value"			=> "",
				"edit_field_class" => "vc_col-xs-6",
                "description" 	=> esc_html__("Enter Your Youtube Video Image.","xamin" ),
			),
			
			array(
				"heading"		=> esc_html__( "Youtube Video URL","xamin" ),
				"type"			=> "textfield",
				"param_name"	=> "video_yt_key",
				"description" 	=> esc_html__("Only put youtube video full URL.","xamin" ),
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
                    "value" => array ("2"),
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