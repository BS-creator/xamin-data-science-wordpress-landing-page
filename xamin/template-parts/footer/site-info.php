<?php
/**
 * Displays footer site info
 *
 * @package WordPress
 * @subpackage xamin
 * @since 1.0
 * @version 1.0
 */

?>
<?php $xamin_option = get_option('xamin_options'); ?>
<div class="copyright-footer">
	<div class="pt-3 pb-3">
		<div class="row flex-row-reverse justify-content-between">
			<?php
			if(isset($xamin_option['display_copyright']))
			{
			$options = $xamin_option['display_copyright'];
			if($options == "yes")
			{ 
				$options= $xamin_option['footer_copyright_align'];
				$footer_copyright_align ='';
				if($options == "1"){ $footer_copyright_align = esc_html__('text-lg-left','xamin'); } 
				if($options == "2"){ $footer_copyright_align = esc_html__('text-lg-right','xamin'); }
				if($options == "3"){ $footer_copyright_align = esc_html__('text-lg-center','xamin'); }
			?>
			<div class="col-lg-12 col-md-12 <?php echo esc_attr($footer_copyright_align , 'xamin'  ); ?> text-md-center text-center">
				<?php
				if(isset($xamin_option['footer_copyright'])) {  ?>
					<span class="copyright"><?php echo html_entity_decode($xamin_option['footer_copyright']); ?></span>
					<?php
				}
				else {	?>
					<span class="copyright"><a target="_blank" href="<?php echo esc_url( __( 'https://themeforest.net/user/iqonicthemes/portfolio/', 'xamin' ) ); ?>"> <?php printf( esc_html__( 'Proudly powered by %s', 'xamin' ), 'xamin.' ); ?></a></span>
					<?php
				} ?>
			</div>
			<?php
			}
			}
			else { 
			?>
			<div class="col-lg-12 col-md-12 text-lg-right text-md-center text-center">
				<?php
				if(isset($xamin_option['footer_copyright'])) { ?>
					<span class="copyright"><?php echo html_entity_decode($xamin_option['footer_copyright']); ?></span>
					<?php
				}
				else {	?>
					<span class="copyright"><a target="_blank" href="<?php echo esc_url( __( 'https://themeforest.net/user/iqonicthemes/portfolio/', 'xamin' ) ); ?>"> <?php printf( esc_html__( 'Proudly powered by %s', 'xamin' ), 'xamin.' ); ?></a></span>
					<?php
				} ?>
			</div>
			<?php
			}
			?>
		</div>
	</div>
</div>