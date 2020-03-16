<?php
/*
 * Styles Options
 */
Redux::setSection( $opt_name, array(
    'title' => esc_html__( 'Typography','xamin' ),
    'id'    => 'default-style-section',
    'icon'  => 'el el-text-width',
    'desc'  => esc_html__('This section contains typography related options.','xamin'),
    'fields'=> array(

    	array(
                'id'        => 'xamin_change_font',
                'type'      => 'switch',
                'title'     => esc_html__( 'Do you want to change fonts?','xamin' ),
                'default'   => esc_html__( '0','xamin' ),
                'on'    	=> esc_html__( 'Yes','xamin' ),
                'off'   	=> esc_html__( 'No','xamin' )
        ),

    	array(
                'id'        => 'body_font',
                'type'      => 'typography',
                'title'     => esc_html__( 'Body Font','xamin' ),
                'subtitle'  => esc_html__( 'Select the font.','xamin' ),
                'desc'      => esc_html__( 'Poppins is default font.','xamin' ),
                'required'  => array( 'xamin_change_font', '=', '1' ),
                'google'    => true,
                'font-style'    => true,
                'font-backup'   => true,
                'font-weight'   => true,
                'font-size'     => true,
                'line-height'   => false,
                'color'         => false,
                'text-align'    => false,            
                'default'       => array(
                    'font-family' => esc_html__( 'Poppins','xamin' ),
                    'google'      => true
                )
        ),

        array(
            'id'        => 'h1_font',
            'type'      => 'typography',
            'title'     => esc_html__( 'H1 Font','xamin' ),
            'subtitle'  => esc_html__( 'Select the font.','xamin' ),
            'desc'      => esc_html__( 'PT+Sans is default font.','xamin' ),
            'required'  => array( 'xamin_change_font', '=', '1' ),
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
            'id'        => 'h2_font',
            'type'      => 'typography',
            'title'     => esc_html__( 'H2 Font','xamin' ),
            'subtitle'  => esc_html__( 'Select the font.','xamin' ),
            'desc'      => esc_html__( 'PT+Sans is default font.','xamin' ),
            'required'  => array( 'xamin_change_font', '=', '1' ),
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
            'id'        => 'h3_font',
            'type'      => 'typography',
            'title'     => esc_html__( 'H3 Font','xamin' ),
            'subtitle'  => esc_html__( 'Select the font.','xamin' ),
            'desc'      => esc_html__( 'PT+Sans is default font.','xamin' ),
            'required'  => array( 'xamin_change_font', '=', '1' ),
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
            'id'        => 'h4_font',
            'type'      => 'typography',
            'title'     => esc_html__( 'H4 Font','xamin' ),
            'subtitle'  => esc_html__( 'Select the font.','xamin' ),
            'desc'      => esc_html__( 'PT+Sans is default font.','xamin' ),
            'required'  => array( 'xamin_change_font', '=', '1' ),
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
            'id'        => 'h5_font',
            'type'      => 'typography',
            'title'     => esc_html__( 'H5 Font','xamin' ),
            'subtitle'  => esc_html__( 'Select the font.','xamin' ),
            'desc'      => esc_html__( 'PT+Sans is default font.','xamin' ),
            'required'  => array( 'xamin_change_font', '=', '1' ),
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
            'id'        => 'h6_font',
            'type'      => 'typography',
            'title'     => esc_html__( 'H6 Font','xamin' ),
            'subtitle'  => esc_html__( 'Select the font.','xamin' ),
            'desc'      => esc_html__( 'PT+Sans is default font.','xamin' ),
            'required'  => array( 'xamin_change_font', '=', '1' ),
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
    )
));
?>