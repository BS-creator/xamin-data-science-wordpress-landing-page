<?php
/*
Template Name: Portfolio
*/
get_header();
$xamin_option = get_option('xamin_options');
$options= $xamin_options['portfolio_variation']; 

if($options == 1)
{
?>
<div id="portfolio" class="content-area">
	<main id="portfolio-main" class="site-main">
		<div class="container">
			<div class="row">
				<?php if ( ! is_active_sidebar('portfolio-1') ) { ?>
					<div class="col-md-12 col-sm-12">
				<?php } else{ ?>
					<div class="col-md-8 col-sm-12">
				<?php } ?>
                    <?php
                    while ( have_posts() ) : the_post(); 
                        get_template_part( 'template-parts/portfolio/content', get_post_format() );
                    endwhile; // End of the loop. ?>
				</div>
				<?php if ( is_active_sidebar('portfolio-1') ) { ?>		
				<div class="col-md-4 col-sm-12 sidebar-service-right">
					<?php dynamic_sidebar( 'portfolio-1' ); ?>
				</div>
				<?php } ?>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- .container -->
<?php
}
else if($options == 2)
{
?>
<div id="portfolio" class="content-area">
	<main id="portfolio-main" class="site-main">
		<div class="container">
			<div class="row">
				<?php if ( is_active_sidebar('portfolio-1') ) { ?>		
				<div class="col-md-4 col-sm-12 sidebar-service-left">
					<?php dynamic_sidebar( 'portfolio-1' ); ?>
				</div>
				<?php } ?>
					<?php if ( ! is_active_sidebar('portfolio-1') ) { ?>
						<div class="col-md-12 col-sm-12">
					<?php } else { ?>
						<div class="col-md-8 col-sm-12">
					<?php } ?> 
                    <?php
                    while ( have_posts() ) : the_post(); 
                        get_template_part( 'template-parts/portfolio/content', get_post_format() );
                    endwhile; // End of the loop. ?>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- .container -->
<?php
}
else {
?>
<div id="portfolio" class="content-area">
	<main id="portfolio-main" class="site-main">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
                    <?php
                    while ( have_posts() ) : the_post(); 
                        get_template_part( 'template-parts/portfolio/content', get_post_format() );
                    endwhile; // End of the loop. ?>
				</div>
			</div>
		</div>
	</main><!-- #main -->
</div><!-- .container -->
<?php
}
?>
<?php get_footer(); ?>
