<?php
/*
 * Header Options
 */
$opt_name;
Redux::setSection( $opt_name, array(
    'title' => esc_html__('Banner Setting','xamin'),
    'id'    => 'breadcrumbs-fevicon',
    'icon'  => 'el el-cog',
    'desc'  => esc_html__('This section contains options for Breadcrumbs.','xamin'),
    'fields'=> array(

        array(
            'id'       => 'xamin_page_banner_image',         
            'type'     => 'media',
            'url'      => true,
            'title'    => esc_html__( 'Default Banner Image','xamin'),
            'read-only'=> false,
            'default'  => array( 'url' => get_template_directory_uri() .'/assets/images/banner/bg.png' ),
            'subtitle' => esc_html__( 'Upload default banner image for your Website. Otherwise blank field will be displayed in place of this section.','xamin'),
        ),

        array(
            'id'      => 'bg_image',
            'type'    => 'image_select',
            'title'   => esc_html__( 'Select Image', 'xamin' ),
            'subtitle' => esc_html__( 'A preview of the selected image will appear underneath the select box.', 'xamin' ),
            'options' => array(
                '1'      => array(
                    'alt' => 'Style1',
                    'img' => get_template_directory_uri() . '/assets/images/backend/bg-1.jpg',
                ),
                '2'      => array(
                    'alt' => 'Style2',
                    'img' => get_template_directory_uri() . '/assets/images/backend/bg-2.jpg',
                ),
                '3'      => array(
                    'alt' => 'Style3',
                    'img' => get_template_directory_uri() . '/assets/images/backend/bg-3.jpg',
                ),
                '4'      => array(
                    'alt' => 'Style4',
                    'img' => get_template_directory_uri() . '/assets/images/backend/bg-4.jpg',
                ),
                '5'      => array(
                    'alt' => 'Style5',
                    'img' => get_template_directory_uri() . '/assets/images/backend/bg-5.jpg',
                ),
            ),
            'default' => '2'
        ),

        array(
            'id'        => 'display_breadcrumbs',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Display Breadcrumbs on Banner','xamin'),
            'options'   => array(
                            'yes' => esc_html__('Yes','xamin'),
                            'no' => esc_html__('No','xamin')
                        ),
            'default'   => esc_html__('yes','xamin')
        ),

        array(
            'id'            => 'bg_title_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Title Color', 'xamin' ),
            'subtitle'      => esc_html__( 'Choose Title Color', 'xamin' ),
            'default'       =>'#313e5b',
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'       => 'bg_type',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Header Set Option', 'xamin' ),
            'subtitle' => esc_html__( 'Select this option for Background Type color or image and video.', 'xamin' ),
            'options'  => array(
                '1' => 'Color',
                '2' => 'Image',
                '3' => 'Video'
            ),
            'default'  => '1'
        ),

        array(
            'id'       => 'banner_image',         
            'type'     => 'media',
            'url'      => false,
            'title'    => esc_html__( 'Set Body Image','xamin'),
            'read-only'=> false,
            'required'  => array( 'bg_type', '=', '2' ),
            'subtitle' => esc_html__( 'Upload Image for your body.','xamin'),
            'default'  => array( 'url' => get_template_directory_uri() .'/assets/images/bg.jpg' ),
        ), 

        array(
            'id'            => 'bg_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Background Color', 'xamin' ),
            'subtitle'      => esc_html__( 'Choose Background Color', 'xamin' ),
            'required'  => array( 'bg_type', '=', '1' ),
            'default'       =>'#eff1fe',
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'       => 'bg_video_link',
            'type'     => 'text',
            'title'    => esc_html__( 'Your Video Path', 'xamin' ),
            'required'  => array( 'bg_type', '=', '3' ),
            'subtitle' => esc_html__( 'Upload video in media and paste video link over here.', 'xamin' ),
            'default'  => esc_html__('http://localhost/xamin/wordpress/wp-content/uploads/2019/08/SampleVideo.mp4','xamin' ),
        ),

        array(
            'id'       => 'bg_opacity',
            'type'     => 'button_set',
            'title'    => esc_html__( 'Background Opacity Color', 'xamin' ),
            'required' => array( 
                array('bg_type','!=','1') 
            ),
            'subtitle' => esc_html__( 'Select this option for Background Opacity Color.', 'xamin' ),
            'options'  => array(
                '1' => 'None',
                '2' => 'Dark',
                '3' => 'Custom'
            ),
            'default'  => '1'
        ),


        array(
            'id'            => 'opacity_color',
            'type'          => 'color_rgba',
            'title'         => esc_html__( 'Background Gradient Color', 'xamin' ),
            'required'  => array( 'bg_opacity', '=', '3' ),
            'subtitle'      => esc_html__( 'Choose body Gradient background color', 'xamin' ),
            'default'       => 'rgba(2, 13, 30, 0.9)',
            'transparent'   => false
        ),

    )
)); 
?>