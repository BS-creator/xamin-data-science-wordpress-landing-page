<?php 
$xamin_option = get_option('xamin_options');
	if(isset($xamin_option['mainte_mode']))
	{
		$options = $xamin_option['mainte_mode'];
		if($options == "yes")
		{  			
			global $pagenow;
			if ( $pagenow !== 'wp-login.php' && ! current_user_can( 'manage_options' ) && ! is_admin()  ) {

				function xamin_maintance_js_css(){

					/* Custom JS */
				

					wp_enqueue_script('maintance-countTo', get_template_directory_uri() .'/assets/js/maintance/js/jquery.countTo.js', array('jquery'),'1.0', true);

					wp_enqueue_script('maintance-countdown', get_template_directory_uri() .'/assets/js/maintance/js/jquery.countdown.min.js', array('jquery'),'1.0', true);

					wp_enqueue_script('maintance-custom', get_template_directory_uri() .'/assets/js/maintance/js/maintance-custom.js', array(),'1.0', true);
									
						
					/* Custom CSS */
					
					wp_enqueue_style('maintance-style', get_template_directory_uri() .'/assets/css/maintance/css/main-style.css',array(), '1.0', 'all');
					
					wp_enqueue_style('maintance-responsive', get_template_directory_uri() .'/assets/css/maintance/css/main-responsive.css',array(), '1.0', 'all');

					wp_enqueue_style('maintance-countdown', get_template_directory_uri() .'/assets/css/maintance/css/jquery.countdown.css',array(), '1.0', 'all');
					
				}
				add_action( 'wp_enqueue_scripts', 'xamin_maintance_js_css' );

				
				header( 'Content-Type: text/html; charset=utf-8' );
				
				require_once get_template_directory() . '/template-parts/maintenance/maintenance.php';

				die();
			}
		}
	}
?>