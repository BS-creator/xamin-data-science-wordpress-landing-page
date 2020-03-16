<?php
/// Recent Blog
vc_map( array(
		"name" 			=> esc_html__("Testimonial", "xamin"),
		"base" 			=> "xaminblogtestimonial",
		"description" 	=> esc_html__( "recent testimonial", "xamin"),
		"category" 		=> esc_html__( "Xamin Shortcodes", "xamin" ),
		"icon" 			=> "xamin_recentblog",
		"params" => array(

			array(
				"heading" 		=> esc_html__( "Select Style","xamin" ),
				"description" 	=> esc_html__( "Select Style of the Testimonial.","xamin"), 
				"type" 			=> "dropdown",
				"param_name" 	=> "style_type",
				"value" 		=> array(
										"Style 1" => "1",
										"Style 2" => "2",
										"Style 3" => "3",
									),
			 ),
			 
			 array(
				"type" 			=> "dropdown",
				"heading" 		=> esc_html__( "Position", "xamin" ),
				"param_name" 	=> "text_pos",		
				"value" 		=> array(
								  "Left"    => "left",
								  "Center"   => "center",
								  "Right"   => "right",
				),
			),

			array(
			   "type" 			=> "textfield",
			   "heading" 		=> esc_html__("Desktop view", "xamin" ),
			   "param_name" 	=> "desk_number",
			   "edit_field_class" => "vc_col-xs-3",				
				"description" 	=> esc_html__("Enter Number of post to Show.", "xamin" ),
				"group" => esc_html__( "Post Setting", "xamin" ),
				
			),
			array(
			   "type" 			=> "textfield",
			   "heading" 		=> esc_html__("Laptop view", "xamin" ),
				"param_name" 	=> "lap_number",
				"edit_field_class" => "vc_col-xs-3",				
				"description" 	=> esc_html__("Enter Number of post to Show.", "xamin" ),
				"group" => esc_html__( "Post Setting", "xamin" ),
				
			),
			array(
			   "type" 			=> "textfield",
			   "heading" 		=> esc_html__("Tablet view", "xamin" ),
				"param_name" 	=> "tab_number",
				"edit_field_class" => "vc_col-xs-3",				
				"description" 	=> esc_html__("Enter Number of post to Show.", "xamin" ),
				"group" => esc_html__( "Post Setting", "xamin" ),
				
			),
			array(
			   "type" 			=> "textfield",
			   "heading" 		=> esc_html__("Mobile view", "xamin" ),
			   "param_name" 	=> "mob_number",
			   "edit_field_class" => "vc_col-xs-3",				
				"description" 	=> esc_html__("Enter Number of post to Show.", "xamin" ),
				"group" => esc_html__( "Post Setting", "xamin" ),
				
			),				

			array(
			   "type" 			=> "dropdown",
			   "heading" 		=> esc_html__("Order By", "xamin"),
			   "param_name" 	=> "sort",
			   "value" 			=> array_flip( array("date" => esc_html__("Date", "xamin"),"title" => esc_html__("Title", "xamin") ) ),			   			
				"description" 	=> esc_html__("Enter the sorting order.", "xamin"),
				"group" => esc_html__( "Post Setting", "xamin" ),
				
			),

			array(
			   "type" 			=> "dropdown",
			   "heading" 		=> esc_html__("Order", "xamin"),
			   "param_name" 	=> "order",
			   "value" 			=> array_flip(array("DESC" => esc_html__("Descending", "xamin"), "ASC" => esc_html__("Ascending", "xamin") ) ),			   			
				"description" 	=> esc_html__("Enter the sorting order.", "xamin"),
				"group" => esc_html__( "Post Setting", "xamin" ),
				
			),
			array(
                "type" 			=> "dropdown",
					 "heading" 		=> esc_html__( "Arrow", "xamin" ),
					 "group" => esc_html__( "Post Setting", "xamin" ),
                "param_name" 	=> "arrow",               
                "value" 		=> array(
										"True"    => "true",
										"False"   => "false",
									),
					
			),
			array(
                "type" 			=> "dropdown",
					 "heading" 		=> esc_html__( "Dots", "xamin" ),
					 "group" => esc_html__( "Post Setting", "xamin" ),
                "param_name" 	=> "dots",                
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
				
		    ),
		    array(
				"type" 			=> "dropdown",
				"heading" 		=> esc_html__( "Loop", "xamin" ),
				"group" => esc_html__( "Post Setting", "xamin" ),
				"param_name" 	=> "loop",				
				"value" 		=> array(
								  "True"    => "true",
								  "False"   => "false",
							  ),
				
		    ),

		    array(
			   "type" 			=> "textfield",
			   "heading" 		=> esc_html__("Extra Class", "xamin" ),
				"param_name" 	=> "extra_class",								
				"description" 	=> esc_html__("Add Extra Class.", "xamin" ),
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