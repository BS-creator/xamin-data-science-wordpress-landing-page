<?php
/*
 * Social Network Options
 */
$opt_name;
Redux::setSection( $opt_name, array(
    'title'            => esc_html__( 'Social Media', 'xamin' ),
    'id'               => 'social_link',
    'icon'             => 'el-icon-share',  
    'fields'           => array(
                
        array(
            'id'       => 'social-media-iq',
            'type'     => 'sortable',
            'title'    => esc_html__('Social Media Option', 'xamin'),
            'subtitle' => esc_html__('Enter social media url.', 'xamin'),
            'mode'     => 'text',
			'label'    => true,
            'options'  => array(
				'facebook-f'     => '',
				'twitter'        => '',
				'google-plus-g'  => '',
                'github'      	 => '',
				'instagram'      => '',
                'linkedin'       => '',
                'tumblr'         => '',
                'pinterest'      => '',
                'dribbble'       => '',
                'reddit'         => '',
                'flickr'         => '',
                'skype'          => '',
                'youtube-play'   => '',
                'vimeo'          => '',
                'soundcloud'     => '',
                'wechat'         => '',
                'renren'         => '',
                'weibo'          => '',
                'xing'           => '',
                'qq'             => '',
                'rss'            => '',
                'vk'             => '',
                'behance'        => '',
                'snapchat'       => '',
            ),
        ),
        
    ),
) );