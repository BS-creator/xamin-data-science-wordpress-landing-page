<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage xamin
 * @since 1.0
 * @version 1.2
 */
$xamin_option = get_option('xamin_options'); ?>
</div><!-- #content -->
<!-- Footer start-->
<?php
if(isset($xamin_option['display_footer']))
{
	$options = $xamin_option['display_footer'];
	if($options == "yes")
	{
		if(isset($xamin_option['footer_image']['url'])){
				$bgurl = $xamin_option['footer_image']['url'];
		}
	}
}
?>
<footer id="contact" class="footer-one iq-bg-dark iq-over-dark-90" <?php if(!empty($bgurl)){ ?> style="background: url(<?php echo esc_url($bgurl); ?> );" <?php } ?>>
		
      <div class="container">
        <?php

          get_template_part( 'template-parts/footer/footer', 'widgets' );
        
          get_template_part( 'template-parts/footer/site', 'info' );
           
        ?>
      </div>
    </footer>
  <!-- Footer stop-->

    </div><!-- .site-content-contain -->
</div><!-- #page -->
<?php
$xamin_option = get_option('xamin_options');
if(isset($xamin_option['xamin_back_to_top']))
{
	$options = $xamin_option['xamin_back_to_top'];
	if($options == "yes")
	{
	?>
	<!-- === back-to-top === -->
	<div id="back-to-top">
		<a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
	</div>
	<!-- === back-to-top End === -->
	<?php 
	}
}
else 
{
?>
	<!-- === back-to-top === -->
	<div id="back-to-top">
		<a class="top" id="top" href="#top"> <i class="ion-ios-arrow-up"></i> </a>
	</div>
	<!-- === back-to-top End === -->
<?php
}
?>
<?php
if(!empty($xamin_option['xamin_js_code'])){	
?>
<script type="text/javascript">
<?php echo wp_specialchars_decode($xamin_option['xamin_js_code']); ?>
</script>
<?php
}
?>


<?php wp_footer(); ?>
</body>
</html>
