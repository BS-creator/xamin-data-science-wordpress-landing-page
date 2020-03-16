<?php
if ( !function_exists( 'xamin_create_dynamic_style' ) ) {
    
    function xamin_create_dynamic_style() {

        $xamin_dynamic_css = array();
        $xamin_dynamic_css_min_width_1200px = array();

        $xamin_option = get_option('xamin_options');

        $loader_width = '';
        $loader_height = ''; 

        if(!empty($xamin_option["logo-dimensions"]["width"])) { $logo_width = $xamin_option["logo-dimensions"]["width"]; }
        if(!empty($xamin_option["logo-dimensions"]["height"])) { $logo_height = $xamin_option["logo-dimensions"]["height"]; }
        if(!empty($xamin_option["loader-dimensions"]["width"])) {  $loader_width = $xamin_option["loader-dimensions"]["width"]; }
        if(!empty($xamin_option["loader-dimensions"]["height"])) { $loader_height = $xamin_option["loader-dimensions"]["height"]; }

        if(isset($xamin_option["body_font"]["font-family"])) { $body_family = $xamin_option["body_font"]["font-family"]; }
        if(isset($xamin_option["body_font"]["font-backup"])) { $body_backup = $xamin_option["body_font"]["font-backup"]; }
        if(isset($xamin_option["body_font"]["font-size"])){ $body_size = $xamin_option["body_font"]["font-size"]; }
        if(isset($xamin_option["body_font"]["font-weight"])){ $body_weight = $xamin_option["body_font"]["font-weight"]; }

        if(isset($xamin_option["h1_font"]["font-family"])) { $h1_family = $xamin_option["h1_font"]["font-family"]; }
        if(isset($xamin_option["h1_font"]["font-size"])) { $h1_size = $xamin_option["h1_font"]["font-size"]; }
        if(isset($xamin_option["h1_font"]["font-weight"])) { $h1_weight = $xamin_option["h1_font"]["font-weight"]; }

        if(isset($xamin_option["h2_font"]["font-family"])) { $h2_family = $xamin_option["h2_font"]["font-family"]; }
        if(isset($xamin_option["h2_font"]["font-size"])) { $h2_size = $xamin_option["h2_font"]["font-size"]; }
        if(isset($xamin_option["h2_font"]["font-weight"])) { $h2_weight = $xamin_option["h2_font"]["font-weight"]; }

        if(isset($xamin_option["h3_font"]["font-family"])) { $h3_family = $xamin_option["h3_font"]["font-family"]; }
        if(isset($xamin_option["h3_font"]["font-size"])) { $h3_size = $xamin_option["h3_font"]["font-size"]; }
        if(isset($xamin_option["h3_font"]["font-weight"])) { $h3_weight = $xamin_option["h3_font"]["font-weight"]; }

        if(isset($xamin_option["h4_font"]["font-family"])) { $h4_family = $xamin_option["h4_font"]["font-family"]; }
        if(isset($xamin_option["h4_font"]["font-size"])) { $h4_size = $xamin_option["h4_font"]["font-size"]; }
        if(isset($xamin_option["h4_font"]["font-weight"])) { $h4_weight = $xamin_option["h4_font"]["font-weight"]; }

        if(isset($xamin_option["h5_font"]["font-family"])) { $h5_family = $xamin_option["h5_font"]["font-family"]; }
        if(isset($xamin_option["h5_font"]["font-size"])) { $h5_size = $xamin_option["h5_font"]["font-size"]; }
        if(isset($xamin_option["h5_font"]["font-weight"])) { $h5_weight = $xamin_option["h5_font"]["font-weight"]; }

        if(isset($xamin_option["h6_font"]["font-family"])) { $h6_family = $xamin_option["h6_font"]["font-family"]; }
        if(isset($xamin_option["h6_font"]["font-size"])) { $h6_size = $xamin_option["h6_font"]["font-size"]; }
        if(isset($xamin_option["h6_font"]["font-weight"])) { $h6_weight = $xamin_option["h6_font"]["font-weight"]; }

        
        if(!empty($logo_width)){
            $xamin_dynamic_css[] = array(
                        'elements'  =>  'header a.navbar-brand img',
                        'property'  =>  'width',
                        'value'     =>  $logo_width. '!important'
                    );
            }
        
    
    
        if(!empty($logo_height)){
            $xamin_dynamic_css[] = array(
                        'elements'  =>  'header a.navbar-brand img',
                        'property'  =>  'height',
                        'value'     =>  $logo_height. '!important'
                    );
            }
        
    
    
        if(!empty($loader_width)){
                $xamin_dynamic_css[] = array( 
                    'elements'  =>  '#loading img',
                    'property'  =>  'width',
                    'value'     =>  $loader_width. '!important'
                );
            }
        
    
        if(!empty($loader_height)){
                $xamin_dynamic_css[] = array(
                    'elements'  =>  '#loading img',
                    'property'  =>  'height',
                    'value'     =>  $loader_height. '!important'
                );
            } 
        
        if( $xamin_option['header_radio'] == 1 ){
            if(!empty($header_font_family)){   
            $xamin_dynamic_css[] = array(
                'elements'  =>  'h1',
                'property'  =>  'font-family',
                'value'     =>  $header_font_family. '!important'
            );
            }

            if(!empty($header_font_size)){  
            $xamin_dynamic_css[] = array(
                'elements'  =>  'h1',
                'property'  =>  'font-size',
                'value'     =>  $header_font_size. '!important'
            );
            }

            if(!empty($header_font_weight)){  
            $xamin_dynamic_css[] = array(
                'elements'  =>  'h1',
                'property'  =>  'font-weight',
                'value'     =>  $header_font_weight. '!important'
            );
            }
        }

    	
        // Change font 1
        if( $xamin_option['xamin_change_font'] == 1 ){

            // body
            $xamin_dynamic_css[] = array(
                'elements'  =>  'body',
                'property'  =>  'font-family',
                'value'     =>  $body_family.  $body_backup. '!important'
            );
           
            $xamin_dynamic_css[] = array(
                'elements'  =>  'body',
                'property'  =>  'font-size',
                'value'     =>  $body_size. '!important'
            );
            $xamin_dynamic_css[] = array(
                'elements'  =>  'body',
                'property'  =>  'font-weight',
                'value'     =>  $body_weight. '!important'
            );
            
            // h2 menu
            $xamin_dynamic_css[] = array(
                'elements'  =>  'h1',
                'property'  =>  'font-family',
                'value'     =>  $h1_family. '!important'
            );
            $xamin_dynamic_css[] = array(
                'elements'  =>  'h1',
                'property'  =>  'font-size',
                'value'     =>  $h1_size. '!important'
            );
            $xamin_dynamic_css[] = array(
                'elements'  =>  'h1',
                'property'  =>  'font-weight',
                'value'     =>  $h1_weight. '!important'
            );

            // h2 menu
            $xamin_dynamic_css[] = array(
                'elements'  =>  'h2',
                'property'  =>  'font-family',
                'value'     =>  $h2_family. '!important'
            );
            $xamin_dynamic_css[] = array(
                'elements'  =>  'h2',
                'property'  =>  'font-size',
                'value'     =>  $h2_size. '!important'
            );
            $xamin_dynamic_css[] = array(
                'elements'  =>  'h2',
                'property'  =>  'font-weight',
                'value'     =>  $h2_weight. '!important'
            );

            // h3 menu
            $xamin_dynamic_css[] = array(
                'elements'  =>  'h3',
                'property'  =>  'font-family',
                'value'     =>  $h3_family. '!important'
            );
            $xamin_dynamic_css[] = array(
                'elements'  =>  'h3',
                'property'  =>  'font-size',
                'value'     =>  $h3_size. '!important'
            );
            $xamin_dynamic_css[] = array(
                'elements'  =>  'h3',
                'property'  =>  'font-weight',
                'value'     =>  $h3_weight. '!important'
            );

            // h4 menu
            $xamin_dynamic_css[] = array(
                'elements'  =>  'h4',
                'property'  =>  'font-family',
                'value'     =>  $h4_family. '!important'
            );
            $xamin_dynamic_css[] = array(
                'elements'  =>  'h4',
                'property'  =>  'font-size',
                'value'     =>  $h4_size. '!important'
            );
            $xamin_dynamic_css[] = array(
                'elements'  =>  'h4',
                'property'  =>  'font-weight',
                'value'     =>  $h4_weight. '!important'
            );

            // h5 menu
            $xamin_dynamic_css[] = array(
                'elements'  =>  'h5',
                'property'  =>  'font-family',
                'value'     =>  $h5_family. '!important'
            );
            $xamin_dynamic_css[] = array(
                'elements'  =>  'h5',
                'property'  =>  'font-size',
                'value'     =>  $h5_size. '!important'
            );
            $xamin_dynamic_css[] = array(
                'elements'  =>  'h5',
                'property'  =>  'font-weight',
                'value'     =>  $h5_weight. '!important'
            );

            // h6 menu
            $xamin_dynamic_css[] = array(
                'elements'  =>  'h6',
                'property'  =>  'font-family',
                'value'     =>  $h6_family. '!important'
            );
            $xamin_dynamic_css[] = array(
                'elements'  =>  'h6',
                'property'  =>  'font-size',
                'value'     =>  $h6_size. '!important'
            );
            $xamin_dynamic_css[] = array(
                'elements'  =>  'h6',
                'property'  =>  'font-weight',
                'value'     =>  $h6_weight. '!important'
            );
            
        }
       // }

        // Start generating if related arrays are populated
        if ( count( $xamin_dynamic_css ) > 0 ) {
            echo "<style type='text/css' id='xamin-dynamic-css'>\n\n";
            
            // Basic dynamic CSS
            if ( count( $xamin_dynamic_css ) > 0 ) {
                xamin_dynamic_style( $xamin_dynamic_css );
            }            
            echo '</style>';
        }
    }
}
add_action( 'wp_head', 'xamin_create_dynamic_style' );
if ( !function_exists( 'xamin_create_dynamic_style' ) ) {
    
    function xamin_create_dynamic_style() {

        $xamin_dynamic_css = array();
        $xamin_dynamic_css_min_width_1200px = array();

        $xamin_option = get_option('xamin_options');

        $loader_width = '';
        $loader_height = '';
       
        if(!empty($xamin_option["logo-dimensions"]["width"])) { $logo_width = $xamin_option["logo-dimensions"]["width"]; }
        if(!empty($xamin_option["logo-dimensions"]["height"])) { $logo_height = $xamin_option["logo-dimensions"]["height"]; }

        if(!empty($xamin_option["loader-dimensions"]["width"])) { $loader_width = $xamin_option["loader-dimensions"]["width"]; }
        if(!empty($xamin_option["loader-dimensions"]["height"])) { $loader_height = $xamin_option["loader-dimensions"]["height"]; }

                
        $xamin_dynamic_css[] = array(
            'elements'  =>  '.navbar-brand img',
            'property'  =>  'width',
            'value'     =>  $logo_width. '!important'
        );
        $xamin_dynamic_css[] = array(
            'elements'  =>  '.navbar-brand img',
            'property'  =>  'height',
            'value'     =>  $logo_height. '!important'
        );
	
              

        // Start generating if related arrays are populated
        if ( count( $xamin_dynamic_css ) > 0 ) {
            echo "<style type='text/css' id='xamin-dynamic-css'>\n\n";
            
            // Basic dynamic CSS
            if ( count( $xamin_dynamic_css ) > 0 ) {
                xamin_dynamic_style( $xamin_dynamic_css );
            }            
            echo '</style>';
        }
    }
}
add_action( 'wp_head', 'xamin_create_dynamic_style' );
?>