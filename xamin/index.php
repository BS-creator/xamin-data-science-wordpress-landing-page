<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage xamin
 * @since 1.0
 * @version 1.0
 */

get_header();
$xamin_option = get_option('xamin_options');
$options= $xamin_options['xamin_blog']; ?>
<?php if(is_front_page()){ 
    ?>
    <div class="iq-breadcrumb text-center green-bg">
	<div class="container">
		<div class="row flex-row-reverse">
			<div class="col-sm-12">
				<div class="heading-title white iq-breadcrumb-title">
					<h1 class="title"><?php  esc_html_e( 'Home', 'xamin' ); ?></h1>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<?php
				if($options == 1 && $options != '')
				{
				?>
				<div class="row">
					<?php if ( ! is_active_sidebar('sidebar-1') ) { ?>
						<div class="col-md-12 col-sm-12">
					<?php } else{ ?>
						<div class="col-lg-8 col-sm-12">
					<?php } ?>
						<?php
						if ( have_posts() ) :

							/* Start the Loop */
							while ( have_posts() ) : the_post();

								/*
								* Include the Post-Format-specific template for the content.
								* If you want to override this in a child theme, then include a file
								* called content-___.php (where ___ is the Post Format name) and that will be used instead.
								*/
								get_template_part( 'template-parts/post/content', get_post_format() );

							endwhile;

						else :

							get_template_part( 'template-parts/post/content', 'none' );

						endif;
						?>
						<?php
						if(isset($xamin_option['xamin_display_pagination']))
						{
						$options = $xamin_option['xamin_display_pagination'];
						if($options == "yes")
						{
						xamin_pagination();
						}
						}
						else
						{
						xamin_pagination();
						}
						?>
					</div>
					
					<?php if ( is_active_sidebar('sidebar-1') ) { ?>		
					<div class="col-lg-4 col-sm-12 sidebar-service-right mt-5 mt-lg-0">
						<?php get_sidebar(); ?>
					</div>
					<?php } ?>
				</div>
				<?php
				}
				else if($options == 2)
					{
					?>
					<div class="row flex-row-reverse">
						<div class="col-lg-8 col-sm-12">
						
							<?php
							if ( have_posts() ) {

								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/*
									* Include the Post-Format-specific template for the content.
									* If you want to override this in a child theme, then include a file
									* called content-___.php (where ___ is the Post Format name) and that will be used instead.
									*/
									get_template_part( 'template-parts/post/content', get_post_format() );

								endwhile;
								
							}
							else {

								get_template_part( 'template-parts/post/content', 'none' );

							}
							?>
							<?php
							if(isset($xamin_option['xamin_display_pagination']))
							{
							$options = $xamin_option['xamin_display_pagination'];
							if($options == "yes")
							{
							xamin_pagination();
							}
							}
							else
							{
							xamin_pagination();
							}
							?>
						</div>
						<div class="col-lg-4 col-sm-12 sidebar-service-left">
							<?php get_sidebar(); ?>
						</div>
					</div><!-- #row -->
					<?php 
					} 
					else if($options == 3)
					{
					?>
					<div class="row">
							<div class="col-md-12 col-sm-12">
						
							<?php
							if ( have_posts() ) {

								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/*
									* Include the Post-Format-specific template for the content.
									* If you want to override this in a child theme, then include a file
									* called content-___.php (where ___ is the Post Format name) and that will be used instead.
									*/
									get_template_part( 'template-parts/post/content', get_post_format() );

								endwhile;

								}
								else {
		
									get_template_part( 'template-parts/post/content', 'none' );
		
								}
							?>
							<?php
							if(isset($xamin_option['xamin_display_pagination']))
							{
							$options = $xamin_option['xamin_display_pagination'];
							if($options == "yes")
							{
							xamin_pagination();
							}
							}
							else
							{
							xamin_pagination();
							}
							?>
							</div>
					</div><!-- #row -->
					<?php 
					}
					else if($options == 4)
					{
					?>
					<div class="row">
							<?php
							if ( have_posts() ) {

								/* Start the Loop */
								while ( have_posts() ) : the_post();
								?>
								<div class="col-lg-6 col-md-6 col-sm-6 xamin-space-bottom"> 
								<?php
									/*
									* Include the Post-Format-specific template for the content.
									* If you want to override this in a child theme, then include a file
									* called content-___.php (where ___ is the Post Format name) and that will be used instead.
									*/
									get_template_part( 'template-parts/post/content', get_post_format() );
								?>

								</div>
								<?php
								endwhile;
								}
								else {
		
									get_template_part( 'template-parts/post/content', 'none' );
		
								}
							?>
							
					</div><!-- #row -->
					<?php
					if(isset($xamin_option['xamin_display_pagination']))
					{
					$options = $xamin_option['xamin_display_pagination'];
					if($options == "yes")
					{
					xamin_pagination();
					}
					}
					else
					{
					xamin_pagination();
					}
					?>
					<?php 
					} 
					else if($options == 5)
					{
					?>
					<div class="row">
							<?php
							if ( have_posts() ) {
	
								/* Start the Loop */
								while ( have_posts() ) : the_post();
								?>
								<div class="col-lg-4 col-md-6 xamin-space-bottom sidebar-service-left"> 
								<?php
									/*
									* Include the Post-Format-specific template for the content.
									* If you want to override this in a child theme, then include a file
									* called content-___.php (where ___ is the Post Format name) and that will be used instead.
									*/
									get_template_part( 'template-parts/post/content', get_post_format() );
								?>
								</div>
								<?php
								endwhile;
								
							}
							else {
	
								get_template_part( 'template-parts/post/content', 'none' );
	
							}
							?>
					</div><!-- #row -->	
					<?php
					if(isset($xamin_option['xamin_display_pagination']))
					{
					$options = $xamin_option['xamin_display_pagination'];
					if($options == "yes")
					{
					xamin_pagination();
					}
					}
					else
					{
					xamin_pagination();
					}
					?>
					<?php 
					} 
					else if($options == 5)
					{
					?>
					<?php  } 
					else
					{
					?>
					<div class="row">
							<?php if ( ! is_active_sidebar('sidebar-1') ) { ?>
								<div class="col-md-12 col-sm-12">
							<?php } else { ?>
								<div class="col-lg-8 col-sm-12">
							<?php } ?>
							<?php
							if ( have_posts() ) {

								/* Start the Loop */
								while ( have_posts() ) : the_post();

									/*
									* Include the Post-Format-specific template for the content.
									* If you want to override this in a child theme, then include a file
									* called content-___.php (where ___ is the Post Format name) and that will be used instead.
									*/
									get_template_part( 'template-parts/post/content', get_post_format() );

								endwhile;
								
							}
							else {

								get_template_part( 'template-parts/post/content', 'none' );

							}
							?>
							<?php
							xamin_pagination();
							?>
						</div>
						<div class="col-lg-4 col-sm-12 mt-5 mt-lg-0 sidebar-service-right">
							<?php get_sidebar(); ?>
						</div>
					</div><!-- #row -->
					<?php } ?>

					
					
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->			
<?php get_footer(); ?>
