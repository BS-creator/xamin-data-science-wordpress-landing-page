<?php
function xamin_primary_color() { 
    //Set Primary Color
    $xamin_option = get_option('xamin_options');
    $primary_color = $xamin_option['primary_color'];
    $body_primary_color = "";
    if( !empty($primary_color) && $primary_color != '#437eeb') {

        $body_primary_color .="
        .blue-btn.button,.button:hover,.iq-progress-bar span,header .navbar ul li .sub-menu li.current-menu-item a,header .navbar ul li .sub-menu li:hover>a,header .navbar ul li .sub-menu li a:hover,.custom-tab .nav-pills .nav-link.active:before, .custom-tab .nav-pills .nav-link:hover:before,.iq-amazing-tab ul li a.nav-link:before,.iq-amazing-tab ul li a.nav-link span, .isotope-filters button .post_no,.owl-carousel .owl-dots .owl-dot:hover,.owl-carousel .owl-dots .owl-dot.active, .owl-dots .owl-dot.active:nth-child(n+3),.iq-blog-box .iq-blogtag li a,.xamin-services:before,.slideouticons label.mainlabel,.slideouticons .iconswrapper ul li a:hover,#back-to-top .top:hover,.sidebar-service-left .widget_nav_menu ul.menu li.current-menu-item a, .sidebar-service-left .widget_nav_menu ul.menu li:hover a,.download-item li i,header .navbar ul li .sub-menu li.current-menu-parent a,.owl-carousel .owl-nav i:hover,.search-form .search-submit,input[type=submit], .contact-form .cfield input[type=submit],.contact-box i,.isotope-filters button:before,header .navbar ul li .sub-menu li .sub-menu li.menu-item.current-menu-item a,header .navbar ul li .sub-menu li .sub-menu li.menu-item a:hover,header .navbar-light .navbar-toggler, .commentlist .iq-comments-media .reply a:hover{
            background: $primary_color !important;
        }

        @media (max-width: 992px){

        header .navbar ul li.current-menu-item a, header .navbar ul li a:hover,header .navbar ul li.current-menu-parent>a {
        background: $primary_color !important;
        }
    }";

        $body_primary_color .="
       header .navbar ul li:hover i, header .navbar ul li.current-menu-parent a, header .navbar ul li.current-menu-parent i, header .navbar ul li.current-menu-item a,header .navbar ul li.current-menu-item i,header.style-one .sub-header .social-icone ul li:hover i, header.style-one .sub-header .number-info li:hover a i, header.style-one .sub-header .number-info li:hover a,header .navbar ul li:hover a,.title-box .title-design,a:hover h1, a:hover h2, a:hover h3, a:hover h4, a:hover h5, a:hover h6,.white-btn.button,.iq-amazing-tab ul li a.nav-link.active, .iq-amazing-tab ul li a:hover,.button-link,.button-link:hover,.iq-blog-meta a,footer.footer-one .widget ul.menu li a:hover,.widget ul li a:hover,footer.footer-one .copyright a:hover, footer.footer-one .menu-footer-menu-container .menu li a:hover, footer.footer-one .info-share li a:hover,.copyright a,.iq-breadcrumb-one .breadcrumb-item.active,.iq-breadcrumb-one ol li a,.iq-breadcrumb-one .breadcrumb-item+.breadcrumb-item::before,.service-box i,header .navbar ul li.current-menu-ancestor a, header .navbar ul li.current-menu-ancestor i,.widget ul li a:before,.iq-widget-menu .post-img .post-blog .blog-box ul li a i,.widget.widget_recent_comments #recentcomments li.recentcomments a, .comment-respond .logged-in-as a,.iq-blog-box .blog-title a:hover h4, .iq-blog-box .blog-title a:hover,.consult-services i,.contact-box .service-detail ul li a i:hover,.isotope-filters button.active, .isotope-filters button:hover, .commentlist .iq-comment-metadata a:hover{
            color: $primary_color !important;
        }";
         $body_primary_color .="
       .owl-carousel .owl-dots .owl-dot:hover,.owl-carousel .owl-dots .owl-dot.active, .owl-dots .owl-dot.active:nth-child(n+3),blockquote,header .navbar-light .navbar-toggler{
            border-color: $primary_color !important;
        }
        .iq-amazing-tab ul li a.nav-link span:after, .isotope-filters button span:after{
        	border-top: 8px solid $primary_color !important;
        }";
         $body_primary_color .="
        ";
         $body_primary_color .="
         header .navbar ul li .sub-menu li .sub-menu li.menu-item a {
		    background: #ffffff !important;
		    color: #313e5b !important;
		}
        header .navbar ul li .sub-menu li>a,header .navbar ul li .sub-menu li i{
        	color:#313e5b !important;
        }";
        $body_primary_color .="
        .contact-box .service-detail ul li a i{
        	background:transparent !important;
        }";
         $body_primary_color .="         
        header .navbar ul li .sub-menu li a:hover,header .navbar ul li .sub-menu li.current-menu-item a, header .navbar ul li.current-menu-parent ul li.current-menu-item a, header .navbar ul li .sub-menu li.current-menu-item a,header .navbar ul li .sub-menu li.current-menu-item a,header .navbar ul li .sub-menu li a:hover,header .navbar ul li .sub-menu li:hover>a,.sidebar-service-left .widget_nav_menu ul.menu li.current-menu-item a, .sidebar-service-left .widget_nav_menu ul.menu li:hover a,header .navbar ul li .sub-menu li.current-menu-parent a,header .navbar ul li .sub-menu li:hover> i,.white-btn.button:hover,header .navbar ul li .sub-menu li .sub-menu li.menu-item.current-menu-item a,header .navbar ul li .sub-menu li .sub-menu li.menu-item a:hover{
        	color:#ffffff !important;
        }
        @media (max-width: 992px){

        header .navbar ul li.current-menu-item a, header .navbar ul li a:hover,header .navbar ul li.current-menu-parent>a {
        color: #ffffff !important;
        }
    }";
    } 
    wp_add_inline_style( 'xamin-style', $body_primary_color );
}
add_action( 'wp_enqueue_scripts', 'xamin_primary_color' , 20);

