<?php
// Recent Portfolio
vc_map( array(
        "name" 			=> esc_html__("Portfolio Slider", "xamin"),
        "base" 			=> "xaminportfolioslider",
		"description" 	=> esc_html__( "portfolio slider", "xamin"),
        "category" 		=> esc_html__( "Xamin Shortcodes", "xamin" ),
        "icon" 			=> "xamin_recentPortfolio",
		"params" => array(

			array(
				"heading" 		=> esc_html__( "Select Style","xamin" ),
				"description" 	=> esc_html__( "Select Style of the Testimonial.","xamin"), 
				"type" 			=> "dropdown",
				"param_name" 	=> "style_type",
				"value" => array(
								"Style 1" =>  "1",
								"Style 2" => "2",
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
				"type" => "checkbox",
				"holder" => "div",
				"admin_label" => true,
				"heading" => esc_html__( "Disable Tab", "xamin" ),
				"edit_field_class" => "vc_col-xs-6",
				"param_name" => "disble_tab",
				"value"       => array(
					"disable" => "0",
				),                     
				"description" => "If selected, hover tab will disable.",
			),
			  
			array(
				"heading" 		=> esc_html__( "Title Alignment","xamin" ),
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
				"type" 			=> "dropdown",
				"heading" 		=> esc_html__("Order By", "xamin"),
				"param_name" 	=> "sortby",
				"value" 			=> array_flip( array("date" => esc_html__("Date", "xamin"),"title" => esc_html__("Title", "xamin") ,"name" => esc_html__("Name", "xamin") ,"author" => esc_html__("Author", "xamin"),"comment_count" => esc_html__("Comment Count", "xamin"),"random" => esc_html__("Random", "xamin") ) ),			
				"description" 	=> esc_html__("Enter the sorting order.", "xamin"),
			),	

			array(
				"type" 			=> "dropdown",
				"heading" 		=> esc_html__("Order", "xamin"),
				"param_name" 	=> "order",
				"value" 			=> array_flip(array("DESC" => esc_html__("Descending", "xamin"),"ASC" => esc_html__("Ascending", "xamin") ) ),			
				"description" 	=> esc_html__("Enter the sorting order.", "xamin"),
			),

			array(
				"type" 			=> "heading",
				"heading" 		=> esc_html__("Number of Post :", "xamin" ),
				"param_name" 	=> "desk_number",
				"group" => esc_html__( "Post Setting ", "xamin" ),
			 ),

			array(
			   "type" 			=> "textfield",
			   "heading" 		=> esc_html__("Desktop view", "xamin" ),
				"param_name" 	=> "desk_number",
				"edit_field_class" => "vc_col-xs-3",
				"group" => esc_html__( "Post Setting ", "xamin" ),
			   "description" 	=> esc_html__("Enter Number of post to Show.", "xamin" )
			),
			array(
			   "type" 			=> "textfield",
			   "heading" 		=> esc_html__("Laptop view", "xamin" ),
				"param_name" 	=> "lap_number",
				"edit_field_class" => "vc_col-xs-3",
				"group" => esc_html__( "Post Setting ", "xamin" ),
			   "description" 	=> esc_html__("Enter Number of post to Show.", "xamin" )
			),
			array(
			   "type" 			=> "textfield",
			   "heading" 		=> esc_html__("Tablet view", "xamin" ),
				"param_name" 	=> "tab_number",
				"edit_field_class" => "vc_col-xs-3",
				"group" => esc_html__( "Post Setting ", "xamin" ),
			   "description" 	=> esc_html__("Enter Number of post to Show.", "xamin" )
			),
			array(
			   "type" 			=> "textfield",
			   "heading" 		=> esc_html__("Mobile view", "xamin" ),
				"param_name" 	=> "mob_number",
				"edit_field_class" => "vc_col-xs-3",
				"group" => esc_html__( "Post Setting ", "xamin" ),
			   "description" 	=> esc_html__("Enter Number of post to Show.", "xamin" )
			),				

		
			array(
                "type" 			=> "dropdown",
                "heading" 		=> esc_html__( "Arrow", "xamin" ),
					 "param_name" 	=> "arrow",
					 "group" => esc_html__( "Post Setting ", "xamin" ),
                "value" 		=> array(
										"True"    => "true",
										"False"   => "false",
								   ),
			),
			array(
                "type" 			=> "dropdown",
                "heading" 		=> esc_html__( "Dots", "xamin" ),
					 "param_name" 	=> "dots",
					 "group" => esc_html__( "Post Setting ", "xamin" ),
                "value" 		=> array(
										"False"   => "false",
										"True"    => "true",
								   ),
				),
			array(
				"type" 			=> "dropdown",
				"heading" 		=> esc_html__( "Autoplay", "xamin" ),
				"param_name" 	=> "auto",
				"group" => esc_html__( "Post Setting ", "xamin" ),
				"value" 		=> array(
					    "True"    => "true",
						"False"   => "false",
	            ),
		    ),
		    array(
				"type" 			=> "dropdown",
				"heading" 		=> esc_html__( "Loop", "xamin" ),
				"param_name" 	=> "loops",
				"group" => esc_html__( "Post Setting ", "xamin" ),
				"value" 		=> array(
								  "True"    => "true",
								  "False"   => "false",
				),
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
				"group" => esc_html__( "Post Setting ", "xamin" ),
				"description" => esc_html__( "If you wish to style particular content element differently, then use this field to add a class name and then refer to it in your css file.","xamin" ),
				"group" => esc_html__( "Extra class", "xamin" ),
			),

			array(
				"type" => "css_editor",
				"heading" => esc_html__( "Css", "xamin" ),
				"param_name" => "css",
				"group" => esc_html__( "Post Setting ", "xamin" ),
				"group" => esc_html__( "Design options", "xamin" ),
			),
	
		)        
    ) 
);
?>