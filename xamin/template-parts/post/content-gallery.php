<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="sf-content">
		<div class="main-content">
				<div class="iq-blog-box">	
					<?php if ( has_post_thumbnail() ) { ?>
					<div class="iq-blog-image">
						<?php the_post_thumbnail(); ?>
					</div>	
					<?php } ?>
					<div class="iq-blog-detail">	
							<div class="iq-blog-meta">
								<ul class="list-inline">
								<?php 
								//post date
								$archive_year  = get_the_time('Y',$post->post_id);
								$archive_month = get_the_time('m',$post->post_id); 
								$archive_day   = get_the_time('d',$post->post_id);
								$date=date_create($post->post_date); ?>
								<li class="list-inline-item">	
										<?php echo xamin_time_link(); ?>	
								</li>
								</ul>
							</div>
							<?php if(!is_single()){ ?>
								<div class="blog-title">
									<h4 class="entry-title">
										<a href="<?php echo esc_url(get_permalink($post->ID)); ?>">
											<?php the_title(); ?>
										</a>
									</h4>						
								</div>
							<?php } ?>
							<div class="blog-content">
							<?php
								if ( ! is_single() ) {

									// If not a single post, highlight the gallery.
									if ( get_post_gallery() ) {
										echo '<div class="entry-gallery">';
											echo get_post_gallery();
										echo '</div>';
									};

								};

								if ( is_single() || ! get_post_gallery() ) {

									/* translators: %s: Name of current post */
									the_content();

								};

								wp_link_pages( array(
									'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'xamin' ),
									'after'       => '</div>',
									'link_before' => '<span class="page-number">',
									'link_after'  => '</span>',
								) );
								?>
								
							</div>
							<?php if(!is_single()){ ?>
								<div class="blog-button">
								<?php 
								if(!empty($xamin_option['blog_btn']))
								{ 
								?>
									<a class="button-link" href="<?php the_permalink();?>">
									<?php echo esc_attr($xamin_option['blog_btn']); ?>
									<i class="fa fa-angle-right" aria-hidden="true"></i>
									</a>
								<?php 
								}
								else
								{ 
								?>
									<a class="button-link" href="<?php the_permalink();?>">
									<?php esc_html_e('Read More', 'xamin'); ?>
									<i class="fa fa-angle-right" aria-hidden="true"></i>
									</a>
								<?php 
								}
								?>
								</div>
							<?php
							}
							?>
					</div>	
				</div>	
			</div>
	</div><!-- .sf-content -->
	<?php 
	if(is_single()){
		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

		xamin_pagination();
	}
	?>
</article><!-- #post-## -->
