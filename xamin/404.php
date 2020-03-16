<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage xamin
 * @since 1.0
 * @version 1.0
 */

get_header(); 
$xamin_option = get_option('xamin_options');

if(isset($xamin_option['xamin_404_banner_image']['url'])){
	$bgurl = $xamin_option['xamin_404_banner_image']['url'];
}
?>
<div <?php if(!empty($bgurl)){ ?> style="background: url(<?php echo esc_url($bgurl); ?> );" <?php } ?>>
	<div class="container">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
				<div class="error-404 not-found">
					<div class="page-content">
						<div class="row">
							<div class="col-sm-12 text-center">
								<?php  
									if(!empty($xamin_option['xamin_404_banner_image']['url'])) { ?>
									<div class="fourzero-image mb-5">
										<img src ="<?php echo esc_url($xamin_option['xamin_404_banner_image']['url']); ?>" alt="<?php  esc_attr_e( '404', 'xamin' ); ?>"/>
									</div>	

								<?php } else { ?>
							
									<div class="big-text"><?php esc_html_e( '404', 'xamin' ); ?></div>

								<?php } ?>
								<h4>
									<?php $four_title = $xamin_option['xamin_fourzerofour_title']; echo esc_html($four_title); ?>
								</h4>
								<p class="mb-5">
									<?php $four_des = $xamin_option['xamin_four_description']; echo esc_html($four_des); ?>
								</p>
								<div class="d-block">
									<a class="button" href="<?php echo esc_url(home_url()); ?>"><?php esc_html_e('Back to Home', 'xamin'); ?></a>
								</div>
							</div>
						</div>
					</div><!-- .page-content -->
				</div><!-- .error-404 -->
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- .container -->
</div>

<?php get_footer();
