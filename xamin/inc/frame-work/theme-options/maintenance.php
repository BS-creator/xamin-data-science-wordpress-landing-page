<?php
// -> START Maintenance
    Redux::setSection( $opt_name, array(
        'title' => esc_html__( 'Maintenance', 'xamin' ),
        'id'    => 'Maintenance', 
        'icon'  => 'el el-off',
        'desc'  => esc_html__( '', 'xamin' ),
		'fields'           => array(

            array(
                'id'        => 'mainte_mode',
                'type'      => 'button_set',
                'title'     => esc_html__( 'On/Off Maintenance or Coming Soon mode','xamin'),
                'subtitle' => esc_html__( 'Turn on to active Maintenance or Coming Soon mode.','xamin'),
                'options'   => array(
                                'yes' => esc_html__('On','xamin'),
                                'no' => esc_html__('Off','xamin')
                            ),
                'default'   => esc_html__('no','xamin')
            ),

            
            array(
                'id'       => 'maintenance_radio',
                'type'     => 'radio',
                'title'    => esc_html__( 'Maintenance Mode', 'xamin' ),
                'required'  => array( 'mainte_mode', '=', 'yes' ),
                'options'  => array(
                    '1' => 'Maintenance',
                    '2' => 'Coming Soon',
                ),
                'default'  => '1'
            ),

            array(
                'id'       => 'maintenance_bg_image',         
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'Maintenance Default Background Image','xamin'),
                'required'  => array( 'maintenance_radio', '=', '1' ),
                'default'  => array( 'url' => get_template_directory_uri() .'/assets/images/maintenance.jpg' ),
                'read-only'=> false,
                'subtitle' => esc_html__( 'Upload background image for your Website. Otherwise blank field will be displayed in place of this section.','xamin'),
            ),

            array(
                'id'       => 'maintenance_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Maintenance Title', 'xamin' ),
                'desc'     => esc_html__( 'Field Description', 'xamin' ),
                'required'  => array( 'maintenance_radio', '=', '1' ),
                'default'  => esc_html__('Sorry,we are down for maintenance','xamin' ),
            ),

            array(
                'id'       => 'mainten_desc',
                'type'     => 'text',
                'title'    => esc_html__( 'Maintenance Description', 'xamin' ),
                'desc'     => esc_html__( 'Field Description', 'xamin' ),
                'required'  => array( 'maintenance_radio', '=', '1' ),
                'default'  => esc_html__('We will be back shortly','xamin' ),
            ),

            array(
                'id'       => 'coming_soon_bg_image',         
                'type'     => 'media',
                'url'      => true,
                'title'    => esc_html__( 'Coming Soon Default Background Image','xamin'),
                'required'  => array( 'maintenance_radio', '=', '2' ),
                'default'  => array( 'url' => get_template_directory_uri() .'/assets/images/maintenance.jpg' ),
                'read-only'=> false,
                'subtitle' => esc_html__( 'Upload background image for your Website. Otherwise blank field will be displayed in place of this section.','xamin'),
            ),

            array(
                'id'       => 'coming_title',
                'type'     => 'text',
                'title'    => esc_html__( 'Coming Soon Title', 'xamin' ),
                'desc'     => esc_html__( 'Field Description', 'xamin' ),
                'required'  => array( 'maintenance_radio', '=', '2' ),
                'default'  => esc_html__('Coming Soon','xamin' ),
            ),

            array(
                'id'       => 'coming_desc',
                'type'     => 'text',
                'title'    => esc_html__( 'Coming Soon Description', 'xamin' ),
                'desc'     => esc_html__( 'Field Description', 'xamin' ),
                'required'  => array( 'maintenance_radio', '=', '2' ),
                'default'  => esc_html__('We will be back with new and professional Ideas','xamin' ),
            ),

            array(
                'id'          => 'opt_date',
                'type'        => 'date',
                'title'       => esc_html__('Coming Soon Date', 'xamin'), 
                'required'  => array( 'maintenance_radio', '=', '2' ),
                'desc'        => esc_html__('This is the description field, again good for additional info.', 'xamin'),
                'placeholder' => 'Click to enter a date'
            ),
            
            array(
                'id'          => 'opt_date',
                'type'        => 'date',
                'title'       => esc_html__('Coming Soon Date', 'xamin'), 
                'required'  => array( 'maintenance_radio', '=', '2' ),
                'desc'        => esc_html__('This is the description field, again good for additional info.', 'xamin'),
                'placeholder' => 'Click to enter a date'
            ),		
						
        ) 
    ) );
?>
