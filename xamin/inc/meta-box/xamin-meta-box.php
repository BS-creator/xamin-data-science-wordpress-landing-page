<?php
add_filter( 'rwmb_meta_boxes', 'xamin_meta_boxes' );
function xamin_meta_boxes( $meta_boxes ) {	

	// Team Member Details In Class
	$meta_boxes[] = array(
		'title'			=> esc_html__( 'Team Member Details','xamin' ),
		'post_types'	=> 'xaminteam',
		'fields'		=> array(

			array(
				'id'		=> 'xamin_team_designation',
				'name'		=> esc_html__( 'Designation :','sofbox' ),				
				'type'		=> 'text'				
			),

			array(
				'type'	=>'divider',
			),
					
			array(
				'id'		=> 'xamin_team_facebook',
				'name'		=> esc_html__( 'Facebook Url :','xamin' ),				
				'type'		=> 'text'
			),
			array(
				'id'		=> 'xamin_team_twitter',
				'name'		=> esc_html__( 'Twitter Url :','xamin' ),				
				'type'		=> 'text'
			),
			array(
				'id'		=> 'xamin_team_google',
				'name'		=> esc_html__( 'Google Url :','xamin' ),				
				'type'		=> 'text'
			),
			array(
				'id'		=> 'xamin_team_github',
				'name'		=> esc_html__( 'Github Url :','xamin' ),				
				'type'		=> 'text'
			),
			array(
				'id'		=> 'xamin_team_insta',
				'name'		=> esc_html__( 'Instagram Url :','xamin' ),				
				'type'		=> 'text'
			),
			
		),
	);

	// Testimonial Member Details In Class
	$meta_boxes[] = array(
		'title'			=> esc_html__( 'Testimonial Member Details','xamin' ),
		'post_types'	=> 'testimonial',
		'fields'		=> array(
					
			array(
				'id'		=> 'xamin_testimonial_designation',
				'name'		=> esc_html__( 'Designation :','xamin' ),				
				'type'		=> 'text'				
			),
		),
	);

	// Leader Member Details In Class
	$meta_boxes[] = array(
		'title'			=> esc_html__( 'Leader Member Details','xamin' ),
		'post_types'	=> 'consultleadership',
		'fields'		=> array(
					
			array(
				'id'		=> 'xamin_leader_designation',
				'name'		=> esc_html__( 'Designation :','xamin' ),				
				'type'		=> 'text'				
			),
			array(
				'type'	=>'divider',
			),
			array(
				'id'		=> 'xamin_leader_facebook',
				'name'		=> esc_html__( 'Facebook Url :','xamin' ),				
				'type'		=> 'text'
			),
			array(
				'id'		=> 'xamin_leader_twitter',
				'name'		=> esc_html__( 'Twitter Url :','xamin' ),				
				'type'		=> 'text'
			),
			array(
				'id'		=> 'xamin_leader_google',
				'name'		=> esc_html__( 'Google Url :','xamin' ),				
				'type'		=> 'text'
			),
			array(
				'id'		=> 'xamin_leader_github',
				'name'		=> esc_html__( 'Github Url :','xamin' ),				
				'type'		=> 'text'
			),
			array(
				'id'		=> 'xamin_leader_insta',
				'name'		=> esc_html__( 'Instagram Url :','xamin' ),				
				'type'		=> 'text'
			),

		),
	);

	// Faqs Details In Class
	$meta_boxes[] = array(
		'title'			=> esc_html__( 'Career Details','xamin' ),
		'post_types'	=> 'xamincareer',
		'fields'		=> array(
					
			array(
				'id'		=> 'career_button_name',
				'name'		=> esc_html__( 'Career Button Name :','xamin' ),				
				'type'		=> 'text'				
			),

			array(
				'id'		=> 'career_button_link',
				'name'		=> esc_html__( 'Career Button Link :','xamin' ),				
				'type'		=> 'text'				
			),

		),
	);

	// Faqs Details In Class
	$meta_boxes[] = array(
		'title'			=> esc_html__( 'Flipbox Details','xamin' ),
		'post_types'	=> 'flipbox',
		'fields'		=> array(
					
			array(
				'id'		=> 'flipbox_button_name',
				'name'		=> esc_html__( 'Flipbox Button Name :','xamin' ),				
				'type'		=> 'text'				
			),

			array(
				'id'		=> 'flipbox_button_link',
				'name'		=> esc_html__( 'Flipbox Button Link :','xamin' ),				
				'type'		=> 'text'				
			),

			array(
				'id'		=> 'hover_image',
				'name'		=> esc_attr__( 'Hover Image :','xamin' ),				
				'type'		=> 'image_advanced',
				'max_file_uploads' => 1,			
			),

		),
	);

	// Project Details In Class
	$meta_boxes[] = array(
		'title'			=> esc_html__( 'Project Details','xamin' ),
		'post_types'	=> 'xaminproject',
		'fields'		=> array(
					
			array(
				'id'		=> 'project_button',
				'name'		=> esc_html__( 'Button Name :','xamin' ),				
				'type'		=> 'text'				
			),

			array(
				'id'		=> 'project_button_url',
				'name'		=> esc_html__( 'Button Link :','xamin' ),				
				'type'		=> 'text'				
			),
		),
	);
	// Portfolio Member Details In Class
	$meta_boxes[] = array(
		'title'			=> esc_html__( 'Portfolio Project Details','xamin' ),
		'post_types'	=> 'portfolio',
		'fields'		=> array(

			array(
				'id'		=> 'portfolio_masonry_image',
				'name'		=> esc_attr__( 'Portfolio Masonry Image :','xamin' ),				
				'type'		=> 'image_advanced',
				'max_file_uploads' => 1,			
			),
					
			array(
				'id'		=> 'xamin_portfolio_client',
				'name'		=> esc_html__( 'Client Name :','xamin' ),				
				'type'		=> 'text'				
			),
			array(
				'id'		=> 'xamin_portfolio_website',
				'name'		=> esc_html__( 'Website :','xamin' ),				
				'type'		=> 'text'				
			),
			array(
				'id' => 'portfolio_data',
				'type' => 'date',
				'name' => esc_html__( 'Date on:', 'xamin' ),
				'js_options' => array(
				  'dateFormat' => 'dd/mm/yy',
				),
				'class' => 'data-arrivo',
			),

		),
	);
	return $meta_boxes;
}
?>
