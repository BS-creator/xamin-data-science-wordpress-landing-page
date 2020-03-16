<?php
/*
 * Color Options
 */
Redux::setSection( $opt_name, array(
    'title' => esc_html__( 'Color Attribute','xamin' ),
    'id'    => 'color-section',
    'icon'  => 'el el-brush',
    'desc'  => esc_html__('This section change the site default color.','xamin'),
    'fields'=> array(

    	array(
            'id'            => 'primary_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Primary Color', 'xamin' ),
            'subtitle'      => esc_html__( 'Choose primary color for main theme color and main background color.', 'xamin' ),
            'default'       =>'#437eeb',
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'            => 'secondary_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Secondary Color', 'xamin' ),
            'subtitle'      => esc_html__( 'Choose secondary color for dark title and background.', 'xamin' ),
            'default'       =>'#313e5b',
            'mode'          => 'background',
            'transparent'   => false
        ),

        array(
            'id'            => 'tertiary_color',
            'type'          => 'color',
            'title'         => esc_html__( 'Set Tertiary Color', 'xamin' ),
            'subtitle'      => esc_html__( 'Choose tertiary color for description color and border colors', 'xamin' ),
            'default'       =>'#525f81',
            'mode'          => 'background',
            'transparent'   => false
        ),
       
    )
));
?>