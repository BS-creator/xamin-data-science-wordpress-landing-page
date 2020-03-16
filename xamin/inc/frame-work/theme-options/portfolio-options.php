<?php
/*
 * blog Options
 */
$opt_name;
Redux::setSection( $opt_name, array(
    'title' => esc_html__( 'Portfolio', 'xamin' ),
    'id'    => 'portfolio-editor',
    'icon'  => 'el el-th',
    'customizer_width' => '500px',
    'fields'           => array(

        array(
            'id'        => 'portfolio_variation',
            'type'      => 'image_select',
            'title'     => esc_html__( 'Page Variation Type','xamin' ),
            'subtitle'  => wp_kses( __( '<br>Choose among these structures (left sidebar, right sidebar and full width) for your pages.<br>To filling these column sections you should go to appearance > widget.<br>And put every widget that you want in these sections.','xamin' ), array( 'br' => array() ) ),            
            'options'   => array(
                                '1' => array( 'title' => esc_html__( 'Singal Blog Layout 1','xamin' ), 'img' => get_template_directory_uri() . '/assets/images/backend/right-side.jpg' ),
                                '2' => array( 'title' => esc_html__( 'Singal Blog Layout 2','xamin' ), 'img' => get_template_directory_uri() . '/assets/images/backend/left-side.jpg' ),
                                '3' => array( 'title' => esc_html__( 'Singal Blog Layout 3','xamin' ), 'img' => get_template_directory_uri() . '/assets/images/backend/single-column.jpg' ),
                            ),
            'default'   => '3',
        ),

        array(
            'id'        => 'portfolio_top',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Display Portfolio Detail Top','xamin'),
            'subtitle' => esc_html__( 'Display Portfolio Detail Top on Singal Portfolio Page', 'xamin' ),
            'options'   => array(
                            'yes' => esc_html__('Yes','xamin'),
                            'no' => esc_html__('No','xamin')
                        ),
            'default'   => esc_html__('yes','xamin')
        ),

        array(
            'id'       => 'portfolio_sub_title',
            'type'     => 'text',
            'title'    => esc_html__( 'Portfolio Detail Page Title', 'xamin' ),
            'subtitle' => esc_html__( 'Change Title On Portfolio Detail page', 'xamin' ),
            'default'  => esc_html__('We work with you to address your most critical business priorities.','xamin'),
        ),

        array(
            'id'       => 'portfolio_title_desc',
            'type'     => 'editor',
            'title'    => esc_html__( 'Portfolio Detail Page Description', 'xamin' ),
            'subtitle' => esc_html__( 'Change Title On Portfolio Detail page', 'xamin' ),
            'default'  => esc_html__('There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable.','xamin'),
        ),

        array(
            'id'        => 'xamin_recent_portfolio',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Display Recent Portfolio','xamin'),
            'subtitle' => esc_html__( 'Display Recent Portfolio on Sinagal page', 'xamin' ),
            'options'   => array(
                            'yes' => esc_html__('Yes','xamin'),
                            'no' => esc_html__('No','xamin')
                        ),
            'default'   => esc_html__('yes','xamin')
        ),

        array(
            'id'       => 'portfolio_title',
            'type'     => 'text',
            'title'    => esc_html__( 'Portfolio Title', 'xamin' ),
            'subtitle' => esc_html__( 'Change Title On Portfolio singal page', 'xamin' ),
            'required'  => array( 'xamin_recent_portfolio', '=', 'yes' ), 
            'default'  => esc_html__('Recent Portfolio','xamin' ),
        ),

        array(
            'id'       => 'portfolio_title_contant',
            'type'     => 'textarea',
            'title'    => esc_html__( 'Portfolio Title content', 'xamin' ),
            'subtitle' => esc_html__( 'Change Portfolio Title Contant On Portfolio singal page', 'xamin' ),
            'required'  => array( 'xamin_recent_portfolio', '=', 'yes' ),
            'default'  => esc_html__('It is a long established fact that a reader will be distracted',
            'xamin' ),
        ),

    )
) );
?>