<?php
/*
 * Footer Options
 */
$opt_name;
Redux::setSection( $opt_name, array(
    'title' => esc_html__( 'Footer', 'xamin' ),
    'id'    => 'footer-editor',
    'icon'  => 'el el-arrow-down',
    'customizer_width' => '500px',
) );

Redux::setSection( $opt_name, array(
    'title' => esc_html__('Footer Image','xamin'),
    'id'    => 'footer-logo',
    'subsection' => true,
    'desc'  => esc_html__('This section contains options for footer.','xamin'),
    'fields'=> array(

        array(
            'id'        => 'display_footer',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Display Footer Background Image','xamin'),
            'subtitle' => esc_html__( 'Display Footer Background Image On All page', 'xamin' ),
            'options'   => array(
                            'yes' => esc_html__('Yes','xamin'),
                            'no' => esc_html__('No','xamin')
                        ),
            'default'   => esc_html__('no','xamin')
        ),
        
        array(
            'id'       => 'footer_image',         
            'type'     => 'media',
            'url'      => false,
            'title'    => esc_html__( 'Footer Background Image','xamin'),
            'required'  => array( 'display_footer', '=', 'yes' ),
            'read-only'=> false,
            'subtitle' => esc_html__( 'Upload Footer image for your Website. Otherwise site title will be displayed in place of Logo.','xamin'),
            'default'  => array( 'url' => get_template_directory_uri() .'/assets/images/footer-img.jpg' ),
        ), 

        array(
            'id'        => 'change_footer_color',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Change Footer Color','xamin'),
            'subtitle' => esc_html__( 'Turn on to Change Footer Background Color', 'xamin' ),
            'options'   => array(
                            '0' => esc_html__('Yes','xamin'),
                            '1' => esc_html__('No','xamin')
                        ),
            'default'   => esc_html__('0','xamin')
        ),

        array(
            'id'            => 'footer_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Footer Color', 'xamin' ),
            'subtitle'      => esc_html__( 'Choose Footer Background Color', 'xamin' ),
            'required'  => array( 'change_footer_color', '=', '0' ),
            'default'       =>'#eff1fe',
            'mode'          => 'background',
            'transparent'   => false
        ),

    )
));  

Redux::setSection( $opt_name, array(
    'title' => esc_html__('Footer Option','xamin'),
    'id'    => 'footer-section',
    'subsection' => true,
    'desc'  => esc_html__('This section contains options for footer.','xamin'),
    'fields'=> array(

        array(
            'id'        => 'xamin_footer_top',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Display Footer Top','xamin'),
            'subtitle' => esc_html__( 'Display Footer Top On All page', 'xamin' ),
            'options'   => array(
                            'yes' => esc_html__('Yes','xamin'),
                            'no' => esc_html__('No','xamin')
                        ),
            'default'   => esc_html__('yes','xamin')
        ),
        
        array(
            'id'        => 'xamin_footer_width',
            'type'      => 'image_select',
            'title'     => esc_html__( 'Footer Layout Type','xamin' ),
            'required'  => array( 'xamin_footer_top', '=', 'yes' ),
            'subtitle'  => wp_kses( __( '<br />Choose among these structures (1column, 2column and 3column) for your footer section.<br />To filling these column sections you should go to appearance > widget.<br />And put every widget that you want in these sections.','xamin' ), array( 'br' => array() ) ),            
            'options'   => array(
                                '1' => array( 'title' => esc_html__( 'Footer Layout 1','xamin' ), 'img' => get_template_directory_uri() . '/assets/images/backend/footer_first.png' ),
                                '2' => array( 'title' => esc_html__( 'Footer Layout 2','xamin' ), 'img' => get_template_directory_uri() . '/assets/images/backend/footer_second.png' ),
                                '3' => array( 'title' => esc_html__( 'Footer Layout 3','xamin' ), 'img' => get_template_directory_uri() . '/assets/images/backend/footer_third.png' ),
                                '4' => array( 'title' => esc_html__( 'Footer Layout 4','xamin' ), 'img' => get_template_directory_uri() . '/assets/images/backend/footer_four.png' ),  
                                '5' => array( 'title' => esc_html__( 'Footer Layout 5','xamin' ), 'img' => get_template_directory_uri() . '/assets/images/backend/footer_five.png' ),                                   
                            ),
            'default'   => '5',
        ),

        array(
            'id'       => 'footer_one',
            'type'     => 'select',
            'title'    => esc_html__('Select 1 Footer Alignment', 'xamin'), 
            'required'  => array( 'xamin_footer_top', '=', 'yes' ),
            'options'  => array(
                '1' => 'Left',
                '2' => 'Right',
                '3' => 'Center',
            ),
            'default'  => '1',
        ),

        array(
            'id'       => 'footer_two',
            'type'     => 'select',
            'title'    => esc_html__('Select 2 Footer Alignment', 'xamin'), 
            'required'  => array( 'xamin_footer_top', '=', 'yes' ),
            'options'  => array(
                '1' => 'Left',
                '2' => 'Right',
                '3' => 'Center',
            ),
            'default'  => '1',
        ),

        array(
            'id'       => 'footer_three',
            'type'     => 'select',
            'title'    => esc_html__('Select 3 Footer Alignment', 'xamin'), 
            'required'  => array( 'xamin_footer_top', '=', 'yes' ),
            'options'  => array(
                '1' => 'Left',
                '2' => 'Right',
                '3' => 'Center',
            ),
            'default'  => '1',
        ),

        array(
            'id'       => 'footer_fore',
            'type'     => 'select',
            'title'    => esc_html__('Select 4 Footer Alignment', 'xamin'),
            'required'  => array( 'xamin_footer_top', '=', 'yes' ), 
            'options'  => array(
                '1' => 'Left',
                '2' => 'Right',
                '3' => 'Center',
            ),
            'default'  => '1',
        ),

        array(
            'id'       => 'footer_five',
            'type'     => 'select',
            'title'    => esc_html__('Select 5 Footer Alignment', 'xamin'),
            'required'  => array( 'xamin_footer_top', '=', 'yes' ), 
            'options'  => array(
                '1' => 'Left',
                '2' => 'Right',
                '3' => 'Center',
            ),
            'default'  => '1',
        ),
    )
));

Redux::setSection( $opt_name, array(
    'title'      => esc_html__( 'Footer Copyright', 'xamin' ),
    'id'         => 'footer-copyright',
    'subsection' => true,
    'fields'     => array(

        array(
            'id'        => 'display_copyright',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Display Footer Top','xamin'),
            'subtitle' => esc_html__( 'Display Footer Top On All page', 'xamin' ),
            'options'   => array(
                            'yes' => esc_html__('Yes','xamin'),
                            'no' => esc_html__('No','xamin')
                        ),
            'default'   => esc_html__('yes','xamin')
        ),
         array(
            'id'       => 'footer_copyright_align',
            'type'     => 'select',
            'title'    => esc_html__('Select Footer Copyright Alignment', 'xamin'), 
            'options'  => array(
                '1' => 'Left',
                '2' => 'Right',
                '3' => 'Center',
            ),
            'default'  => '2',
        ),


        array(
            'id'        => 'footer_copyright',
            'type'      => 'editor',
            'required'  => array( 'display_copyright', '=', 'yes' ),
            'title'     => esc_html__( 'Copyright Text','xamin'),
            'default'   => esc_html__( 'Copyright 2019 xamin All Rights Reserved.','xamin'),
        ),

    )) 
);