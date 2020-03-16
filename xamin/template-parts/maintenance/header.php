<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<?php $xamin_option = get_option('xamin_options'); ?>
	
    <?php
    if ( ! function_exists( 'has_site_icon' ) || ! wp_site_icon() ) {
          if( !empty($xamin_option['xamin_fevicon']) ) { ?>
            <link rel="shortcut icon" href="<?php echo esc_url($xamin_option['xamin_fevicon']['url']); ?>" />
            <?php 
          }
        }
    ?>
    <script type="text/javascript">
    <?php
    if(!empty($xamin_option['xamin_js_code'])){	
			echo wp_specialchars_decode($xamin_option['xamin_js_code']);
		}
    ?>
    </script>
<?php wp_head(); ?>
</head>

<body data-spy="scroll" data-offset="80" <?php body_class(); ?>>

<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html__( 'Skip to content', 'xamin' ); ?></a>

	<div class="site-content-contain">
		<div id="content" class="site-content">
