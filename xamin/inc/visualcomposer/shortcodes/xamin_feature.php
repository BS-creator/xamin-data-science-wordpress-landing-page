<?php
// Testimonial
vc_map(
	array(
		"name" 			=> "Features",
		"base" 			=> "xaminfeaturescircle",
		"description" 	=> esc_html__( "Features Circle","xamin" ),
		"category" 		=> esc_html__( "Xamin Shortcodes","xamin" ),
		"icon" 			=> "icon-wpb-xamintitle",
		"params" => array(
			array(
			"heading"		=> esc_html__( "Add List", "xamin" ),
			"description"	=> esc_html__( "Enter Your List Data.", "xamin" ),
			"type"			=> "param_group",
			"param_name"	=> "features",
			"params" => array(
				 array(
                    "heading" 		=> esc_html__( "Text","xamin" ),
                    "description" 	=> esc_html__( "Enter the Text","xamin"),
                    "type" 			=> "textarea",
                    "param_name" 	=> "xaminsubtitle_content",
                    "value"         => esc_html__( "Simply dummy text of the Lorem Ipsum is printing and type setting industry.","xamin" ),
                    ),

            array(
				"type"        => "attach_image",
				"heading"     => esc_html__("Add Images", "xamin"),
				"param_name"  => "image",
				"value"       => "",
				"description" => esc_html__("Select logo from media library.", "xamin")
            ),
        ),
		),

            array(
				"type"        => "attach_image",
				"heading"     => esc_html__("Add Logo Images", "xamin"),
                "param_name"  => "logo_image",
                "group" => esc_html__( "Logo Image", "xamin" ),
				"value"       => "",
				"description" => esc_html__("Select logo from media library.", "xamin")
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