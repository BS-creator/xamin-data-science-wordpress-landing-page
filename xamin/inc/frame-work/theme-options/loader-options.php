<?php
/*
 * Header Options
 */
$opt_name;
Redux::setSection( $opt_name, array(
    'title' => esc_html__('Loader','xamin'),
    'id'    => 'header-loader',
    'icon'  => 'el el-refresh',
    'desc'  => esc_html__('This section contains options for header.','xamin'),
    'fields'=> array(

        array(
            'id'        => 'xamin_display_loader',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Xamin Loader','xamin'),
            'subtitle' => wp_kses('Turn on to show the icon/images loading animation before view site', 'xamin'),
            'options'   => array(
                            'yes' => esc_html__('Yes','xamin'),
                            'no' => esc_html__('No','xamin')
                        ),
            'default'   => esc_html__('yes','xamin')
        ),

        array(
            'id'            => 'loader_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Loader Background Color', 'xamin' ),
            'required'  => array( 'xamin_display_loader', '=', 'yes' ),
            'subtitle'      => esc_html__( 'Choose Loader Background Color', 'xamin' ),
            'default'       => '#ffffff',
            'transparent'   => false
        ),
        
        array(
            'id'       => 'xamin_loader_gif',         
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__( 'Add GIF image for loader','xamin'),
            'read-only'=> false,
            'required'  => array( 'xamin_display_loader', '=', 'yes' ),
            'default'  => array( 'url' => get_template_directory_uri() .'/assets/images/loader.gif' ),
            'subtitle' => esc_html__( 'Upload Loader GIF image for your Website.','xamin'),
        ),

        array(
            'id'             => 'loader-dimensions',
            'type'           => 'dimensions',
            'units'          => array( 'em', 'px', '%' ),    
            'units_extended' => 'true',  
            'required'  => array( 'xamin_display_loader', '=', 'yes' ),
            'title'          => esc_html__( 'Loader (Width/Height) Option', 'xamin' ),
            'subtitle'       => esc_html__( 'Allow your users to choose width, height, and/or unit.', 'xamin' ),
            'desc'           => esc_html__( 'You can enable or disable any piece of this field. Width, Height, or Units.', 'xamin' ),
        ),
      
    )
));
?>