<?php
/*
 * Additional Code Options
 */
$opt_name;
Redux::setSection( $opt_name, array(
    'title' => __( 'Additional Code', 'xamin' ),
    'id'    => 'additional-Code',
    'icon'  => 'el el-css',
    'desc'  => esc_html__('This section contains options for header.','xamin'),
    'fields'=> array(

        array(
            'id'       => 'xamin_css_code',
            'type'     => 'ace_editor',
            'title'    => esc_html__('CSS Code','xamin'),
            'subtitle' => esc_html__('Paste your css code here.','xamin'),
            'mode'     => 'css',
            'desc'     => esc_html__('Paste your custom CSS code here.','xamin'),
            'default'  => ""
        ),

        array(
            'id'       => 'xamin_js_code',
            'type'     => 'ace_editor',
            'title'    => esc_html__('JS Code','xamin'),
            'subtitle' => esc_html__('Paste your js code in footer.','xamin'),
            'mode'     => 'javascript',
            'theme'   => 'chrome',
            'desc'     => esc_html__('Paste your custom JS code here.','xamin'),
            'default' => "jQuery(document).ready(function($){\n\n});"
        ),

    )
));
