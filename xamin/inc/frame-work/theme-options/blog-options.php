<?php
/*
 * blog Options
 */
$opt_name;
Redux::setSection( $opt_name, array(
    'title' => esc_html__( 'Blog', 'xamin' ),
    'id'    => 'editor',
    'icon'  => 'el el-quotes',
    'customizer_width' => '500px',
) );

Redux::setSection( $opt_name, array(
    'title' => esc_html__('General Blogs','xamin'),
    'id'    => 'blog-section',
    'subsection' => true,
    'desc'  => esc_html__('This section contains options for blog.','xamin'),
    'fields'=> array(

        array(
            'id'       => 'xamin_blog_banner_image',         
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__( 'Blog Page Default Banner Image','xamin'),
            'read-only'=> false,
            'default'  => array( 'url' => get_template_directory_uri() .'/assets/images/banner/bg.png' ),
            'subtitle' => esc_html__( 'Upload banner image for your Website. Otherwise blank field will be displayed in place of this section.','xamin'),
        ),

        array(
            'id'        => 'xamin_blog',
            'type'      => 'image_select',
            'title'     => esc_html__( 'Blog page Setting','xamin' ),
            'subtitle'  => wp_kses( __( '<br />Choose among these structures (Right Sidebar, Left Sidebar, 1column, 2column and 3column) for your blog section.<br />To filling these column sections you should go to appearance > widget.<br />And put every widget that you want in these sections.','xamin' ), array( 'br' => array() ) ),            
            'options'   => array(
                                '1' => array( 'title' => esc_html__( 'Right Sidebar','xamin' ), 'img' => get_template_directory_uri() . '/assets/images/backend/right-side.jpg' ), 
                                '2' => array( 'title' => esc_html__( 'Left Sidebar','xamin' ), 'img' => get_template_directory_uri() . '/assets/images/backend/left-side.jpg' ),
                                '3' => array( 'title' => esc_html__( 'One Columns','xamin' ), 'img' => get_template_directory_uri() . '/assets/images/backend/single-column.jpg' ), 
                                '4' => array( 'title' => esc_html__( 'Two Columns','xamin' ), 'img' => get_template_directory_uri() . '/assets/images/backend/two-column.jpg' ), 
                                '5' => array( 'title' => esc_html__( 'Three Columns','xamin' ), 'img' => get_template_directory_uri() . '/assets/images/backend/three-column.jpg' ),                                
                            ),
            'default'   => '1',
        ),

        array(
            'id'        => 'xamin_display_pagination',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Previous/Next Pagination','xamin'),
            'subtitle' => esc_html__( 'Turn on to display the previous/next post pagination for blog page.','xamin'),
            'options'   => array(
                            'yes' => esc_html__('On','xamin'),
                            'no' => esc_html__('Off','xamin')
                        ),
            'default'   => esc_html__('yes','xamin')
        ),

        array(
            'id'        => 'xamin_display_image',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Featured Image on Blog Archive Page','xamin'),
            'subtitle' => esc_html__( 'Turn on to display featured images on the blog or archive pages.','xamin'),
            'options'   => array(
                            'yes' => esc_html__('On','xamin'),
                            'no' => esc_html__('Off','xamin')
                        ),
            'default'   => esc_html__('yes','xamin')
        ),
    )
    ));

Redux::setSection( $opt_name, array(
    'title'      => esc_html__( 'Blog Singal Post', 'xamin' ),
    'id'         => 'basic',
    'subsection' => true,
    'fields'     => array(

            array(
                'id'        => 'xamin_blog_type',
                'type'      => 'image_select',
                'title'     => esc_html__( 'Blog Singal page Setting','xamin' ),
                'subtitle'  => wp_kses( __( '<br />Choose among these structures (Right Sidebar, Left Sidebar and 1column) for your blog section.<br />To filling these column sections you should go to appearance > widget.<br />And put every widget that you want in these sections.','xamin' ), array( 'br' => array() ) ),            
                'options'   => array(
                                    '1' => array( 'title' => esc_html__( 'Right Sidebar','xamin' ), 'img' => get_template_directory_uri() . '/assets/images/backend/right-side.jpg' ),
                                    '2' => array( 'title' => esc_html__( 'Left Sidebar','xamin' ), 'img' => get_template_directory_uri() . '/assets/images/backend/left-side.jpg' ), 
                                    '3' => array( 'title' => esc_html__( 'Full Width','xamin' ), 'img' => get_template_directory_uri() . '/assets/images/backend/single-column.jpg' ),                                
                                ),
                'default'   => '1',
            ),

            array(
                'id'        => 'xamin_display_comment',
                'type'      => 'button_set',
                'title'     => esc_html__( 'Comments','xamin'),
                'subtitle' => esc_html__( 'Turn on to display comments.','xamin'),
                'options'   => array(
                                'yes' => esc_html__('On','xamin'),
                                'no' => esc_html__('Off','xamin')
                            ),
                'default'   => esc_html__('yes','xamin')
            ),

        )) 
    );

   
?>