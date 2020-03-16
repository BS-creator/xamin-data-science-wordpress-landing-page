<?php
// Recent Blog
vc_map( array(
        "name" 			=> esc_html__("Blog", "xamin"),
        "base" 			=> "xaminblog",
		"description" 	=> esc_html__( "Recent Blog", "xamin"),
        "category" 		=> esc_html__( "Xamin Shortcodes", "xamin" ),
        "icon" 			=> "xamin_recentblog",
		"params" => array(

			array(
                "type" 			=> "dropdown",
                "heading" 		=> esc_html__( "Select Style", "xamin" ),
                "param_name" 	=> "type",
                "value" 		=> array(
										"Blog Slider"    => "1",
										"Blog 1 Columns" => "4",
										"Blog 2 Columns" => "2",
										"Blog 3 Columns" => "3",
								   ),
                "description" => esc_html__( "You can choose among these pre-designed types.", "xamin")
            ),
			array(
				"type" 			=> "heading",
				"group" => esc_html__( "Post Setting", "xamin" ),
				 "param_name" 	=> "heading",
				 "dependency"	=> array(
					"element" => "type",
					"value"   => array("1"),
				),
			 ),

			array(
				"type" 			=> "textfield",
				"heading" 		=> esc_html__("Desktop view", "xamin" ),
				 "param_name" 	=> "desk_number",
				 "edit_field_class" => "vc_col-xs-3",
				 "group" => esc_html__( "Post Setting", "xamin" ),
				 "description" 	=> esc_html__("Enter Number of post to Show.", "xamin" ),
				 "dependency"	=> array(
					"element" => "type",
					"value"   => array("1"),
				),
			 ),
			 array(
				"type" 			=> "textfield",
				"heading" 		=> esc_html__("Laptop view", "xamin" ),
				 "param_name" 	=> "lap_number",
				 "edit_field_class" => "vc_col-xs-3",
				 "group" => esc_html__( "Post Setting", "xamin" ),
				"description" 	=> esc_html__("Enter Number of post to Show.", "xamin" ),
				"dependency"	=> array(
					"element" => "type",
					"value"   => array("1"),
				),
			 ),
			 array(
				"type" 			=> "textfield",
				"heading" 		=> esc_html__("Tablet view", "xamin" ),
				 "param_name" 	=> "tab_number",
				 "edit_field_class" => "vc_col-xs-3",
				 "group" => esc_html__( "Post Setting", "xamin" ),
				"description" 	=> esc_html__("Enter Number of post to Show.", "xamin" ),
				"dependency"	=> array(
					"element" => "type",
					"value"   => array("1"),
				),
			 ),
			 array(
				"type" 			=> "textfield",
				"heading" 		=> esc_html__("Mobile view", "xamin" ),
				 "param_name" 	=> "mob_number",
				 "edit_field_class" => "vc_col-xs-3",
				 "group" => esc_html__( "Post Setting", "xamin" ),
				"description" 	=> esc_html__("Enter Number of post to Show.", "xamin" ),
				"dependency"	=> array(
					"element" => "type",
					"value"   => array("1"),
				),
			 ),			
	
			array(
				"type" 			=> "dropdown",
				"heading" 		=> esc_html__( "Arrow", "xamin" ),
				"param_name" 	=> "arrow",
				"group" => esc_html__( "Post Setting", "xamin" ),
				"dependency"	=> array(
					"element" => "type",
					"value"   => array("1"),
				),
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
						"dependency"	=> array(
							"element" => "type",
							"value"   => array("1"),
						),
						"value" 		=> array(
										"False"   => "false",
										"True"    => "true",
									),
				),		

			array(
			   "type" 			=> "dropdown",
			   "heading" 		=> esc_html__("Order By", "xamin"),
			   "group" => esc_html__( "Post Setting", "xamin" ),
			   "dependency"	=> array(
				"element" => "type",
				"value"   => array("1"),
			),
			   "param_name" 	=> "sort",
			   "value" 			=> array_flip( array("date" => esc_html__("Date", "xamin"),"title" => esc_html__("Title", "xamin") ,"name" => esc_html__("Name", "xamin") ,"author" => esc_html__("Author", "xamin"),"comment_count" => esc_html__("Comment Count", "xamin"),"random" => esc_html__("Random", "xamin") ) ),			
			   "description" 	=> esc_html__("Enter the sorting order.", "xamin")
			),

			array(
			   "type" 			=> "dropdown",
			   "heading" 		=> esc_html__("Order", "xamin"),
			   "group" => esc_html__( "Post Setting", "xamin" ),
			   "dependency"	=> array(
				"element" => "type",
				"value"   => array("1"),
			),
			   "param_name" 	=> "order",
			   "value" 			=> array_flip(array("DESC" => esc_html__("Descending", "xamin"),"ASC" => esc_html__("Ascending", "xamin") ) ),			
			   "description" 	=> esc_html__("Enter the sorting order.", "xamin")
			),

			array(
				"type" 			=> "dropdown",
				"heading" 		=> esc_html__( "Autoplay", "xamin" ),
				"group" => esc_html__( "Post Setting", "xamin" ),
				"dependency"	=> array(
					"element" => "type",
					"value"   => array("1"),
				),
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
				"dependency"	=> array(
					"element" => "type",
					"value"   => array("1"),
				),
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