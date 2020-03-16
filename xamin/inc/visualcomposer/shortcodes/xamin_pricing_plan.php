<?php
// Pricing Plan
vc_map(
	array(
		"name" 			=> esc_html__('Pricing Plan','xamin'),
		"base" 			=> 'xaminpricing',
		"description" 	=> esc_html__( 'xamin Pricing', 'xamin'),
		"category" 		=> esc_html__( 'Xamin Shortcodes', 'xamin' ),
		"icon" 			=> "icon-xaminpricing",
		"params" => array(			

            

			array(
				'heading'		=> esc_html__( 'Title', 'xamin' ),
				'type'			=> 'textfield',
				'param_name'	=> 'pp_title',
				'admin_label'	=> true,
			),
			array(
				'heading'		=> esc_html__( 'Sub Title', 'xamin' ),
				'type'			=> 'textfield',
				'param_name'	=> 'pp_subtitle',
				'admin_label'	=> true,
			),
			   array(
                    "heading"       => esc_html__( "Contant","xamin" ),
                    "description"   => esc_html__( "Enter the Contant","xamin"),
                    "type"          => "textarea",
                    "param_name"    => "pp_content",
                    "value"         => esc_html__("It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.","xamin" ),
                ),
			array(
				'heading'		=> esc_html__( 'Price', 'xamin' ),
				'type'			=> 'textfield',
				'param_name'	=> 'pp_currecny',
				'admin_label'	=> true,
				'description'   => esc_html__('Please put your currecny. EX:$','xamin' ),
 			),
			array(
				'heading'		=> esc_html__( 'Price', 'xamin' ),
				'type'			=> 'textfield',
				'param_name'	=> 'pp_price',
				'admin_label'	=> true,
				'description'   => esc_html__('please put your price ','xamin' ),
 			),

 			array(
				'heading'		=> esc_html__( 'Duration', 'xamin' ),
				'type'			=> 'textfield',
				'param_name'	=> 'pp_duration',
				'admin_label'	=> true,
				'description'   => esc_html__('please put your price ','xamin' ),
 			),
			
			array(
			'heading'		=> esc_html__( 'Add Pricing Features', 'xamin' ),
			'description'	=> esc_html__( 'Enter Features', 'xamin' ),
			'type'			=> 'param_group',
			'param_name'	=> 'features',
			'params' => array(

					array(
						'heading'		=> esc_html__( 'Features', 'sofbox' ),
						'type'			=> 'textfield',
						'param_name'	=> 'tab_title',
						'edit_field_class' => 'vc_col-xs-9',
						'admin_label'	=> true,
						'value'         => esc_html__('5 Email Accounts','sofbox' ),
					),
					
					array( 
						'type' => 'checkbox',
						'holder' => 'div',
						'admin_label' => true,
						'heading' => __( 'Disable Plan customer?', 'sofbox' ),
						'param_name' => 'disble_pcustomer',
						"value"       => array(
							"disable" => '0',
						),
						'edit_field_class' => 'vc_col-xs-3',                         
						'description' => 'If selected, plan will disable.',
					),
					
				),
			),

			array(
				'heading'		=> esc_html__( 'Button Label', 'xamin' ),
				'type'			=> 'textfield',
				'param_name'	=> 'pp_btl_label',
				'admin_label'	=> true,
			),			
			array(
				'heading'		=> esc_html__( 'Button URL', 'xamin' ),
				'type'			=> 'textfield',
				'param_name'	=> 'pp_btl_url',
				'admin_label'	=> true,
			),
			
			array(
                    "heading"       => esc_html__( "Element Position","xamin" ),
                    "description"   => wp_kses( __( "Position of the title text.","xamin"), array( "br" => array() ) ),
                    "type"          => "dropdown",
                    "param_name"    => "position",
                    "value" => array(
                                "Left" =>  "left",
                                "Center" => "center",
                                "Right" => "right",
                            ),
                ),
		),
	)
);
?>