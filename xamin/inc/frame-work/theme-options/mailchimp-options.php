<?php
/*
 * Header Options
 */
$opt_name;
Redux::setSection( $opt_name, array(
    'title'      => esc_html__( 'MailChimp Subscribe', 'xamin' ),
    'id'         => 'xamin-subscribe',
    'icon'       => 'el el-envelope',
    'fields'     => array(

        array(
            'id'        => 'xamin_subscribe',
            'type'      => 'text',
            'title'     => esc_html__( 'Subscribe Shortcode','xamin'),
            'subtitle'  => wp_kses( __( '<br />Put you Mailchimp for WP Shortcode here','xamin' ), array( 'br' => array() ) ),
        ),

    )) 
);
?>