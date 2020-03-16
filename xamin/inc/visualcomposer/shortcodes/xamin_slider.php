<?php
// Team
vc_map( array(
        "name" 			=> esc_html__("Slider","xamin"),
        "base" 			=> "xaminslider",
		  	"description" 	=> esc_html__( "xamin slider", "xamin"),
        "category" 		=> esc_html__( "Xamin Shortcodes", "xamin" ),
        "icon" 			=> "xamin_team",
				"params" => array(

					array(
						"heading"       => esc_html__( "Select Image/Video","xamin" ),
						"description"   => esc_html__( "Select Image/Video for slider.","xamin"), 
						"type"          => "dropdown",
						"edit_field_class" => "vc_col-xs-6",
						"param_name"    => "slider_type",
						"value"         => array(
																		"Default Slider" => "0",
																		"Image" 				 => "1",
																		"Video"					 => "2",
															),
					),

					array( 
						"type" => "checkbox",
						"holder" => "div",
						"admin_label" => true,
						"heading" => esc_html__( "Enabal Shadow", "xamin" ),
						"edit_field_class" => "vc_col-xs-6",
						"param_name" => "enabal_shadow",
						"dependency"  => array(
							"element"  => "slider_type",
							"value" => array ("0"),
							),
						"value"       => array(
								"enabal" => "0",
						),                     
						"description" => "If selected, shadow enabal.",
				),

					array(
						"heading" 		=> esc_html__( "Alignment","xamin" ),
						"description" 	=> esc_html__( "Alignment of the title text.","xamin"), 
						"type" 			=> "dropdown",
						"param_name" 	=> "position",
						"edit_field_class" => "vc_col-xs-6",
						"dependency"  => array(
							"element"  => "slider_type",
							"value" => array ("0"),
							),
						"value" => array(
										"Left" =>  "left",
										"Center" => "center",
										"Right" => "right",
									),
					),

					array(
						"heading" 		=> esc_html__( "Element Tag","xamin" ),
						"description" 	=> esc_html__( "Element Tag of the title text.","xamin"), 
						"type" 			=> "dropdown",
						"param_name" 	=> "tag",
						"edit_field_class" => "vc_col-xs-6",
						"dependency"  => array(
							"element"  => "slider_type",
							"value" => array ("0"),
							),
						"value" => array(
										"1" => "h2",
										"2" => "h3",
										"3" => "h4",
										"4" => "h5",
										"5" => "h6",
									),
					),

					array(
						"heading"		=> esc_html__( "Add List", "xamin" ),
						"description"	=> esc_html__( "Enter Your List Data.", "xamin" ),
						"type"			=> "param_group",
						"dependency"  => array(
							"element"  => "slider_type",
							"value" => array ("0"),
							),
						"param_name"	=> "slider",
						"params" => array(

								array(
								"heading"       => esc_html__( "Title","xamin" ),
								"description"   => esc_html__( "Enter the title","xamin"),
								"type"          => "textfield",
								"param_name"    => "slider_title",
								"value"         => esc_html__("Easy to Customize","xamin" ),
								),

								array(
								"heading"       => esc_html__( "Contant","xamin" ),
								"description"   => esc_html__( "Enter the Contant","xamin"),
								"type"          => "textarea",
								"param_name"    => "slider_contant",
								"value"         => esc_html__("It is a long established.","xamin" ),
								),

								array(
									"type"        => "attach_image",
									"heading"     => esc_html__( "Image", "xamin" ),
									"param_name"  => "image",
									"description" => "Select image from library.",
								),

								array(
									"heading"       => esc_html__( "Button URL", "xamin" ),
									"type"          => "textfield",
									"param_name"    => "slider_btl_url",
								),

						),	
					),

					array(
						"heading"		=> esc_html__( "Add List", "xamin" ),
						"description"	=> esc_html__( "Enter Your List Data.", "xamin" ),
						"type"			=> "param_group",
						"param_name"	=> "image_slider",
						"dependency"  => array(
							"element"  => "slider_type",
							"value" => array ("1"),
							),
						"params" => array(

								array(
									"type"        => "attach_image",
									"heading"     => esc_html__( "Image", "xamin" ),
									"param_name"  => "slider_image",
									"description" => "Select image from library.",
								),

						),	
					),

					array(
						"heading"		=> esc_html__( "Add List", "xamin" ),
						"description"	=> esc_html__( "Enter Your List Data.", "xamin" ),
						"type"			=> "param_group",
						"param_name"	=> "video_slider",
						"dependency"  => array(
							"element"  => "slider_type",
							"value" => array ("2"),
							),
						"params" => array(

								array(
								"type"        => "attach_image",
								"heading"     => esc_html__( "Video Image", "xamin" ),
								"param_name"  => "video_image",
								"description" => "Select image from library.",
								),

								array(
									"heading"       => esc_html__( "Youtube Video Key", "xamin" ),
									"type"          => "textfield",
									"param_name"    => "youtube_url",
								),


						),	
					),

					array(
						"type" 			=> "heading",
						"heading" 		=> esc_html__("Number of Post :", "xamin" ),
						"param_name" 	=> "desk_number",
						"group" => esc_html__( "Post Setting", "xamin" ),
					),
					array(
						"type" 			=> "textfield",
						"heading" 		=> esc_html__("Desktop view", "xamin" ),
						"param_name" 	=> "desk_number",
						"edit_field_class" => "vc_col-xs-3",
						"group" => esc_html__( "Post Setting", "xamin" ),
						"description" 	=> esc_html__("Enter Number of post to Show.", "xamin" )
					),
					array(
						"type" 			=> "textfield",
						"heading" 		=> esc_html__("Laptop view", "xamin" ),
						"param_name" 	=> "lap_number",
						"edit_field_class" => "vc_col-xs-3",
						"group" => esc_html__( "Post Setting", "xamin" ),
						"description" 	=> esc_html__("Enter Number of post to Show.", "xamin" )
					),
					array(
						"type" 			=> "textfield",
						"heading" 		=> esc_html__("Tablet view", "xamin" ),
						"param_name" 	=> "tab_number",
						"edit_field_class" => "vc_col-xs-3",
						"group" => esc_html__( "Post Setting", "xamin" ),
						"description" 	=> esc_html__("Enter Number of post to Show.", "xamin" )
					),
					array(
						"type" 			=> "textfield",
						"heading" 		=> esc_html__("Mobile view", "xamin" ),
						"param_name" 	=> "mob_number",
						"edit_field_class" => "vc_col-xs-3",
						"group" => esc_html__( "Post Setting", "xamin" ),
						"description" 	=> esc_html__("Enter Number of post to Show.", "xamin" )
					),	
					array(
						"type" 			=> "dropdown",
						"heading" 		=> esc_html__("Order By", "xamin"),
						"param_name" 	=> "sortby",
						"group" => esc_html__( "Post Setting", "xamin" ),
						"value" 			=> array_flip( array("date" => esc_html__("Date", "xamin"),"title" => esc_html__("Title", "xamin") ,"name" => esc_html__("Name", "xamin") ,"author" => esc_html__("Author", "xamin"),"comment_count" => esc_html__("Comment Count", "xamin"),"random" => esc_html__("Random", "xamin") ) ),			
						"description" 	=> esc_html__("Enter the sorting order.", "xamin"),
					),	

					array(
						"type" 			=> "dropdown",
						"heading" 		=> esc_html__( "Arrow", "xamin" ),
						"param_name" 	=> "arrow",
						"group" => esc_html__( "Post Setting", "xamin" ),
						"value" 		=> array(
											"True"    => "true",
											"False"   => "false",
										),
					),
					array(
						"type" 			=> "dropdown",
						"heading" 		=> esc_html__( "Dots", "xamin" ),
						"param_name" 	=> "dots",
						"group" => esc_html__( "Post Setting", "xamin" ),
						"value" 		=> array(
										"False"   => "false",
										"True"    => "true",
						),
					),

					array(
						"type" 			=> "dropdown",
						"heading" 		=> esc_html__( "Autoplay", "xamin" ),
						"group" => esc_html__( "Post Setting", "xamin" ),
						"param_name" 	=> "auto",				
						"value" 		=> array(
									"True"    => "true",
									"False"   => "false",
						 		),
							"dependency" => array(
								"element" => "style_type",
								"value" => "2",
							),
					),
						
					array(
						"type" 			=> "dropdown",
						"heading" 		=> esc_html__( "Loop", "xamin" ),
						"param_name" 	=> "loop",
						"group" => esc_html__( "Post Setting", "xamin" ),
						"value" 		=> array(
											"True"    => "true",
											"False"   => "false",
										),
						),

					array(
						"type" 			=> "dropdown",
						"heading" 		=> esc_html__("Order", "xamin"),
						"param_name" 	=> "order",
						"group" => esc_html__( "Post Setting", "xamin" ),
						"value" 			=> array_flip(array("DESC" => esc_html__("Descending", "xamin"),"ASC" => esc_html__("Ascending", "xamin") ) ),			
						"description" 	=> esc_html__("Enter the sorting order.", "xamin"),
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
		)        
    ) 
);
?>