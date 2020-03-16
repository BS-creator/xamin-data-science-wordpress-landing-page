<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
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
$options= $xamin_options['xamin_page_variation'];

if($options == 1)
{ 
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container">
			<div class="row">
				<?php if ( ! is_active_sidebar('page-1') ) { ?>
					<div class="col-md-12 col-sm-12">
				<?php } else{ ?>
					<div class="col-lg-8 col-sm-12">
				<?php } ?>
				<?php
					while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/page/content', 'page' );

					//wp_link_pages();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
					comments_template();
					endif;

					endwhile; // End of the loop.
				?>
				</div>
				<?php if ( is_active_sidebar('page-1') ) { ?>
				<div class="col-lg-4 col-sm-12 sidebar-service-right">
					<?php dynamic_sidebar( 'page-1' ); ?>
				</div>
				<?php } ?>
			</div>
		</div><!-- #primary -->
	</main><!-- #main -->
</div><!-- .container -->
<?php
}
else if($options == 2)
{ 
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container">
			<div class="row">
				<?php if ( is_active_sidebar('page-1') ) { ?>
				<div class="col-lg-4 col-sm-12 sidebar-service-left">
					<?php dynamic_sidebar( 'page-1' ); ?>
				</div>
				<?php } ?>
				<?php if ( ! is_active_sidebar('page-1') ) { ?>
					<div class="col-md-12 col-sm-12">
				<?php } else { ?>
					<div class="col-lg-8 col-sm-12">
				<?php } ?>
					<?php
					while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/page/content', 'page' );

					//wp_link_pages();

					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
					comments_template();
					endif;

					endwhile; // End of the loop.
					?>
				</div>
			</div>
		</div><!-- #primary -->
	</main><!-- #main -->
</div><!-- .container -->
<?php
}
else
{
?>
<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<div class="container">
				<div class="row">

					<div class="col-md-12 col-sm-12">

						<?php
						while ( have_posts() ) : the_post();

						get_template_part( 'template-parts/page/content', 'page' );

						//wp_link_pages();

						// If comments are open or we have at least one comment, load up the comment template.
						if ( comments_open() || get_comments_number() ) :
						comments_template();
						endif;

						endwhile; // End of the loop.
						?>
					</div>
				</div>
			</div><!-- #primary -->
		</main><!-- #main -->
	</div><!-- .container -->
	<?php
}
?>
<?php get_footer(); ?>
