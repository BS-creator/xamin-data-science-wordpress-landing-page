<?php
// Progress Bar
vc_map(
	array(
		"name" 			=> esc_html__( 'FAQ','xamin' ),
		"base" 			=> 'xaminFAQ',
		"description" 	=> esc_html__( 'xamin FAQ', 'xamin'),
		"category" 		=> esc_html__( 'Xamin Shortcodes', 'xamin' ),
		"icon" 			=> "icon-wpb-maxtitle",
		"params" => array(
		
		
			array(
			'heading'		=> esc_html__( 'Add Frequently Asked Questions', 'xamin' ),
			'description'	=> esc_html__( 'Enter Title and Number out of 100', 'xamin' ),
			'type'			=> 'param_group',
			'param_name'	=> 'faq',
			'params' => array(

					array(
						'heading'		=> esc_html__( 'Title', 'xamin' ),
						'type'			=> 'textfield',
						'param_name'	=> 'title',
						'admin_label'	=> true,
						'value'         => 'Ipsum is simply dummy the printing?',
						
					),
					
					array(
						'heading'		=> esc_html__( 'Description', 'xamin' ),
						'type'			=> 'textarea',
						'param_name'	=> 'description',
						'value'         => 'It has survived not only five centuries, but also the leap into electronic typesetting. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur.',	
					),
															    
                ),
			),
		
		),
	)
);
?>