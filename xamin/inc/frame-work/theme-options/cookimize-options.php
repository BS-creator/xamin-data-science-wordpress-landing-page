<?php
/*
 * Header Options
 */
$opt_name;
Redux::setSection( $opt_name, array(
    'title'      => esc_html__( 'Cookie', 'xamin' ),
    'id'         => 'xamin-cookimize',
    'icon'       => 'el el-check',
    'fields'     => array(

        array(
            'id'        => 'cookie',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Cookie','xamin'),
            'subtitle' => esc_html__( 'Turn on for cookie.','xamin'),
            'options'   => array(
                            'yes' => esc_html__('Yes','xamin'),
                            'no' => esc_html__('No','xamin')
                        ),
            'default'   => esc_html__('no','xamin')
        ),

    )) 
);
?>