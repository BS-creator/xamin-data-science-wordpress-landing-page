<?php
/*
 * Header Options
 */
$opt_name;
Redux::setSection( $opt_name, array(
    'title' => esc_html__( 'General', 'xamin' ),
    'id'    => 'editer-general',
    'icon'  => 'el el-dashboard',
    'customizer_width' => '500px',
) );

Redux::setSection( $opt_name, array(
    'title' => esc_html__('Body Layout','xamin'),
    'id'    => 'layout-section',
    'icon'  => 'el el-website',
    'subsection' => true,
    'fields'=> array(


        array(
            'id'       => 'layout_set',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Body Set Option', 'xamin' ),
            'subtitle' => esc_html__( 'Select this option for body color or image of the theme.', 'xamin' ),
            'options'  => array(
                '1' => 'Color',
                '2' => 'Default',
                '3' => 'Image'
            ),
            'default'  => '2'
        ),

        array(
            'id'       => 'xamin_layout_image',         
            'type'     => 'media',
            'url'      => false,
            'title'    => esc_html__( 'Set Body Image','xamin'),
            'read-only'=> false,
            'required'  => array( 'layout_set', '=', '3' ),
            'subtitle' => esc_html__( 'Upload Image for your body.','xamin'),
        ), 

        array(
            'id'            => 'xamin_layout_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Body Color', 'xamin' ),
            'subtitle'      => esc_html__( 'Choose Body Color', 'xamin' ),
            'required'  => array( 'layout_set', '=', '1' ),
            'default'       =>'#ffffff',
            'mode'          => 'background',
            'transparent'   => false
        ),

    )
));


Redux::setSection( $opt_name, array(
    'title' => esc_html__('Back to Top','xamin'),
    'id'    => 'header-general',
    'icon'  => 'el el-circle-arrow-up',
    'subsection' => true,
    'desc'  => esc_html__('This section contains options for header.','xamin'),
    'fields'=> array(

        array(
            'id'        => 'xamin_back_to_top',
            'type'      => 'button_set',
            'title'     => esc_html__( '"Back to top" Button','xamin'),
            'subtitle' => esc_html__( 'Turn on to show "Back to top" button.','xamin'),
            'options'   => array(
                            'yes' => esc_html__('Yes','xamin'),
                            'no' => esc_html__('No','xamin')
                        ),
            'default'   => esc_html__('yes','xamin')
        ),

    )
));

Redux::setSection( $opt_name, array(
    'title' => esc_html__('Favicon','xamin'),
    'id'    => 'header-fevicon',
    'icon'  => 'el el-ok',
    'subsection' => true,
    'desc'  => esc_html__('This section contains options for header.','xamin'),
    'fields'=> array(
        array(
            'id'       => 'xamin_fevicon',
            'type'     => 'media',
            'url'      => false,
            'title'    => esc_html__( 'Favicon','xamin'),
            'default'  => array( 'url' => get_template_directory_uri() .'/assets/images/favicon.ico' ),
            'subtitle' => esc_html__( 'Upload logo image for your Website. Otherwise site title will be displayed in place of logo.','xamin'),
        ),
    )
)); 

Redux::setSection( $opt_name, array(
    'title' => esc_html__('Map','xamin'),
    'id'    => 'page-map',
    'icon'  => 'el el-ok',
    'subsection' => true,
    'desc'  => esc_html__('This section contains options for header.','xamin'),
    'fields'=> array(
        
        array(
            'id'        => 'xamin_map',
            'type'      => 'text',
            'title'     => esc_html__( 'Map Shortcode','xamin'),
            'subtitle'  => wp_kses( __( '<br />Put you Map Shortcode for WP here','xamin' ), array( 'br' => array() ) ),
        ),

    )
)); 


?>