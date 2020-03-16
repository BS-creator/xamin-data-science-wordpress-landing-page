<?php
function xamin_import_files() { 
    return array(
        array(
            'import_file_name'             => esc_html__('Demo 1','xamin'),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-1/xamin-content.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-1/xamin-widget.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-1/xamin-export.dat',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo/demo-1/xamin_redux.json',
                    'option_name' => 'xamin_options',
                ),
            ),
            'import_preview_image_url'     => get_template_directory_uri().'/inc/demo/demo-1/preview_import_image1.jpg',
            'import_notice'                => esc_html__( 'DEMO IMPORT REQUIREMENTS: Memory Limit of 128 MB and max execution time (php time limit) of 300 seconds. ', 'xamin' ),
            'preview_url'                  => 'https://iqonicthemes.com/wp-themes/xamin/',
        ),
        array(
            'import_file_name'             => esc_html__('Demo 2','xamin'),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-2/xamin-content.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-2/xamin-widget.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-2/xamin-export.dat',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo/demo-2/xamin_redux.json',
                    'option_name' => 'xamin_options',
                ),
            ),
            'import_preview_image_url'     => get_template_directory_uri().'/inc/demo/demo-2/preview_import_image2.jpg',
            'import_notice'                => esc_html__( 'DEMO IMPORT REQUIREMENTS: Memory Limit of 128 MB and max execution time (php time limit) of 300 seconds. ', 'xamin' ),
            'preview_url'                  => 'https://iqonic.design/wp-themes/xamin/demo-2/',
        ),
        array(
            'import_file_name'             => esc_html__('Demo 3','xamin'),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-3/xamin-content.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-3/xamin-widget.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-3/xamin-export.dat',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo/demo-3/xamin_redux.json',
                    'option_name' => 'xamin_options',
                ),
            ),
            'import_preview_image_url'     => get_template_directory_uri().'/inc/demo/demo-3/preview_import_image2.jpg',
            'import_notice'                => esc_html__( 'DEMO IMPORT REQUIREMENTS: Memory Limit of 128 MB and max execution time (php time limit) of 300 seconds. ', 'xamin' ),
            'preview_url'                  => 'https://iqonic.design/wp-themes/xamin/demo-3/',
        ), 
        array(
            'import_file_name'             => esc_html__('Demo 4','xamin'),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-4/xamin-content.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-4/xamin-widget.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-4/xamin-export.dat',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo/demo-4/xamin_redux.json',
                    'option_name' => 'xamin_options',
                ),
            ),
            'import_preview_image_url'     => get_template_directory_uri().'/inc/demo/demo-4/preview_import_image2.jpg',
            'import_notice'                => esc_html__( 'DEMO IMPORT REQUIREMENTS: Memory Limit of 128 MB and max execution time (php time limit) of 300 seconds. ', 'xamin' ),
            'preview_url'                  => 'https://iqonic.design/wp-themes/xamin/demo-4/',
        ), 
        array(
            'import_file_name'             => esc_html__('Demo 5','xamin'),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-5/xamin-content.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-5/xamin-widget.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-5/xamin-export.dat',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo/demo-5/xamin_redux.json',
                    'option_name' => 'xamin_options',
                ),
            ),
            'import_preview_image_url'     => get_template_directory_uri().'/inc/demo/demo-5/preview_import_image2.jpg',
            'import_notice'                => esc_html__( 'DEMO IMPORT REQUIREMENTS: Memory Limit of 128 MB and max execution time (php time limit) of 300 seconds. ', 'xamin' ),
            'preview_url'                  => 'https://iqonic.design/wp-themes/xamin/demo-5/',
        ), 
        array(
            'import_file_name'             => esc_html__('Demo 6','xamin'),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-6/xamin-content.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-6/xamin-widget.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-6/xamin-export.dat',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo/demo-6/xamin_redux.json',
                    'option_name' => 'xamin_options',
                ),
            ),
            'import_preview_image_url'     => get_template_directory_uri().'/inc/demo/demo-6/preview_import_image2.jpg',
            'import_notice'                => esc_html__( 'DEMO IMPORT REQUIREMENTS: Memory Limit of 128 MB and max execution time (php time limit) of 300 seconds. ', 'xamin' ),
            'preview_url'                  => 'https://iqonic.design/wp-themes/xamin/demo-6/',
        ),  
        array(
            'import_file_name'             => esc_html__('Demo 7','xamin'),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-7/xamin-content.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-7/xamin-widget.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-7/xamin-export.dat',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo/demo-7/xamin_redux.json',
                    'option_name' => 'xamin_options',
                ),
            ),
            'import_preview_image_url'     => get_template_directory_uri().'/inc/demo/demo-7/preview_import_image2.jpg',
            'import_notice'                => esc_html__( 'DEMO IMPORT REQUIREMENTS: Memory Limit of 128 MB and max execution time (php time limit) of 300 seconds. ', 'xamin' ),
            'preview_url'                  => 'https://iqonic.design/wp-themes/xamin/demo-5/home-7',
        ),   
        array(
            'import_file_name'             => esc_html__('Demo 8','xamin'),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-8/xamin-content.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-8/xamin-widget.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-8/xamin-export.dat',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo/demo-8/xamin_redux.json',
                    'option_name' => 'xamin_options',
                ),
            ),
            'import_preview_image_url'     => get_template_directory_uri().'/inc/demo/demo-8/preview_import_image8.jpg',
            'import_notice'                => esc_html__( 'DEMO IMPORT REQUIREMENTS: Memory Limit of 128 MB and max execution time (php time limit) of 300 seconds. ', 'xamin' ),
            'preview_url'                  => 'https://iqonic.design/wp-themes/xamin/demo-5/home-8/',
        ), 
        array(
            'import_file_name'             => esc_html__('Demo 9','xamin'),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-9/xamin-content.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-9/xamin-widget.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-9/xamin-export.dat',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo/demo-9/xamin_redux.json',
                    'option_name' => 'xamin_options',
                ),
            ),
            'import_preview_image_url'     => get_template_directory_uri().'/inc/demo/demo-9/preview_import_image9.jpg',
            'import_notice'                => esc_html__( 'DEMO IMPORT REQUIREMENTS: Memory Limit of 128 MB and max execution time (php time limit) of 300 seconds. ', 'xamin' ),
            'preview_url'                  => 'https://iqonic.design/wp-themes/xamin/demo-5/home-9/',
        ),
        array(
            'import_file_name'             => esc_html__('Demo 10','xamin'),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-10/xamin-content.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-10/xamin-widget.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-10/xamin-export.dat',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo/demo-10/xamin_redux.json',
                    'option_name' => 'xamin_options',
                ),
            ),
            'import_preview_image_url'     => get_template_directory_uri().'/inc/demo/demo-10/preview_import_image10.jpg',
            'import_notice'                => esc_html__( 'DEMO IMPORT REQUIREMENTS: Memory Limit of 128 MB and max execution time (php time limit) of 300 seconds. ', 'xamin' ),
            'preview_url'                  => 'https://iqonic.design/wp-themes/xamin/demo-5/home10/',
        ),

        array(
            'import_file_name'             => esc_html__('Demo 11','xamin'),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-11/xamin-content.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-11/xamin-widget.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-11/xamin-export.dat',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo/demo-11/xamin_redux.json',
                    'option_name' => 'xamin_options',
                ),
            ),
            'import_preview_image_url'     => get_template_directory_uri().'/inc/demo/demo-11/preview_import_image11.jpg',
            'import_notice'                => esc_html__( 'DEMO IMPORT REQUIREMENTS: Memory Limit of 128 MB and max execution time (php time limit) of 300 seconds. ', 'xamin' ),
            'preview_url'                  => 'https://iqonic.design/wp-themes/xamin/demo-3/home-11/',
        ),
        
        array(
            'import_file_name'             => esc_html__('Demo 12','xamin'),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-12/xamin-content.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-12/xamin-widget.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-12/xamin-export.dat',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo/demo-12/xamin_redux.json',
                    'option_name' => 'xamin_options',
                ),
            ),
            'import_preview_image_url'     => get_template_directory_uri().'/inc/demo/demo-12/preview_import_image12.jpg',
            'import_notice'                => esc_html__( 'DEMO IMPORT REQUIREMENTS: Memory Limit of 128 MB and max execution time (php time limit) of 300 seconds. ', 'xamin' ),
            'preview_url'                  => 'https://iqonic.design/wp-themes/xamin/demo-5/home-12/',
        ),

        array(
            'import_file_name'             => esc_html__('Demo 13','xamin'),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-13/xamin-content.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-13/xamin-widget.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-13/xamin-export.dat',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo/demo-13/xamin_redux.json',
                    'option_name' => 'xamin_options',
                ),
            ),
            'import_preview_image_url'     => get_template_directory_uri().'/inc/demo/demo-13/preview_import_image13.jpg',
            'import_notice'                => esc_html__( 'DEMO IMPORT REQUIREMENTS: Memory Limit of 128 MB and max execution time (php time limit) of 300 seconds. ', 'xamin' ),
            'preview_url'                  => 'https://iqonic.design/wp-themes/xamin/demo-5/analytics-in-manufacturing/',
        ),

        array(
            'import_file_name'             => esc_html__('Demo 14','xamin'),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-14/xamin-content.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-14/xamin-widget.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-14/xamin-export.dat',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo/demo-14/xamin_redux.json',
                    'option_name' => 'xamin_options',
                ),
            ),
            'import_preview_image_url'     => get_template_directory_uri().'/inc/demo/demo-14/preview_import_image14.jpg',
            'import_notice'                => esc_html__( 'DEMO IMPORT REQUIREMENTS: Memory Limit of 128 MB and max execution time (php time limit) of 300 seconds. ', 'xamin' ),
            'preview_url'                  => 'https://iqonic.design/wp-themes/xamin/demo-5/analytics-in-security/',
        ),

        array(
            'import_file_name'             => esc_html__('Demo 15','xamin'),
            'local_import_file'            => trailingslashit( get_template_directory() ) . 'inc/demo/demo-15/xamin-content.xml',
            'local_import_widget_file'     => trailingslashit( get_template_directory() ) . 'inc/demo/demo-15/xamin-widget.wie',
            'local_import_customizer_file' => trailingslashit( get_template_directory() ) . 'inc/demo/demo-15/xamin-export.dat',
            'local_import_redux'           => array(
                array(
                    'file_path'   => trailingslashit( get_template_directory() ) . 'inc/demo/demo-15/xamin_redux.json',
                    'option_name' => 'xamin_options',
                ),
            ),
            'import_preview_image_url'     => get_template_directory_uri().'/inc/demo/demo-15/preview_import_image15.jpg',
            'import_notice'                => esc_html__( 'DEMO IMPORT REQUIREMENTS: Memory Limit of 128 MB and max execution time (php time limit) of 300 seconds. ', 'xamin' ),
            'preview_url'                  => 'https://iqonic.design/wp-themes/xamin/demo-6/data-center-analytics/',
        ),

    );
}
add_filter( 'pt-ocdi/import_files', 'xamin_import_files' );

