<?php
/*
 * Header Options
 */
$opt_name;
Redux::setSection( $opt_name, array(
    'title'      => esc_html__( 'Performance', 'xamin' ),
    'id'         => 'xamin-lazyload',
    'icon'       => 'el el-graph',
    'fields'     => array(

        array(
            'id'        => 'lazy_load',
            'type'      => 'button_set',
            'title'     => esc_html__( 'Lazy Load','xamin'),
            'subtitle' => esc_html__( 'Turn on to improve page load times.','xamin'),
            'options'   => array(
                            'yes' => esc_html__('Yes','xamin'),
                            'no' => esc_html__('No','xamin')
                        ),
            'default'   => esc_html__('no','xamin')
        ),

    )) 
);
?>