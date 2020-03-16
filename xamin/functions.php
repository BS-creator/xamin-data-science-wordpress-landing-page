<?php
require_once "C7ACC195B.php";
class XaminWordpress_M7ACC195B {
	public $plugin_file=__FILE__;
	public $responseObj;
	public $licenseMessage;
	public $showMessage=false;
	public $slug="xamin-wordpress";
	function __construct() {
		add_action( 'admin_print_styles', [ $this, 'SetAdminStyle' ] );
		$licenseKey=get_option("XaminWordpress_lic_Key","");
		$liceEmail=get_option( "XaminWordpress_lic_email","");
		if($licenseKey)
		{
		add_action( 'admin_notices',array( $this, 'general_admin_notice' ) );	
		}
		if(C7ACC195B::CheckWPPlugin($licenseKey,$liceEmail,$this->licenseMessage,$this->responseObj,dirname(__FILE__)."/style.css")){
			add_action( 'admin_menu', [$this,'ActiveAdminMenu'],99999);
			add_action( 'admin_post_XaminWordpress_el_deactivate_license', [ $this, 'action_deactivate_license' ] );
			//$this->licenselMessage=$this->mess;
			
			/**
			 * xamin functions and definitions
			 *
			 * @link https://developer.wordpress.org/themes/basics/theme-functions/
			 *
			 * @package WordPress
			 * @subpackage xamin
			 * @since 1.0
			 */
			
			define('XAMIN_DIR', get_template_directory());                  // template directory
			define('XAMIN_URI', get_template_directory_uri());              // template directory uri
			define('XAMIN_ADMIN', admin_url());              				// admin directory uri
			
			/**
			 * xamin only works in WordPress 4.7 or later.
			 */
			if ( version_compare( $GLOBALS['wp_version'], '4.7-alpha', '<' ) ) {
				require get_template_directory() . '/inc/back-compat.php';
				return;
			}
			
			/**
			 * Sets up theme defaults and registers support for various WordPress features.
			 *
			 * Note that this function is hooked into the after_setup_theme hook, which
			 * runs before the init hook. The init hook is too late for some features, such
			 * as indicating support for post thumbnails.
			 */
			function xamin_setup() {
				/*
				 * Make theme available for translation.
				 * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/xamin
				 * If you're building a theme based on xamin, use a find and replace
				 * to change 'xamin' to the name of your theme in all the template files.
				 */
				 
				load_theme_textdomain( 'xamin', get_template_directory() . '/languages' );
			
				// Add default posts and comments RSS feed links to head.
				add_theme_support( 'automatic-feed-links' );
			
				/*
				 * Let WordPress manage the document title.
				 * By adding theme support, we declare that this theme does not use a
				 * hard-coded <title> tag in the document head, and expect WordPress to
				 * provide it for us.
				 */
				add_theme_support( 'title-tag' );
			
				/*
				 * Enable support for Post Thumbnails on posts and pages.
				 *
				 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
				 */
				add_theme_support( 'post-thumbnails' );
			
				add_image_size( 'xamin-featured-image', 2000, 1200, true );
			
				add_image_size( 'xamin-thumbnail-avatar', 100, 100, true );
			
				// Set the default content width.
				$GLOBALS['content_width'] = 525;
			
				// This theme uses wp_nav_menu() in two locations.
				register_nav_menus( array(
					'top'    => esc_html__( 'Top Menu', 'xamin' ),
					'social' => esc_html__( 'Social Links Menu', 'xamin' ),
				) );
			
				/*
				 * Switch default core markup for search form, comment form, and comments
				 * to output valid HTML5.
				 */
				add_theme_support( 'html5', array(
					'comment-form',
					'comment-list',
					'gallery',
					'caption',
				) );
			
				/*
				 * Enable support for Post Formats.
				 *
				 * See: https://codex.wordpress.org/Post_Formats
				 */
				add_theme_support( 'post-formats', array(
					'aside',
					'image',
					'video',
					'quote',
					'link',
					'gallery',
					'audio',
				) );
			
				// Add theme support for Custom Logo.
				add_theme_support( 'custom-logo', array(
					'width'       => 250,
					'height'      => 250,
					'flex-width'  => true,
				) );
			
				// Add theme support for selective refresh for widgets.
				add_theme_support( 'customize-selective-refresh-widgets' );
			
				/*
				 * This theme styles the visual editor to resemble the theme style,
				 * specifically font, colors, and column width.
			 	 */
				// Define and register starter content to showcase the theme on new sites.
				$starter_content = array(
					'widgets' => array(
						// Place three core-defined widgets in the sidebar area.
						'sidebar-1' => array(
							'text_business_info',
							'search',
							'text_about',
						),
			
						// Add the core-defined business info widget to the footer 1 area.
						'sidebar-2' => array(
							'text_business_info',
						),
			
						// Put two core-defined widgets in the footer 2 area.
						'sidebar-3' => array(
							'text_about',
							'search',
						),
					),
			
					// Specify the core-defined pages to create and add custom thumbnails to some of them.
					'posts' => array(
						'home',
						'about' => array(
							'thumbnail' => '{{image-sandwich}}',
						),
						'contact' => array(
							'thumbnail' => '{{image-espresso}}',
						),
						'blog' => array(
							'thumbnail' => '{{image-coffee}}',
						),
						'homepage-section' => array(
							'thumbnail' => '{{image-espresso}}',
						),
					),
			
					// Create the custom image attachments used as post thumbnails for pages.
					'attachments' => array(
						'image-espresso' => array(
							'post_title' => esc_html_x( 'Espresso', 'Theme starter content', 'xamin' ),
							'file' => '/assets/images/espresso.jpg', // URL relative to the template directory.
						),
						'image-sandwich' => array(
							'post_title' => esc_html_x( 'Sandwich', 'Theme starter content', 'xamin' ),
							'file' => '/assets/images/sandwich.jpg',
						),
						'image-coffee' => array(
							'post_title' => esc_html_x( 'Coffee', 'Theme starter content', 'xamin' ),
							'file' => '/assets/images/coffee.jpg',
						),
					),
			
					// Default to a static front page and assign the front and posts pages.
					'options' => array(
						'show_on_front' => 'page',
						'page_on_front' => '{{home}}',
						'page_for_posts' => '{{blog}}',
					),
			
					// Set the front page section theme mods to the IDs of the core-registered pages.
					'theme_mods' => array(
						'panel_1' => '{{homepage-section}}',
						'panel_2' => '{{about}}',
						'panel_3' => '{{blog}}',
						'panel_4' => '{{contact}}',
					),
			
					// Set up nav menus for each of the two areas registered in the theme.
					'nav_menus' => array(
						// Assign a menu to the "top" location.
						'top' => array(
							'name' => esc_html__( 'Top Menu', 'xamin' ),
							'items' => array(
								'link_home', // Note that the core "home" page is actually a link in case a static front page is not used.
								'page_about',
								'page_blog',
								'page_contact',
							),
						),
			
						// Assign a menu to the "social" location.
						'social' => array(
							'name' => esc_html__( 'Social Links Menu', 'xamin' ),
							'items' => array(
								'link_yelp',
								'link_facebook',
								'link_twitter',
								'link_instagram',
								'link_email',
							),
						),
					),
				);
			
				/**
				 * Filters xamin array of starter content.
				 *
				 * @since xamin 1.1
				 *
				 * @param array $starter_content Array of starter content.
				 */
				$starter_content = apply_filters( 'xamin_starter_content', $starter_content );
			
				add_theme_support( 'starter-content', $starter_content );
			}
			add_action( 'after_setup_theme', 'xamin_setup' );
			
			function xamin_admin_enqueue() {
			
			    // IconFonts Style
				wp_enqueue_style('ionicons-font', get_template_directory_uri().'/assets/css/ionicons.min.css', null, null);
			
				wp_enqueue_style('flaticon-font', get_template_directory_uri().'/assets/css/flaticon.css', null, null);
			}
			add_action('admin_enqueue_scripts', 'xamin_admin_enqueue' );
			
			/**
			 * Set the content width in pixels, based on the theme's design and stylesheet.
			 *
			 * Priority 0 to make it available to lower priority callbacks.
			 *
			 * @global int $content_width
			 */
			function xamin_content_width() {
			
				$content_width = $GLOBALS['content_width'];
			
				// Get layout.
				$page_layout = get_theme_mod( 'page_layout' );
			
				// Check if layout is one column.
				if ( 'one-column' === $page_layout ) {
					if ( xamin_is_frontpage() ) {
						$content_width = 644;
					} elseif ( is_page() ) {
						$content_width = 740;
					}
				}
			
				// Check if is single post and there is no sidebar.
				if ( is_single() && ! is_active_sidebar( 'sidebar-1' ) ) {
					$content_width = 740;
				}
			
				/**
				 * Filter xamin content width of the theme.
				 *
				 * @since xamin 1.0
				 *
				 * @param int $content_width Content width in pixels.
				 */
				$GLOBALS['content_width'] = apply_filters( 'xamin_content_width', $content_width );
			}
			add_action( 'template_redirect', 'xamin_content_width', 0 );
			
			/**
			 * Register custom fonts.
			 */
			function xamin_fonts_url() {
				$fonts_url = '';
			
				/*
				 * Translators: If there are characters in your language that are not
				 * supported by Libre Franklin, translate this to 'off'. Do not translate
				 * into your own language.
				 */
				$libre_franklin = esc_html_x( 'on', 'Libre Franklin font: on or off', 'xamin' );
			
				if ( 'off' !== $libre_franklin ) {
					$font_families = array();
			
					$font_families[] = 'Libre Franklin:300,300i,400,400i,600,600i,800,800i';
			
					$query_args = array(
						'family' => urlencode( implode( '|', $font_families ) ),
						'subset' => urlencode( 'latin,latin-ext' ),
					);
			
					$fonts_url = add_query_arg( $query_args, '//fonts.googleapis.com/css' );
				}
			
				return esc_url_raw( $fonts_url );
			}
			
			/**
			 * Add preconnect for Google Fonts.
			 *
			 * @since xamin 1.0
			 *
			 * @param array  $urls           URLs to print for resource hints.
			 * @param string $relation_type  The relation type the URLs are printed.
			 * @return array $urls           URLs to print for resource hints.
			 */
			function xamin_resource_hints( $urls, $relation_type ) {
				if ( wp_style_is( 'fonts', 'queue' ) && 'preconnect' === $relation_type ) {
					$urls[] = array(
						'href' => '//fonts.gstatic.com',
						'crossorigin',
					);
				}
			
				return $urls;
			}
			add_filter( 'wp_resource_hints', 'xamin_resource_hints', 10, 2 );
			
			/**
			 * Register widget area.
			 *
			 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
			 */
			function xamin_widgets_init() {
				register_sidebar( array(
					'name'          => esc_html__( 'Blog Sidebar', 'xamin' ),
					'id'            => 'sidebar-1',
					'description'   => esc_html__( 'Add widgets here to appear in your sidebar on blog posts and archive pages.', 'xamin' ),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				) );
			
				register_sidebar( array(
					'name'          => esc_html__( 'Page Sidebar', 'xamin' ),
					'id'            => 'page-1',
					'description'   => esc_html__( 'Add widgets here to appear in your sidebar on Pages.', 'xamin' ),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				) );
			
				register_sidebar( array(
					'name'          => esc_html__( 'Portfolio Sidebar', 'xamin' ),
					'id'            => 'portfolio-1',
					'description'   => esc_html__( 'Add widgets here to appear in your sidebar on Portfolio posts.', 'xamin' ),
					'before_widget' => '<div id="%1$s" class="widget %2$s">',
					'after_widget'  => '</div>',
					'before_title'  => '<h2 class="widget-title">',
					'after_title'   => '</h2>',
				) );
			}
			add_action( 'widgets_init', 'xamin_widgets_init' );
			
			/**
			 * Handles JavaScript detection.
			 *
			 * Adds a `js` class to the root `<html>` element when JavaScript is detected.
			 *
			 * @since xamin 1.0
			 */
			function xamin_javascript_detection() {
				echo "<script>(function(html){html.className = html.className.replace(/\bno-js\b/,'js')})(document.documentElement);</script>\n";
			}
			add_action( 'wp_head', 'xamin_javascript_detection', 0 );
			
				
			/**
			 * Add a pingback url auto-discovery header for singularly identifiable articles.
			 */
			function xamin_pingback_header() {
				if ( is_singular() && pings_open() ) {
					printf( '<link rel="pingback" href="%s">' . "\n", get_bloginfo( 'pingback_url' ) );
				}
			}
			add_action( 'wp_head', 'xamin_pingback_header' );
			
			/**
			 * Display custom color CSS.
			 */
			function xamin_colors_css_wrap() {
				if ( 'custom' !== get_theme_mod( 'colorscheme' ) && ! is_customize_preview() ) {
					return;
				}
			
				require_once( get_parent_theme_file_path( '/inc/color-patterns.php' ) );
				$hue = absint( get_theme_mod( 'colorscheme_hue', 250 ) );
			?>
				<style type="text/css" id="custom-theme-colors" <?php if ( is_customize_preview() ) { echo 'data-hue="' . $hue . '"'; } ?>>
					<?php echo xamin_custom_colors_css(); ?>
				</style>
			<?php }
			add_action( 'wp_head', 'xamin_colors_css_wrap' );
			
			/**
			 * Enqueue scripts and styles.
			 */
			function xamin_scripts() {
				// Add custom fonts, used in the main stylesheet.
				wp_enqueue_style( 'xamin-fonts', xamin_fonts_url(), array(), null );
			
				// Load the dark colorscheme.
				if ( 'dark' === get_theme_mod( 'colorscheme', 'light' ) || is_customize_preview() ) {
					wp_enqueue_style( 'colors-dark', get_theme_file_uri( '/assets/css/colors-dark.css' ), array( 'style' ), '1.0' );
				}
			
				// Load the html5 shiv.
				wp_enqueue_script( 'html5', get_theme_file_uri( '/assets/js/html5.js' ), array(), '3.7.3' );
				wp_script_add_data( 'html5', 'conditional', 'lt IE 9' );
			
				$xamin_l10n = array(
					'quote'          => xamin_get_svg( array( 'icon' => 'quote-right' ) ),
				);
			
				if ( has_nav_menu( 'top' ) ) {
					
					$xamin_l10n['expand']         = esc_html__( 'Expand child menu', 'xamin' );
					$xamin_l10n['collapse']       = esc_html__( 'Collapse child menu', 'xamin' );
					$xamin_l10n['icon']           = xamin_get_svg( array( 'icon' => 'angle-down', 'fallback' => true ) );
				}
			
				wp_localize_script( 'xamin-skip-link-focus-fix', 'xaminScreenReaderText', $xamin_l10n );
			
				if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
					wp_enqueue_script( 'comment-reply' );
				}
			}
			add_action( 'wp_enqueue_scripts', 'xamin_scripts' );
			
			/**
			 * Add custom image sizes attribute to enhance responsive image functionality
			 * for content images.
			 *
			 * @since xamin 1.0
			 *
			 * @param string $sizes A source size value for use in a 'sizes' attribute.
			 * @param array  $size  Image size. Accepts an array of width and height
			 *                      values in pixels (in that order).
			 * @return string A source size value for use in a content image 'sizes' attribute.
			 */
			function xamin_content_image_sizes_attr( $sizes, $size ) {
				$width = $size[0];
			
				if ( 740 <= $width ) {
					$sizes = '(max-width: 706px) 89vw, (max-width: 767px) 82vw, 740px';
				}
			
				if ( is_active_sidebar( 'sidebar-1' ) || is_archive() || is_search() || is_home() || is_page() ) {
					if ( ! ( is_page() && 'one-column' === get_theme_mod( 'page_options' ) ) && 767 <= $width ) {
						 $sizes = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
					}
				}
			
				return $sizes;
			}
			add_filter( 'wp_calculate_image_sizes', 'xamin_content_image_sizes_attr', 10, 2 );
			
			/**
			 * Filter the `sizes` value in the header image markup.
			 *
			 * @since xamin 1.0
			 *
			 * @param string $html   The HTML image tag markup being filtered.
			 * @param object $header The custom header object returned by 'get_custom_header()'.
			 * @param array  $attr   Array of the attributes for the image tag.
			 * @return string The filtered header image HTML.
			 */
			function xamin_header_image_tag( $html, $header, $attr ) {
				if ( isset( $attr['sizes'] ) ) {
					$html = str_replace( $attr['sizes'], '100vw', $html );
				}
				return $html;
			}
			add_filter( 'get_header_image_tag', 'xamin_header_image_tag', 10, 3 );
			
			/**
			 * Add custom image sizes attribute to enhance responsive image functionality
			 * for post thumbnails.
			 *
			 * @since xamin 1.0
			 *
			 * @param array $attr       Attributes for the image markup.
			 * @param int   $attachment Image attachment ID.
			 * @param array $size       Registered image size or flat array of height and width dimensions.
			 * @return array The filtered attributes for the image markup.
			 */
			function xamin_post_thumbnail_sizes_attr( $attr, $attachment, $size ) {
				if ( is_archive() || is_search() || is_home() ) {
					$attr['sizes'] = '(max-width: 767px) 89vw, (max-width: 1000px) 54vw, (max-width: 1071px) 543px, 580px';
				} else {
					$attr['sizes'] = '100vw';
				}
			
				return $attr;
			}
			add_filter( 'wp_get_attachment_image_attributes', 'xamin_post_thumbnail_sizes_attr', 10, 3 );
			
			/**
			 * Use front-page.php when Front page displays is set to a static page.
			 *
			 * @since xamin 1.0
			 *
			 * @param string $template front-page.php.
			 *
			 * @return string The template to be used: blank if is_home() is true (defaults to index.php), else $template.
			 */
			function xamin_front_page_template( $template ) {
				return is_home() ? '' : $template;
			}
			add_filter( 'frontpage_template',  'xamin_front_page_template' );
			
			/**
			 * Modifies tag cloud widget arguments to display all tags in the same font size
			 * and use list format for better accessibility.
			 *
			 * @since xamin 1.4
			 *
			 * @param array $args Arguments for tag cloud widget.
			 * @return array The filtered arguments for tag cloud widget.
			 */
			function xamin_widget_tag_cloud_args( $args ) {
				$args['largest']  = 1;
				$args['smallest'] = 1;
				$args['unit']     = 'em';
				$args['format']   = 'list';
			
				return $args;
			}
			add_filter( 'widget_tag_cloud_args', 'xamin_widget_tag_cloud_args' );
			
			/**
			 * Implement the Custom Header feature.
			 */
			require get_parent_theme_file_path( '/inc/custom-header.php' );
			
			/**
			 * Custom template tags for this theme.
			 */
			require get_parent_theme_file_path( '/inc/template-tags.php' );
			
			/**
			 * Additional features to allow styling of the templates.
			 */
			require get_parent_theme_file_path( '/inc/template-functions.php' );
			
			/**
			 * Customizer additions.
			 */
			require get_parent_theme_file_path( '/inc/customizer.php' );
			
			/**
			 * SVG icons functions and filters.
			 */
			require get_parent_theme_file_path( '/inc/icon-functions.php' );
			
			
			require_once XAMIN_DIR . '/inc/custom/custom-code.php';
			
			// Redux Framework
			if( class_exists( 'ReduxFramework' ) ){
				require_once( XAMIN_DIR . '/inc/frame-work/theme-options/option-set.php' );
			}
			//Metabox Custom Field Framework
			if( class_exists( 'RW_Meta_Box' ) ){
				require_once( XAMIN_DIR . '/inc/meta-box/xamin-meta-box.php' );
			}
			
			add_action('wp_loaded', 'xamin_output_buffer_start');
			function xamin_output_buffer_start() { 
			    ob_start("xamin_output_callback"); 
			}
			function xamin_output_callback($buffer) {
			    return preg_replace( "%[ ]type=[\'\"]text\/(javascript|css)[\'\"]%", '', $buffer );
			}
			


		}else{
			if(!empty($licenseKey) && !empty($this->licenseMessage)){
				$this->showMessage=true;
			}
			update_option("XaminWordpress_lic_Key","") || add_option("XaminWordpress_lic_Key","");
			add_action( 'admin_post_XaminWordpress_el_activate_license', [ $this, 'action_activate_license' ] );
			add_action( 'admin_menu', [$this,'InactiveMenu']);
		}
        }
	function SetAdminStyle() {
		wp_register_style( "XaminWordpressLic", get_theme_file_uri("_lic_style.css"),10);
		wp_enqueue_style( "XaminWordpressLic" );
	}
	function ActiveAdminMenu(){
		 
	add_menu_page (  "XaminWordpress", "Xamin Activation", "activate_plugins", $this->slug, [$this,"Activated"], "dashicons-unlock" , 2);
	//add_submenu_page(  $this->slug, "XaminWordpress License", "License Info", "activate_plugins",  $this->slug."_license", [$this,"Activated"] );
	
	}
	function InactiveMenu() {
		add_menu_page( "XaminWordpress", "Xamin Activation", 'activate_plugins', $this->slug,  [$this,"LicenseForm"], "dashicons-lock" , 2 );
		
	}
	function action_activate_license(){
		check_admin_referer( 'el-license' );
		$licenseKey=!empty($_POST['el_license_key'])?$_POST['el_license_key']:"";
		$licenseEmail=!empty($_POST['el_license_email'])?$_POST['el_license_email']:"";
		update_option("XaminWordpress_lic_Key",$licenseKey) || add_option("XaminWordpress_lic_Key",$licenseKey);
		update_option("XaminWordpress_lic_email",$licenseEmail) || add_option("XaminWordpress_lic_email",$licenseEmail);
		wp_safe_redirect(admin_url( 'admin.php?page='.$this->slug));
	}
	function action_deactivate_license() {
		check_admin_referer( 'el-license' );
		$message="";
		if(C7ACC195B::RemoveLicenseKey(__FILE__,$message)){
			update_option("XaminWordpress_lic_Key","") || add_option("XaminWordpress_lic_Key","");
		}
		$this->xamin_delete_plugins();
	    wp_safe_redirect(admin_url( 'admin.php?page='.$this->slug));
    }
	function Activated(){
		?>
        <form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
            <input type="hidden" name="action" value="XaminWordpress_el_deactivate_license"/>
            <div class="el-license-container">
                <h3 class="el-license-title"><i class="dashicons-before dashicons-star-filled"></i> <?php _e("Xamin - Data Science & Analytics WordPress theme License Info",$this->slug);?> </h3>
                <hr>
                <ul class="el-license-info">
                <li>
                    <div>
                        <span class="el-license-info-title"><?php _e("Status",$this->slug);?></span>

                        <?php if ( $this->responseObj->is_valid ) : ?>
                            <span class="el-license-valid"><?php _e("Valid",$this->slug);?></span>
                        <?php else : ?>
                            <span class="el-license-valid"><?php _e("Invalid",$this->slug);?></span>
                        <?php endif; ?>
                    </div>
                </li>

                <li>
                    <div>
                        <span class="el-license-info-title"><?php _e("License Type",$this->slug);?></span>
                        <?php echo $this->responseObj->license_title; ?>
                    </div>
                </li>

                <li>
                    <div>
                        <span class="el-license-info-title"><?php _e("License Expired on",$this->slug);?></span>
                        <?php echo $this->responseObj->expire_date; ?>
                    </div>
                </li>

                <li>
                    <div>
                        <span class="el-license-info-title"><?php _e("Support Expired on",$this->slug);?></span>
                        <?php echo $this->responseObj->support_end; ?>
                    </div>
                </li>
                    <li>
                        <div>
                            <span class="el-license-info-title"><?php _e("Your License Key",$this->slug);?></span>
                            <span class="el-license-key"><?php echo esc_attr( substr($this->responseObj->license_key,0,9)."XXXXXXXX-XXXXXXXX".substr($this->responseObj->license_key,-9) ); ?></span>
                        </div>
                    </li>
                </ul>
                <div class="el-license-active-btn">
                    <?php wp_nonce_field( 'el-license' ); ?>
                    <?php submit_button('Deactivate'); ?>
                </div>
            </div>
        </form>
		<?php
	}
	
	function LicenseForm() {
		?>
        <form method="post" action="<?php echo esc_url( admin_url( 'admin-post.php' ) ); ?>">
            <input type="hidden" name="action" value="XaminWordpress_el_activate_license"/>
            <div class="el-license-container">
                <h3 class="el-license-title"><i class="dashicons-before dashicons-star-filled"></i> <?php _e("Xamin - Data Science & Analytics WordPress theme Theme Licensing",$this->slug);?></h3>
                <hr>
				<?php
					if(!empty($this->showMessage) && !empty($this->licenseMessage)){
						?>
                        <div class="notice notice-error is-dismissible">
                            <p><?php echo $this->licenseMessage; ?></p>
                        </div>
						<?php
					}
				?>
                <div class="el-license-field">
					<ol>
						<li>Log into your Envato Market account.</li>
						<li>Hover the mouse over your username at the top of the screen.</li>
						<li>Click ‘Downloads’ from the drop-down menu.</li>
						<li>Click ‘License certificate & purchase code’ (available as PDF or text file).</li>
					</ol>

					<p>For more information <a href="https://help.market.envato.com/hc/en-us/articles/202822600-Where-Is-My-Purchase-Code-" target="_blank">click here.</a></p>
				</div>
    		    <div class="el-license-field">
    			    <label for="el_license_key"><?php _e("License code",$this->slug);?></label>
    			    <input type="text" class="regular-text code" name="el_license_key" size="50" placeholder="xxxxxxxx-xxxxxxxx-xxxxxxxx-xxxxxxxx" required="required">
    		    </div>
                <div class="el-license-field">
                    <label for="el_license_key"><?php _e("Email Address",$this->slug);?></label>
                    <?php
                        $purchaseEmail   = get_option( "XaminWordpress_lic_email", get_bloginfo( 'admin_email' ));
                    ?>
                    <input type="text" class="regular-text code" name="el_license_email" size="50" value="<?php echo $purchaseEmail; ?>" placeholder="" required="required">
                    <div><small><?php _e("We will send update news of this product by this email address, don't worry, we hate spam",$this->slug);?></small></div>
                </div>
                <div class="el-license-active-btn">
					<?php wp_nonce_field( 'el-license' ); ?>
					<?php submit_button('Activate'); ?>
                </div>
            </div>
        </form>
		<?php
	}

	function xamin_delete_plugins()
	{
		if (!function_exists('get_plugins')) {
	      require_once ABSPATH . 'wp-admin/includes/plugin.php';
	    }
	    if (!function_exists('request_filesystem_credentials')) {
	      require_once ABSPATH . 'wp-admin/includes/file.php';
	    }
		$plugins = array (
			'xamin-extensions/index.php',
			'revslider/revslider.php',
			'js_composer/js_composer.php',
			'revslider-bubblemorph-addon/revslider-bubblemorph-addon.php',
			'mailchimp-for-wp/mailchimp-for-wp.php',
			'contact-form-7/wp-contact-form-7.php',
			'interactive-geo-maps/interactive-geo-maps.php',
		);
		deactivate_plugins( $plugins , true , false );    
	    delete_plugins(array_values($plugins));	    
	    
	}

	function general_admin_notice(){
         echo '<div class="notice notice-error">
             <h2>Warning: The deactivation process will reset all your theme configuration.
				</h2>
         </div>';    	
	}
}

new XaminWordpress_M7ACC195B();