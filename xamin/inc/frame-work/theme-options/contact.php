<?php
// -> START Contact
    Redux::setSection( $opt_name, array(
        'title' => esc_html__( 'Contact', 'xamin' ),
        'id'    => 'Contact', 
        'icon'  => 'el el-map-marker',
        'desc'  => esc_html__( '', 'xamin' ),
		'fields'           => array(

            array(
                'id'       => 'address',
                'type'     => 'textarea',
                'title'    => esc_html__( 'Address', 'xamin' ),
                'desc'     => esc_html__( 'Field Description', 'xamin' ),
                'default'  => esc_html__('1234 North Avenue Luke Lane, South Bend, IN 360001','xamin' ),
            ),

			array(
                'id'       => 'phone',
                'type'     => 'text',
                'title'    => esc_html__( 'Phone', 'xamin' ),
                'desc'     => esc_html__( 'Field Description', 'xamin' ),
                'preg' => array(
                    'pattern' => '/[^0-9_ -+()]/s', 
                    'replacement' => ''
                ),
                'default'  => esc_html__('+0123456789','xamin' ),
            ),

            array(
                'id'       => 'second_phone',
                'type'     => 'text',
                'title'    => esc_html__( 'Phone', 'xamin' ),
                'desc'     => esc_html__( 'Field Description', 'xamin' ),
                'preg' => array(
                    'pattern' => '/[^0-9_ -+()]/s', 
                    'replacement' => ''
                ),
                'default'  => esc_html__('+0123456789','xamin' ),
            ),
			
			array(
                'id'       => 'email',
                'type'     => 'text',
                'title'    => esc_html__( 'Email', 'xamin' ),
                'desc'     => esc_html__( 'Field Description', 'xamin' ),
                'validate' => 'email',
                'msg'      => esc_html__('custom error message','xamin' ),
                'default'  => esc_html__('support@iqnonicthemes.com','xamin' ),
            ),

            array(
                'id'       => 'second_email',
                'type'     => 'text',
                'title'    => esc_html__( 'Email', 'xamin' ),
                'desc'     => esc_html__( 'Field Description', 'xamin' ),
                'validate' => 'email',
                'msg'      => esc_html__('custom error message','xamin' ),
                'default'  => esc_html__('support@iqnonicthemes.com','xamin' ),
            ),     
						
        ) 
    ) );
?>