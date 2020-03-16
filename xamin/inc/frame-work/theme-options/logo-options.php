<?php
/*
 * Logo Options
 */
$opt_name;
Redux::setSection( $opt_name, array(
    'title' => esc_html__('Header Logo','xamin'),
    'id'    => 'header-logo',
    'icon'  => 'el el-flag',
    'desc'  => esc_html__('This section contains options for header.','xamin'),
    'fields'=> array(

        array(
            'id'       => 'header_radio',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Body Set Option', 'xamin' ),
            'subtitle' => esc_html__( 'Select this option for body color or image of the theme.', 'xamin' ),
            'options'  => array(
                '1' => ' Logo as Text',
                '2' => ' Logo as Image',
            ),
            'default'  => '2'
        ),

        array(
            'id'       => 'xamin_logo',         
            'type'     => 'media',
            'url'      => false,
            'title'    => esc_html__( 'Logo','xamin'),
            'required'  => array( 'header_radio', '=', '2' ),
            'read-only'=> false,
            'default'  => array( 'url' => get_template_directory_uri() .'/assets/images/logo.png' ),
            'subtitle' => esc_html__( 'Upload Logo image for your Website. Otherwise site title will be displayed in place of Logo.','xamin'),
        ), 

        array(
            'id'             => 'logo-dimensions',
            'type'           => 'dimensions',
            'units'          => array( 'em', 'px', '%' ),    // You can specify a unit value. Possible: px, em, %
            'units_extended' => 'true',  // Allow users to select any type of unit
            'title'          => esc_html__( 'Logo (Width/Height) Option', 'xamin' ),
            'required'  => array( 'header_radio', '=', '2' ),
            'subtitle'       => esc_html__( 'Allow your users to choose width, height, and/or unit.', 'xamin' ),
            'desc'           => esc_html__( 'You can enable or disable any piece of this field. Width, Height, or Units.', 'xamin' ),
           
        ),

        array(
            'id'       => 'header_text',
            'type'     => 'text',
            'title'    => esc_html__( 'Logo Text', 'xamin' ),
            'desc'     => esc_html__( 'Enter the text to be used instead of the logo image', 'xamin' ),
            'required'  => array( 'header_radio', '=', '1' ),
            'msg'      => esc_html__('custom error message','xamin' ),
            'default'  => esc_html__('xamin','xamin' ),
        ),

        array(
            'id'        => 'header_font',
            'type'      => 'typography',
            'title'     => esc_html__( 'Logo Font','xamin' ),
            'subtitle'  => esc_html__( 'Select the font.','xamin' ),
            'desc'      => esc_html__( 'PT+Sans is default font.','xamin' ),
            'required'  => array( 'header_radio', '=', '1' ),
            'google'    => true,
            'font-style'    => true,
            'font-weight'   => true,
            'font-size'     => true,
            'line-height'   => false,
            'color'         => false,
            'text-align'    => false,            
            'default'       => array(
                'font-family' => esc_html__( 'PT+Sans','xamin' ),
                'google'      => true
            )
        ),

        array(
            'id'            => 'header_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Text Color', 'xamin' ),
            'subtitle'      => esc_html__( 'Choose Text Color', 'xamin' ),
            'required'      => array( 'header_radio', '=', '1' ),
            'default'       =>'#ffffff',
            'mode'          => 'background',
            'transparent'   => false
        ),
        
    )
));   
?>