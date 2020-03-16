<?php
global $xamin_options;
// TGM plugin activation
require_once get_template_directory() . '/inc/tgm/xamin-required-plugins.php';
// Visual Composer Added
require_once get_template_directory() . '/inc/visualcomposer/init.php';
// Breadcrumbs
require_once get_template_directory() . '/inc/custom/breadcrumbs.php';
// Demo import
require_once get_template_directory() . '/inc/demo/import.php';
// Header Breadcrumbs
require_once get_template_directory() . '/inc/custom/xamin-breadcrumbs.php';
// Comment
require_once get_template_directory() . '/inc/custom/xamin-comment.php';
// Pagination
require_once get_template_directory() . '/inc/custom/xamin-pagination.php';
// Widget
require_once get_template_directory() . '/inc/custom/xamin-widget.php';
//Maintenance
require_once get_template_directory() . '/inc/custom/xamin-maintenance.php';
// Dynamic Style
require_once get_template_directory() . '/inc/custom/xamin-dynamic-style.php';
// Color Style
require_once get_template_directory() . '/inc/custom/color-style.php';

function xamin_load_js_css(){
	$xamin_option = get_option('xamin_options');

	/* Custom JS */
	wp_enqueue_script('bootstrap', get_template_directory_uri() .'/assets/js/bootstrap.min.js', array(), '4.1.3' , true);

	wp_enqueue_script('countdown', get_template_directory_uri() .'/assets/js/countdown.js', array(),'1.0', true);

	wp_enqueue_script('appear', get_template_directory_uri() .'/assets/js/appear.js', array(),'1.0', true);

	wp_enqueue_script('jquery-count', get_template_directory_uri() .'/assets/js/jquery.countTo.js', array( 'jquery' ),'1.0', true);

	wp_enqueue_script('jquery-magnific', get_template_directory_uri().'/assets/js/magnific-popup/jquery.magnific-popup.min.js', array( 'jquery' ),'1.1.0', true);

	wp_enqueue_script('skrollr', get_template_directory_uri() .'/assets/js/skrollr.js', array(),'1.0', true);

	wp_enqueue_script('isotope', get_template_directory_uri() .'/assets/js/isotope.pkgd.min.js', array(),'1.0', true);

	wp_enqueue_script('owl-carousel', get_template_directory_uri() .'/assets/js/owl.carousel.min.js', array(),'2.3.4', true);

	wp_enqueue_script('popper', get_template_directory_uri() .'/assets/js/popper.min.js', array(), '1.0', true);

	wp_enqueue_script('swiper', get_template_directory_uri() .'/assets/js/swiper.min.js', array(), '1.0', true);

	wp_enqueue_script('slick', get_template_directory_uri() .'/assets/js/slick.min.js', array(), '1.0', true);

    wp_enqueue_script('wow', get_template_directory_uri() .'/assets/js/wow.min.js', array(), '1.3.0', true);

	wp_enqueue_script('sticky', get_template_directory_uri() .'/assets/js/sticky.js', array(),'1.0', true);
	
	wp_enqueue_script('xamin-custom', get_template_directory_uri() .'/assets/js/xamin-custom.js', array(),'2.1', true);


	/* Custom CSS */
	wp_enqueue_style('google-font-Karla', '//fonts.googleapis.com/css?family=Karla:400,700&display=swap', array(), '1.0', 'all');

	wp_enqueue_style('google-font-Lato', '//fonts.googleapis.com/css?family=Lato:400,700,900&display=swap', array(), '1.0', 'all');

	wp_enqueue_style('all', get_template_directory_uri() .'/assets/css/all.min.css',array(), '4.7.0', 'all');

	wp_enqueue_style('bootstrap', get_template_directory_uri() .'/assets/css/bootstrap.min.css',array(), '4.1.3', 'all');

	wp_enqueue_style('ionicons', get_template_directory_uri() .'/assets/css/ionicons.min.css',array(), '2.0.0', 'all');

	wp_enqueue_style('flaticon', get_template_directory_uri() .'/assets/css/flaticon.css',array(), '1.0.0', 'all');

	wp_enqueue_style('magnific-popup', get_template_directory_uri() .'/assets/css/magnific-popup.css', array(), '3.5.2', 'all');

	wp_enqueue_style('owl-carousel', get_template_directory_uri() .'/assets/css/owl.carousel.min.css',array(), '2.3.4', 'all');

	wp_enqueue_style('swiper', get_template_directory_uri() .'/assets/css/swiper.css',array(), '2.3.4', 'all');

	wp_enqueue_style('wow', get_template_directory_uri() .'/assets/css/wow.css',array(), '3.7.0', 'all');

	wp_enqueue_style('slick-theme', get_template_directory_uri() .'/assets/css/slick-theme.css',array(), '1.0', 'all');

	wp_enqueue_style('slick', get_template_directory_uri() .'/assets/css/slick.css',array(), '1.0', 'all');

	wp_enqueue_style('xamin-style', get_template_directory_uri() .'/assets/css/xamin-style.css',array(), '2.1', 'all');

	wp_enqueue_style('xamin-responsive', get_template_directory_uri() .'/assets/css/responsive.css',array(), '2.1', 'all');

	if ( class_exists( 'mega-menu-wrap' ) ) :	

		wp_enqueue_style('xamin-megamenu', get_template_directory_uri() .'/assets/css/megamenu.css',array(), '1.0', 'all');

	endif;

}
add_action( 'wp_enqueue_scripts', 'xamin_load_js_css' );


function xamin_wp_admin_style() {

	wp_enqueue_style('admin-style', get_template_directory_uri() .'/assets/css/xamin-admin-style.css',array(), '1.0', 'all');
	
}
add_action( 'admin_enqueue_scripts', 'xamin_wp_admin_style' );


function xamin_searchfilter($query) {
    if ($query->is_search) {
        $query->set('post_type', 'post');
    }
    return $query;
}
add_filter('pre_get_posts','xamin_searchfilter');


if ( !function_exists( 'xamin_dynamic_style' ) ) {

    function xamin_dynamic_style ( $xamin_css_array ){
        foreach ( $xamin_css_array as $css_part ) {
            if ( ! empty( $css_part[ 'value' ] ) ) {
                echo esc_attr($css_part[ 'elements' ]) . "{\n";
                echo esc_attr($css_part[ 'property' ]) . ":" . esc_attr($css_part[ 'value' ]) . ";\n";
                echo "}\n\n";
            }
        }
    }
}

function xamin_categories_postcount_filter ($variable) {
	$variable = str_replace('(', '<span class="post_count"> ', $variable);
	$variable = str_replace(')', ' </span>', $variable);
	return $variable;
}
add_filter('wp_list_categories','xamin_categories_postcount_filter');

function xamin_style_the_archive_count($links) {
    $links = str_replace('</a>&nbsp;(', '</a> <span class="archiveCount">', $links);
    $links = str_replace(')', '</span>', $links);
    return $links;
}
add_filter('get_archives_link', 'xamin_style_the_archive_count');

function xamin_inline_css() {
    $xamin_option = get_option('xamin_options');
    $custom_style = "";

    if(!empty($xamin_option['xamin_css_code'])){
     
        $xamin_css_code = $xamin_option['xamin_css_code'];
        $custom_style = esc_attr($xamin_css_code);
    }
    wp_add_inline_style( 'xamin-style', $custom_style );
}
add_action( 'wp_enqueue_scripts', 'xamin_inline_css' , 100);
?>