function xamin_secondary_color() {       
     //Set  Secondary Color
     $xamin_option = get_option('xamin_options');
     $secondary_color = $xamin_option['secondary_color'];
     $body_secondary_color = "";
     if( !empty($secondary_color) && $secondary_color != '#313e5b') {
 
         $body_secondary_color .="
         h2, h3, h4, h5, h6, .progress-value {
            color: $secondary_color !important;
         }";
    }
    wp_add_inline_style( 'xamin-style', $body_secondary_color );
}
add_action( 'wp_enqueue_scripts', 'xamin_secondary_color' , 20);

function xamin_tertiary_color() {       
    //Set  Secondary Color
    $xamin_option = get_option('xamin_options');
    $tertiary_color = $xamin_option['tertiary_color'];
    $body_tertiary_color = "";
    if( !empty($tertiary_color) && $tertiary_color != '#525f81') {

        $body_tertiary_color= "
        body, p, .consulting-blog .blog-details ul.list-inline li a, .widget ul li a, footer.footer-one .info-share li a, footer.footer-one ul.iq-contact li i, header .navbar ul li a, header .navbar ul li .sub-menu li > a, header .navbar ul li .sub-menu li .sub-menu li.menu-item a, header.style-one .sub-header .number-info li a, header.style-one .sub-header .number-info li a i, header.style-one .sub-header .social-icone ul li i, .commentlist .iq-comment-metadata a, label, header .navbar ul li i, header .navbar ul li .sub-menu li i{
            color: $tertiary_color !important;
        }";

        $body_tertiary_color .="
        .title-box .title-design:before, .commentlist .iq-comments-media .reply a{
            background: $tertiary_color !important;
        }";
   }
   wp_add_inline_style( 'xamin-style', $body_tertiary_color );
}
add_action( 'wp_enqueue_scripts', 'xamin_tertiary_color' , 20);

