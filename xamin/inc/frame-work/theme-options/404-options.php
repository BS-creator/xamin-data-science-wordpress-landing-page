<?php
/*
 * 404 Options
 */
$opt_name;
Redux::setSection( $opt_name, array(
    'title' => esc_html__('404','xamin'),
    'id'    => 'fourzerofour-section',
    'icon'  => 'el-icon-error',
    'desc'  => esc_html__('This section contains options for 404.','xamin'),
    'fields'=> array(

        array(
            'id'       => 'xamin_404_banner_image',         
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__( '404 Page Default Banner Image','xamin'),
            'read-only'=> false,
            'default'  => array( 'url' => get_template_directory_uri() .'/assets/images/backend/404.png' ),
            'subtitle' => esc_html__( 'Upload banner image for your Website. Otherwise blank field will be displayed in place of this section.','xamin'),
        ),

        array(
            'id'        => 'xamin_fourzerofour_title',
            'type'      => 'text',
            'title'     => esc_html__( '404 Page Title','xamin'),
            'default'   => esc_html__( 'Oops! This Page is Not Found.','xamin' )
        ),
        array(
            'id'        => 'xamin_four_description',
            'type'      => 'textarea',
            'title'     => esc_html__( '404 Page Description','xamin'),
            'default'   => esc_html__( 'The requested page does not exist.','xamin' )
        ),
    )) 
);
?>