<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<?php
	$content = apply_filters( 'xamin_the_content', get_the_content() );
	$video = false;

	// Only get video from the content if a playlist isn't present.
	if ( false === strpos( $content, 'wp-playlist-script' ) ) {
		$video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
	}
	?>
	<div class="iq-blog-box">	
		<?php
		$xamin_option = get_option('xamin_options');
		if(isset($xamin_option['xamin_display_image']))
		{
		$options = $xamin_option['xamin_display_image'];
		if($options == "yes"){
			if ( has_post_thumbnail() ) { ?>
			<div class="iq-blog-image">
				<?php
				

					the_content();

					wp_link_pages( array(
						'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'xamin' ),
						'after'       => '</div>',
						'link_before' => '<span class="page-number">',
						'link_after'  => '</span>',
					) );
				
				?>
			</div>	
			<?php } 
		} 
		}
		else 
		{
		?>
			<div class="iq-blog-image">
				<?php
				the_content();

				wp_link_pages( array(
					'before'      => '<div class="page-links">' . esc_html__( 'Pages:', 'xamin' ),
					'after'       => '</div>',
					'link_before' => '<span class="page-number">',
					'link_after'  => '</span>',
				) );
				?>
			</div>	
		<?php
		}
		?>
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
				<?php if(!is_single())
				{
				?>
				<div class="blog-title">
					<h4 class="entry-title">
						<a href="<?php echo esc_url(get_permalink($post->ID)); ?>">
							<?php the_title(); ?>
						</a>
					</h4>						
				</div>
				<?php 
				}
				?>

			
			<?php if(!is_single()){ ?>
			<div class="blog-button">
				<?php 
				if(!empty($xamin_option['blog_btn']))
				{ 
				?>
				<a class="button-link" href="<?php the_permalink();?>"><?php echo esc_attr($xamin_option['blog_btn']); ?><i class="fa fa-angle-right" aria-hidden="true"></i></a>
				<?php 
				}
				else
				{ 
				?>
				<a class="button-link" href="<?php the_permalink();?>"><?php esc_html_e('Read More', 'xamin'); ?><i class="fa fa-angle-right" aria-hidden="true"></i></a>
				<?php 
				}
				?>
			</div>
			<?php
			}
			?>							
		</div>	
	</div>	
			
	<?php 
	$xamin_option = get_option('xamin_options');
	if(isset($xamin_option['xamin_display_comment']))
	{
		$options = $xamin_option['xamin_display_comment'];
		if($options == "yes")
		{
			if(is_single()){
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

				xamin_pagination();
			}
		}
	}
	else {
		if(is_single()){
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

			xamin_pagination();
		}
		
	}

	?>
</article><!-- #post-## -->
