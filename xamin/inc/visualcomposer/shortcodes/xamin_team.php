<?php
// Team
vc_map( array(
        "name" 			=> esc_html__("Team","xamin"),
        "base" 			=> "xaminteam",
		  	"description" 	=> esc_html__( "xamin team members", "xamin"),
        "category" 		=> esc_html__( "Xamin Shortcodes", "xamin" ),
        "icon" 			=> "xamin_team",
				"params" => array(


					array(
						"heading" 		=> esc_html__( "Alignment","xamin" ),
						"description" 	=> esc_html__( "Alignment of the title text.","xamin"), 
						"type" 			=> "dropdown",
						"param_name" 	=> "position",
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
						"value" => array(
										"1" => "h2",
										"2" => "h3",
										"3" => "h4",
										"4" => "h5",
										"5" => "h6",
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
						"type" => "css_editor",
						"heading" => esc_html__( "Css", "xamin" ),
						"param_name" => "css",
						"group" => esc_html__( "Design options", "xamin" ),
					),
					
			)        
    ) 
);
?>