<?php
/*
 * blog Options
 */
$opt_name;
Redux::setSection( $opt_name, array(
    'title' => esc_html__('Page Settings','xamin'),
    'id'    => 'page-section',
    'icon'  => 'el el-cog',
    'fields'=> array(
        

        array(
            'id'        => 'xamin_page_variation',
            'type'      => 'image_select',
            'title'     => esc_html__( 'Page Setting','xamin' ),
            'subtitle'  => wp_kses( __( '<br />Choose among these structures (Right Sidebar, Left Sidebar and 1column) for your Page.<br />To filling these column sections you should go to appearance > widget.<br />And put every widget that you want in these sections.','xamin' ), array( 'br' => array() ) ),            
            'options'   => array(
                                '1' => array( 'title' => esc_html__( 'Right Sidebar','xamin' ), 'img' => get_template_directory_uri() . '/assets/images/backend/right-side.jpg' ),
                                '2' => array( 'title' => esc_html__( 'Left Sidebar','xamin' ), 'img' => get_template_directory_uri() . '/assets/images/backend/left-side.jpg' ), 
                                '3' => array( 'title' => esc_html__( 'Full Width','xamin' ), 'img' => get_template_directory_uri() . '/assets/images/backend/single-column.jpg' ),                                
                            ),
            'default'   => '3',
        ),

        array(
            'id'        => 'xamin_search_variation',
            'type'      => 'image_select',
            'title'     => esc_html__( 'Search page Setting','xamin' ),
            'subtitle'  => wp_kses( __( '<br />Choose among these structures (Right Sidebar, Left Sidebar and 1column) for your Search page.<br />To filling these column sections you should go to appearance > widget.<br />And put every widget that you want in these sections.','xamin' ), array( 'br' => array() ) ),            
            'options'   => array(
                                '1' => array( 'title' => esc_html__( 'Right Sidebar','xamin' ), 'img' => get_template_directory_uri() . '/assets/images/backend/right-side.jpg' ),
                                '2' => array( 'title' => esc_html__( 'Left Sidebar','xamin' ), 'img' => get_template_directory_uri() . '/assets/images/backend/left-side.jpg' ), 
                                '3' => array( 'title' => esc_html__( 'Full Width','xamin' ), 'img' => get_template_directory_uri() . '/assets/images/backend/single-column.jpg' ),                                
                            ),
            'default'   => '1',
        ),
        
    )
));
?>