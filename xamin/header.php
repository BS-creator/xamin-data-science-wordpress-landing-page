<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage xamin
 * @since 1.0
 * @version 1.0
 */
?>
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
    
<?php wp_head(); ?>
</head>

<?php
  if(!empty($xamin_option['xamin_layout_image']['url'])){
      $bglayout = $xamin_option['xamin_layout_image']['url'];
  }
?>
<body data-spy="scroll" data-offset="80" <?php body_class(); ?> 
<?php
if($xamin_option['layout_set'] == "3")
{
?>style="background: url(<?php if(!empty($bglayout)){ echo esc_url($bglayout); } ?>)" 
<?php
}
?>
>
<?php
$options= $xamin_option['xamin_display_loader'];
  if($options == "yes")
  {
  ?>
  <!-- loading -->
  <div id="loading">
    <div id="loading-center">
        <?php
          if(!empty($xamin_option['xamin_loader_gif']['url'])){
          $bgurl = $xamin_option['xamin_loader_gif']['url'];
          ?>
          <img src="<?php echo esc_url($bgurl); ?>" alt="<?php esc_attr_e('loader','xamin'); ?>">
          <?php
          }
          else{
          $bgurl = get_template_directory_uri().'/assets/images/loader.gif';
          ?>
          <img src="<?php echo esc_url($bgurl); ?>" alt="<?php esc_attr_e('loader','xamin'); ?>">
          <?php
          }
        ?>        
    </div>
  </div>
  <!-- loading End -->
  <?php
  }
?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html__( 'Skip to content', 'xamin' ); ?></a>
    <?php
    $options= $xamin_option['xamin_header_variation'];
    if($options == "1")
    {
      get_template_part( 'template-parts/header/header', 'one' );
    }
    else if($options == "2")
    {
      get_template_part( 'template-parts/header/header', 'two' );
    }
    else
    {
      get_template_part( 'template-parts/header/header', 'one' );
    }
    ?>
	<?php 
    if(function_exists('xamin_display_header'))
    {
      xamin_display_header();  
    }
   ?>
	<div class="site-content-contain">
		<div id="content" class="site-content">