function xamin_banner_title_color() {     
    //Set Body Color
    $xamin_option = get_option('xamin_options');
    $bg_title_color = $xamin_option['bg_title_color'];
    $bn_title_color = "";

    if(!empty($bg_title_color)){
        $bn_title_color .="
        .iq-breadcrumb-one h2{
            color: $bg_title_color !important;
        }"; 
    }
    wp_add_inline_style( 'xamin-style', $bn_title_color );
}
add_action( 'wp_enqueue_scripts', 'xamin_banner_title_color' , 20);

function xamin_layout_color() {     
    //Set Body Color
    $xamin_option = get_option('xamin_options');
    $xamin_layout_color = $xamin_option['xamin_layout_color'];
    $body_primary_color = "";

    if($xamin_option['layout_set'] == "1"){
        if( !empty($xamin_layout_color) && $xamin_layout_color != '#ffffff') {
            $body_primary_color .= "
            body {
                background-color: $xamin_layout_color !important;
            }"; 
        }
    }
    wp_add_inline_style( 'xamin-style', $body_primary_color );
}
add_action( 'wp_enqueue_scripts', 'xamin_layout_color' , 20);

function xamin_loader_color() {
    //Set Loader Background Color
    $xamin_option = get_option('xamin_options');
    $loader_color = $xamin_option['loader_color'];
    $ld_color = "";

    if( !empty($loader_color) && $loader_color != '#ffffff') {
        $ld_color .= "
        #loading {
            background : $loader_color !important;
        }"; 
    }
    wp_add_inline_style( 'xamin-style', $ld_color );
}
add_action( 'wp_enqueue_scripts', 'xamin_loader_color' , 20);

function xamin_bg_color() {
    //Set Background Color
    $xamin_option = get_option('xamin_options');
    $bg_color = $xamin_option['bg_color'];
    $background_color = "";

    if($xamin_option['bg_type'] == "1"){
        if( !empty($bg_color) && $bg_color != '#ffffff') {
            $background_color .= "
            .iq-bg-over {
                background : $bg_color !important;
            }"; 
        }
    }
    wp_add_inline_style( 'xamin-style', $background_color );
}
add_action( 'wp_enqueue_scripts', 'xamin_bg_color' , 20);

function xamin_opacity_color() {
    //Set Background Opacity Color
    $xamin_option = get_option('xamin_options');
    if($xamin_option['bg_opacity'] == "3"){
    $bg_opacity = $xamin_option['opacity_color']['rgba'];
    }
    $op_color = "";

    if($xamin_option['bg_opacity'] == "3"){
    if( !empty($bg_opacity) && $bg_opacity != '#ffffff') {
        $op_color .= "
        .breadcrumb-video::before,.breadcrumb-bg::before, .breadcrumb-ui::before {
            background : $bg_opacity !important;
        }"; 
        }
    }
    wp_add_inline_style( 'xamin-style', $op_color );
}
add_action( 'wp_enqueue_scripts', 'xamin_opacity_color' , 20);

function xamin_header_radio() {
    //Set Text Logo Color
    $xamin_option = get_option('xamin_options');
    $logo = $xamin_option['header_color'];
    $logo_color = "";

    if($xamin_option['header_radio'] == "1"){
        if( !empty($logo) && $logo != '#ffffff') {
            $logo_color .= "
            .logo-text {
                color : $logo !important;
            }"; 
        }
    }
    wp_add_inline_style( 'xamin-style', $logo_color );
}
add_action( 'wp_enqueue_scripts', 'xamin_header_radio' , 20);

function xamin_footer_color() {
    //Set Footer Background Color
    $xamin_option = get_option('xamin_options');
    if($xamin_option['change_footer_color'] == "0"){
    $f_color = $xamin_option['footer_color'];
    }
    $footer_color = "";
    
    if($xamin_option['change_footer_color'] == "0"){
        if( !empty($f_color) && $f_color != '#ffffff') {
            $footer_color .= "
            .iq-over-dark-90 {
                background : $f_color !important;
            }"; 
        }
    }
    wp_add_inline_style( 'xamin-style', $footer_color );
}
add_action( 'wp_enqueue_scripts', 'xamin_footer_color' , 20);
?>