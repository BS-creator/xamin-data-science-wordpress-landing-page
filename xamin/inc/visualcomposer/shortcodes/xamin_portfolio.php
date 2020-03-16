<?php
// Recent Portfolio
vc_map( array(
        "name" 			=> esc_html__("Portfolio", "xamin"),
        "base" 			=> "xaminportfolio",
		"description" 	=> esc_html__( "portfolio", "xamin"),
        "category" 		=> esc_html__( "Xamin Shortcodes", "xamin" ),
        "icon" 			=> "xamin_recentPortfolio",
		"params" => array(

			array(
				"heading" 		=> esc_html__( "Select Columns","xamin" ),
				"description" 	=> esc_html__( "Columns of the Portfolio.","xamin"),
				"type" 			=> "dropdown",
				"edit_field_class" => "vc_col-xs-6",
				"param_name" 	=> "columns_type",
				"value" 		=> array(
										"2 Columns" => "2",
                                        "3 Columns" => "3",
										"4 Columns" => "4",
										"5 Columns" => "5",
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
				"class" => "",
				"heading" => esc_html__( "No Space", "xamin" ),
				"param_name" => "space_field",
				"edit_field_class" => "vc_col-xs-6",
				"value"       => array(
					""=>"no-padding",
					), 
   				"std"         => " ",
				"description" => esc_html__( "If checked row will be set to no spaceing in columns.", "xamin" )
			),

			array(
				"heading" 		=> esc_html__( "Hover Style","xamin" ),
				"description" 	=> esc_html__( "Hover Style of the title.","xamin"),
				"type" 			=> "dropdown",
				"param_name" 	=> "hover_style",
				"edit_field_class" => "vc_col-xs-6",
				"value" => array(
							"Hover Style1" => "1",
							"Hover Style2" => "2",
							),
			),

			array(
				"heading" 		=> esc_html__( "Masonry","xamin" ),
				"description" 	=> esc_html__( "Columns of the Portfolio.","xamin"),
				"type" 			=> "dropdown",
				"edit_field_class" => "vc_col-xs-6",
				"param_name" 	=> "masonry_type",
				"value" 		=> array(
										"Yes" => "0",
                                        "NO" => "1",
								   ),
			),

			array(
				"heading" 		=> esc_html__( "Title Alignment","xamin" ),
				"description" 	=> wp_kses( __( "Alignment of the title text.","xamin"), array( "br" => array() ) ),
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
	
		)        
    ) 
);
?>