function xamin_after_import_setup($selected_import) {
    

    // Assign menus to their locations.
    $locations = get_theme_mod( 'nav_menu_locations' ); // registered menu locations in theme
    $menus = wp_get_nav_menus(); // registered menus
    
    if($menus) {				
        foreach($menus as $menu) { // assign menus to theme locations
            
            if( $menu->name == 'Main Menu' ) {
                $locations['top'] = $menu->term_id;
            }	
            
            if( $menu->name == 'footer-menu' ) {
                $locations['social'] = $menu->term_id;
            }
        }
    }
    set_theme_mod( 'nav_menu_locations', $locations ); // set menus to locations 

            if ( 'Demo 1' === $selected_import['import_file_name'] ) {
    
                 $front_page_id = get_page_by_title( 'Home' );
                 $blog_page_id  = get_page_by_title( 'Blog' );

                
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $front_page_id->ID );
                update_option( 'page_for_posts', $blog_page_id->ID );

            }elseif ( 'Demo 2' === $selected_import['import_file_name'] ) {
        
                $front_page_id = get_page_by_title( 'Home 2' );
                $blog_page_id  = get_page_by_title( 'Blog' );
            
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $front_page_id->ID );
                update_option( 'page_for_posts', $blog_page_id->ID );

            }elseif ( 'Demo 3' === $selected_import['import_file_name'] ) {
        
                $front_page_id = get_page_by_title( 'Home 3' );
                $blog_page_id  = get_page_by_title( 'Blog' );
            
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $front_page_id->ID );
                update_option( 'page_for_posts', $blog_page_id->ID );

            }elseif ( 'Demo 4' === $selected_import['import_file_name'] ) {
        
                $front_page_id = get_page_by_title( 'Home 4' );
                $blog_page_id  = get_page_by_title( 'Blog' );
            
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $front_page_id->ID );
                update_option( 'page_for_posts', $blog_page_id->ID );

            }   
            elseif ( 'Demo 5' === $selected_import['import_file_name'] ) {
    
                $front_page_id = get_page_by_title( 'Home 5' );
                $blog_page_id  = get_page_by_title( 'Blog' );
            
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $front_page_id->ID );
                update_option( 'page_for_posts', $blog_page_id->ID );

            } 
            elseif ( 'Demo 6' === $selected_import['import_file_name'] ) {
        
                $front_page_id = get_page_by_title( 'Home 6' );
                $blog_page_id  = get_page_by_title( 'Blog' );
            
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $front_page_id->ID );
                update_option( 'page_for_posts', $blog_page_id->ID );

            } 
            elseif ( 'Demo 7' === $selected_import['import_file_name'] ) {
    
                $front_page_id = get_page_by_title( 'Home 7' );
                $blog_page_id  = get_page_by_title( 'Blog' );
            
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $front_page_id->ID );
                update_option( 'page_for_posts', $blog_page_id->ID );

            }
            elseif ( 'Demo 8' === $selected_import['import_file_name'] ) {

                $front_page_id = get_page_by_title( 'Home 8' );
                $blog_page_id  = get_page_by_title( 'Blog' );
            
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $front_page_id->ID );
                update_option( 'page_for_posts', $blog_page_id->ID );

            }
            elseif ( 'Demo 9' === $selected_import['import_file_name'] ) {

                $front_page_id = get_page_by_title( 'Home 9' );
                $blog_page_id  = get_page_by_title( 'Blog' );
            
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $front_page_id->ID );
                update_option( 'page_for_posts', $blog_page_id->ID );

            }      
            elseif ( 'Demo 10' === $selected_import['import_file_name'] ) {

                $front_page_id = get_page_by_title( 'Home 10' );
                $blog_page_id  = get_page_by_title( 'Blog' );
            
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $front_page_id->ID );
                update_option( 'page_for_posts', $blog_page_id->ID );

            }      
            elseif ( 'Demo 11' === $selected_import['import_file_name'] ) {

                $front_page_id = get_page_by_title( 'Home 11' );
                $blog_page_id  = get_page_by_title( 'Blog' );
            
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $front_page_id->ID );
                update_option( 'page_for_posts', $blog_page_id->ID );

            }
            elseif ( 'Demo 11' === $selected_import['import_file_name'] ) {

                $front_page_id = get_page_by_title( 'Home 12' );
                $blog_page_id  = get_page_by_title( 'Blog' );
            
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $front_page_id->ID );
                update_option( 'page_for_posts', $blog_page_id->ID );

            }
            elseif ( 'Demo 13' === $selected_import['import_file_name'] ) {

                $front_page_id = get_page_by_title( 'Analytics in Manufacturing' );
                $blog_page_id  = get_page_by_title( 'Blog' );
            
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $front_page_id->ID );
                update_option( 'page_for_posts', $blog_page_id->ID );

            }
            elseif ( 'Demo 14' === $selected_import['import_file_name'] ) {

                $front_page_id = get_page_by_title( 'Analytics in Security' );
                $blog_page_id  = get_page_by_title( 'Blog' );
            
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $front_page_id->ID );
                update_option( 'page_for_posts', $blog_page_id->ID );

            }
            elseif ( 'Demo 15' === $selected_import['import_file_name'] ) {

                $front_page_id = get_page_by_title( 'Data Center Analytics' );
                $blog_page_id  = get_page_by_title( 'Blog' );
            
                update_option( 'show_on_front', 'page' );
                update_option( 'page_on_front', $front_page_id->ID );
                update_option( 'page_for_posts', $blog_page_id->ID );

            }      

                
             //Import Revolution Slider
                if ( class_exists( 'RevSlider' ) ) {
                    $slider_array = array(
                        get_template_directory()."/inc/demo/demo-1/xamin.zip",
                        get_template_directory()."/inc/demo/demo-2/xamin-1.zip",
                        get_template_directory()."/inc/demo/demo-3/xamin-3.zip",
                        get_template_directory()."/inc/demo/demo-4/xamin41.zip",
                        get_template_directory()."/inc/demo/demo-5/xamin5.zip",
                        get_template_directory()."/inc/demo/demo-6/xamin6.zip",
                        get_template_directory()."/inc/demo/demo-7/xamin7.zip",
                        get_template_directory()."/inc/demo/demo-8/xamin-behaviour.zip",
                        get_template_directory()."/inc/demo/demo-9/xamin-data-science.zip",
                        get_template_directory()."/inc/demo/demo-10/xamin-visualization.zip",
                        get_template_directory()."/inc/demo/demo-11/xamin-marketing.zip",
                        get_template_directory()."/inc/demo/demo-12/xamin-banking-n-finance.zip",
                        get_template_directory()."/inc/demo/demo-13/xamin-manufacturing.zip",
                        get_template_directory()."/inc/demo/demo-14/xamin-security.zip",
                        get_template_directory()."/inc/demo/demo-15/Data-Center.zip",
                    );

                    $slider = new RevSlider();

                    foreach($slider_array as $filepath){
                    $slider->importSliderFromPost(true,true,$filepath);  
                    }
                }


    // remove default post
    wp_delete_post(1);

}
add_action( 'pt-ocdi/after_import', 'xamin_after_import_setup' );
?>