<?php
// Timeline

vc_map( 
    array(
        "name"          => esc_html__("Timeline","xamin" ),
        "base"          => "xamintimeline",
        "description"   => esc_html__( "xamin Timeline","xamin" ),
        "category"      => esc_html__( "Xamin Shortcodes","xamin" ),
        "icon"          => "icon-wpb-xamintimeline",       
        "params" => array(
		
			array(
				'heading'		=> esc_html__( 'Add Frequently Asked Questions', 'xamin' ),
				'description'	=> esc_html__( 'Enter Title and Number out of 100', 'xamin' ),
				'type'			=> 'param_group',
				'param_name'	=> 'xamin_timeline',
				'params' => array(

						array(
	                        "heading"       => esc_html__( "Title","xamin" ),
	                        "description"   => esc_html__( "Enter the title","xamin"),
	                        "type"          => "textfield",
	                        "param_name"    => "xamintitle_content",
	                        "value"         => esc_html__("Easy to Customize","xamin" ),
	                        "admin_label" => true,
	                    ),

                        array(
	                        "heading"       => esc_html__( "Date","xamin" ),
	                        "description"   => esc_html__( "Enter the date","xamin"),
	                        "type"          => "textfield",
	                        "param_name"    => "xamin_date",
	                    ),

	                    array(
	                        "heading"       => esc_html__( "Address","xamin" ),
	                        "description"   => esc_html__( "Enter the address","xamin"),
	                        "type"          => "textfield",
	                        "param_name"    => "xamin_address",
	                    ),	                    

                        array(
                            "heading"       => esc_html__( "Title Element Tag","xamin" ),
                            "description"   => esc_html__( "Element Tag of the title text.","xamin"),
                            "type"          => "dropdown",
                            "param_name"    => "tag",
                            "edit_field_class" => "vc_col-xs-6",
                            "value" => array(
                            	            "h1" => "h1",
                                            "h2" => "h2",
                                            "h3" => "h3",
                                            "h4" => "h4",
                                            "h5" => "h5",
                                            "h6" => "h6",
                                            "p"  => "p",
                                            "span"  => "span",
                                        ),
                        ),

                        array(
		                    "heading"		=> esc_html__( "Title Text Color","xamin" ),
		                    "type"			=> "colorpicker",
		                    "edit_field_class" => "vc_col-xs-6",
		                    "param_name"	=> "title_color",
		                    "value"      => "#313e5b",
		                ),

                        array(
                            "heading"       => esc_html__( "Sub Title","xamin" ),
                            "description"   => esc_html__( "Enter the sub title","xamin"),
                            "type"          => "textfield",
                            "param_name"    => "xamin_subtitle",
                            "value"         => esc_html__("Easy to Customize Sub Title","xamin" ),
                        ),

                        array(
                            "heading"       => esc_html__( "Sub Title Element Tag","xamin" ),
                            "description"   => esc_html__( "Element Tag of the sub title text.","xamin"),
                            "type"          => "dropdown",
                            "param_name"    => "sub_tag",
                            "edit_field_class" => "vc_col-xs-6",
                            "value" => array(
                            	            "h1" => "h1",
                                            "h2" => "h2",
                                            "h3" => "h3",
                                            "h4" => "h4",
                                            "h5" => "h5",
                                            "h6" => "h6",
                                            "p"  => "p",
                                            "span"  => "span",
                                        ),
                        ),

                        array(
		                    "heading"		=> esc_html__( "Sub Title Text Color","xamin" ),
		                    "type"			=> "colorpicker",
		                    "edit_field_class" => "vc_col-xs-6",
		                    "param_name"	=> "subtitle_color",
		                    "value"      => "#313e5b",
		                ),

		                array(
		                    "heading"       => esc_html__( "Box Position","xamin" ),
		                    "description"   => wp_kses( __( "Sets the Position for a Timeline box..","xamin"), array( "br" => array() ) ),
		                    "type"          => "dropdown",
		                    "param_name"    => "xamin_box_position",
		                    "value"         => array(
		                            "Left" => "left",
		                            "Right" => "right",
		                    ),
		                ),

		                array(
							'heading'		=> esc_html__( 'Add Timeline Box List', 'xamin' ),
							'description'	=> esc_html__( 'Enter Text for Box List', 'xamin' ),
							'type'			=> 'param_group',
							'param_name'	=> 'xamin_boxlist',
							'params' => array(

								array(
		                            "heading"       => esc_html__( "List Text","xamin" ),
		                            "description"   => esc_html__( "Enter the List text","xamin"),
		                            "type"          => "textfield",
		                            "param_name"    => "xamin_listtest",
		                            "admin_label" => true,
		                            "value"         => esc_html__("Easy to Customize List","xamin" ),
		                        ),

						    ),
						),    		


															    
                ),


			),


		),
	)
);
?>