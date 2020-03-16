<?php
$categories = array();
$categories = get_terms();
$Category_ID_Array = array('All');
foreach($categories as $category){
	$Category_ID_Array[$category->term_id] = $category->slug;
}

vc_map(
	array(
		"name" 			=> esc_html__( "Career","xamin" ),
		"base" 			=> "xamincareer",
		"description" 	=> esc_html__( "xamin Career", "xamin"),
		"category" 		=> esc_html__( "Xamin Shortcodes", "xamin" ),
		"icon" 			=> "icon-wpb-maxtitle",
		"params" => array(
		
		    array(
                "heading"       => esc_html__( "Select Style","xamin" ),
                "description"   => wp_kses( __( "Style of the career.","xamin"), array( "br" => array() ) ),
                "type"          => "dropdown",
                "param_name"    => "style_type",
                "value"         => array(
                    "Style 1" => "1",
                    "Style 2" => "2",
                ),
            ),

            array(
			   "type" 			=> "dropdown",
			   "heading" 		=> esc_html__( 'Category', 'woobox' ),
			   "param_name" 	=> "category",
			   'value' => $Category_ID_Array,
			   'description' 	=> esc_html__( 'Select specific category, leave blank to show all categories.', 'woobox')
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
		
		),
	)
);
?>