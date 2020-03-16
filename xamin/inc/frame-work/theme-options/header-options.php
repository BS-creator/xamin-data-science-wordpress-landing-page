<?php
/*
 * Header Options
 */
$opt_name;
Redux::setSection( $opt_name, array(
    'title' => esc_html__( 'Header', 'xamin' ),
    'id'    => 'header-editor',
    'icon'  => 'el el-arrow-up',
    'customizer_width' => '500px',
) );  
   
Redux::setSection( $opt_name, array(
    'title' => esc_html__('Layout','xamin'),
    'id'    => 'header-variation',
    'subsection' => true,
    'desc'  => esc_html__('This section contains options for header.','xamin'),
    'fields'=> array(
             
        array(
            'id'      => 'xamin_header_variation',
            'type'    => 'image_select',
            'title'   => esc_html__( 'Header Layout', 'xamin' ),
            'subtitle' => esc_html__( 'Select the design variation that you want to use for site header.', 'xamin' ),
            'options' => array(
                '1'      => array(
                    'alt' => 'Style1',
                    'img' => get_template_directory_uri() . '/assets/images/backend/header-1.jpg',
                ),  
                '2'      => array(
                    'alt' => 'Style2',
                    'img' => get_template_directory_uri() . '/assets/images/backend/header-2.jpg',
                ),                              
            ),
            'default' => '1'
        ),

    )
));

Redux::setSection( $opt_name, array(
    'title' => esc_html__( 'Header Top', 'xamin' ),
    'id'    => 'Header_Contact',
    'subsection' => true,
    'desc'  => esc_html__( '', 'xamin' ),
    'fields'  => array(

        array(
            'id'        => 'email_and_button',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Display Header Top','xamin'),
            'subtitle' => esc_html__( 'Turn on to display the Email and Phone, Login and Button on header menu.','xamin'),
            'options'   => array(
                            'yes' => esc_html__('On','xamin'),
                            'no' => esc_html__('Off','xamin')
                        ),
            'default'   => esc_html__('no','xamin')
        ),
        
        array(
            'id'       => 'header_phone',
            'type'     => 'text',
            'title'    => esc_html__( 'Phone', 'xamin' ),
            'subtitle' => esc_html__( 'Subtitle', 'xamin' ),
            'required'  => array( 'email_and_button', '=', 'yes' ),
            'desc'     => esc_html__( 'Field Description', 'xamin' ),
            'preg' => array(
                'pattern' => '/[^0-9_ -+()]/s', 
                'replacement' => ''
            ),
            'default'  => esc_html__('+0123456789','xamin'),
        ),
        
        array(
            'id'       => 'header_email',
            'type'     => 'text',
            'title'    => esc_html__( 'Email', 'xamin' ),
            'desc'     => esc_html__( 'Field Description', 'xamin' ),
            'required'  => array( 'email_and_button', '=', 'yes' ),
            'validate' => 'email',
            'msg'      => esc_html__('custom error message','xamin'),
            'default'  => esc_html__('support@iqnonicthemes.com','xamin'),
        ),

        array(
            'id'       => 'header_address',
            'type'     => 'textarea',
            'title'    => esc_html__( 'Address', 'xamin' ),
            'required'  => array( 'email_and_button', '=', 'yes' ),
            'desc'     => esc_html__( 'Field Description', 'xamin' ),
            'default'  => esc_html__('1234 North Avenue Luke Lane, South Bend, IN 360001','xamin' ),
        ),

        array(
            'id'        => 'header_display_contact',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Email/Phone on Header','xamin'),
            'required'  => array( 'email_and_button', '=', 'yes' ),
            'subtitle' => esc_html__( 'Turn on to display the Email and Phone number in header menu.','xamin'),
            'options'   => array(
                            'yes' => esc_html__('On','xamin'),
                            'no' => esc_html__('Off','xamin')
                        ),
            'default'   => esc_html__('yes','xamin')
        ),

        array(
            'id'        => 'xamin_header_social_media',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Social Media','xamin'),
            'required'  => array( 'email_and_button', '=', 'yes' ),
            'subtitle' => esc_html__( 'Turn on to display Social Media in top header.','xamin'),
            'options'   => array(
                            'yes' => esc_html__('Yes','xamin'),
                            'no' => esc_html__('No','xamin')
                        ),
            'default'   => esc_html__('yes','xamin')
        ),
                    
    )
    
) );

Redux::setSection( $opt_name, array(
    'title' => esc_html__('Button','xamin'),
    'id'    => 'header-button',
    'subsection' => true,
    'desc'  => esc_html__('This section contains options for header.','xamin'),
    'fields'=> array(

        array(
            'id'        => 'header_display_button',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Login/CTA Button','xamin'),
            'subtitle' => esc_html__( 'Turn on to display the Login and CTA button in top header.','xamin'),
            'options'   => array(
                            'yes' => esc_html__('On','xamin'),
                            'no' => esc_html__('Off','xamin')
                        ),
            'default'   => esc_html__('yes','xamin')
        ),
             
        array(
            'id'        => 'xamin_download_title',
            'type'      => 'text',
            'title'     => esc_html__( 'Title(Download)','xamin'),
            'required'  => array( 'header_display_button', '=', 'yes' ),
            'default'   => 'Get Started',
            'desc'   => esc_html__('Change Title (e.g.Download).','xamin'),
        ),
        
        array(
            'id'        => 'xamin_download_link',
            'type'      => 'text',
            'title'     => esc_html__( 'Link(Download)','xamin'),
            'required'  => array( 'header_display_button', '=', 'yes' ),
            'desc'   => esc_html__('Add download link.','xamin'),
        ),

    )
));