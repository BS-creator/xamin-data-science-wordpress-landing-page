<?php
/*
Template Name: Full Width
*/
get_header();
?>
<div id="primary" class="content-area">
	<main id="main" class="site-main">
		<div class="container">
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/page/content', 'page' );
					
			endwhile; // End of the loop.
			?>
		</div><!-- .container -->
	</main><!-- #main -->
</div><!-- #primary -->
<?php
get_footer();
