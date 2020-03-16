<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage xamin
 * @since 1.0
 * @version 1.0
 */

get_header(); 
$xamin_option = get_option('xamin_options');
$options= $xamin_options['xamin_search_variation']; 
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
				if ( have_posts() ) :
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/post/content', 'excerpt' );

					endwhile; // End of the loop.

					xamin_pagination();

				else : ?>

					<p><?php esc_attr_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'xamin' ); ?></p>
					<?php
						get_search_form();

				endif;
				?>
				</div>
				<?php if ( is_active_sidebar('page-1') ) { ?>		
				<div class="col-lg-4 col-sm-12 sidebar-service-right">
					<?php dynamic_sidebar( 'page-1' ); ?>
				</div>
				<?php } ?>
			</div>

		</div>
	</main><!-- #main -->
</div><!-- container -->
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
				if ( have_posts() ) :
					/* Start the Loop */
					while ( have_posts() ) : the_post();

						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'template-parts/post/content', 'excerpt' );

					endwhile; // End of the loop.

					xamin_pagination();

				else : ?>

					<p><?php esc_attr_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'xamin' ); ?></p>
					<?php
						get_search_form();

				endif;
				?>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- container -->
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
					if ( have_posts() ) :
						/* Start the Loop */
						while ( have_posts() ) : the_post();

							/**
							 * Run the loop for the search to output the results.
							 * If you want to overload this in a child theme then include a file
							 * called content-search.php and that will be used instead.
							 */
							get_template_part( 'template-parts/post/content', 'excerpt' );

						endwhile; // End of the loop.

						xamin_pagination();

					else : ?>

						<p><?php esc_attr_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'xamin' ); ?></p>
						<?php
							get_search_form();

					endif;
					?>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- container -->
<?php
}
?>
<?php get_footer(); ?>