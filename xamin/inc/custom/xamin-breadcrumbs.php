<?php
function xamin_display_header(){
$xamin_option = get_option('xamin_options');
if(!is_front_page()) {


					if(isset($xamin_option['display_breadcrumbs']))
					{
					$options = $xamin_option['display_breadcrumbs'];
						if($options == "yes")
						{
						

	if ( ( ( is_page() && ! xamin_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) )
	{
		$options= $xamin_option['bg_opacity'];

		if($options == "1"){ $bg_class = esc_html__('iq-bg-over black','xamin'); }
		elseif($options == "2"){ $bg_class = esc_html__('iq-bg-over iq-over-dark-80','xamin'); }
		elseif($options == "3"){ $bg_class = esc_html__('breadcrumb-bg breadcrumb-ui','xamin'); }
		else{ $bg_class = esc_html__('iq-bg-over iq-over-dark-80','xamin'); }
		?>
		<div class="text-left iq-breadcrumb-one <?php if(!empty($bg_class)) { echo esc_attr($bg_class); } ?>" style="background: url(<?php the_post_thumbnail_url(); ?>);">
	<?php
	}
	else {
			if(!empty($xamin_option['bg_type'] == "1"))
			{
				$bg_color = esc_html__('iq-bg-over black','xamin');
			}
			elseif(!empty($xamin_option['bg_type'] == "2"))
			{
				if(isset($xamin_option['banner_image']['url'])){
					$bgurl = $xamin_option['banner_image']['url'];
				}

				$options= $xamin_option['bg_opacity'];

				if($options == "1"){ $bg_class = esc_html__('iq-bg-over black','xamin'); }
				elseif($options == "2"){ $bg_class = esc_html__('iq-bg-over iq-over-dark-80','xamin'); }
				elseif($options == "3"){ $bg_class = esc_html__('breadcrumb-bg breadcrumb-ui','xamin'); }
				else{ $bg_class = esc_html__('iq-bg-over iq-over-dark-80','xamin'); }
			}
			elseif(!empty($xamin_option['bg_type'] == "3"))
			{
				$options= $xamin_option['bg_opacity'];

				if($options == "1"){ $bg_class = esc_html__('video-iq-bg-over','xamin'); }
				elseif($options == "2"){ $bg_class = esc_html__('video-breadcrumb-bg breadcrumb-video','xamin'); }
				elseif($options == "3"){ $bg_class = esc_html__('video-breadcrumb-bg breadcrumb-video','xamin'); }
				else{ $bg_class = esc_html__('iq-bg-over iq-over-dark-80','xamin'); }
			}
			else
			{
				$bg_class = esc_html__('iq-bg-over','xamin');
			}
			?>
	<div class="text-left iq-breadcrumb-one <?php if(!empty($xamin_option['bg_type'] == "1")) { echo esc_attr($bg_color); } ?> <?php if(!empty($bg_class)) { echo esc_attr($bg_class); } ?>"
	<?php if(!empty($bgurl)){ ?> style="background: url(<?php echo esc_url($bgurl); ?> );" <?php } ?>>
	<?php
	}
?>


	<?php
	if($xamin_option['bg_type'] == "3")
	{
		if(isset($xamin_option['bg_video_link'])){
			$videourl = $xamin_option['bg_video_link'];
		}
		?>
			<video class="masthead-video" autoplay loop muted>
                <source src="<?php echo esc_url($videourl); ?>" type="video/mp4">
                <source src="<?php echo esc_url($videourl); ?>" type="video/webm">
            </video>
		<?php

	}
	?>
	<div class="container">
		<?php
		$options= $xamin_option['bg_image'];

		if($options == '1')
		{
		?>
		<div class="row align-items-center">
			<div class="col-sm-12">
				<nav aria-label="breadcrumb" class="text-center iq-breadcrumb-two">
					<?php
					if(is_archive()){
					?>
					<h2 class="title"><?php the_archive_title();  ?></h2>
					<?php
					}
					elseif(is_search()){
					if ( have_posts() ) : ?>
					<h2 class="title"><?php printf( esc_html__( 'Search Results for: %s', 'xamin' ), '<span>' . get_search_query() . '</span>' ); ?></h2>

					<?php else : ?>
					<h2 class="title"><?php esc_html_e( 'Nothing Found', 'xamin' ); ?></h2>

					<?php endif;
					} elseif(is_404()){

					if(isset($xamin_option['xamin_fourzerofour_title'])){
					?>
					<h2 class="title"><?php $four_title =  $xamin_option['xamin_fourzerofour_title']; echo esc_html($four_title);  ?></h2>
					<?php
					} else{
					?>
					<h2 class="title"><?php esc_html_e( 'Oops! That page can not be found.', 'xamin' ); ?></h2>

					<?php }
					} elseif(is_home()){ ?>
					<h2 class="title"><?php esc_html_e( 'Blog', 'xamin' ); ?></h2>
					<?php }
					else { ?>
							<h2 class="title"><?php single_post_title(); ?></h2>
					<?php } ?>
					
						<ol class="breadcrumb main-bg">
							<?php echo xamin_custom_breadcrumbs(); ?>
						</ol>
						
				</nav>
			</div>
		</div>
		<?php }  elseif($options == '2')
		{
		?>
		<div class="row align-items-center">
			<div class="col-lg-8 col-md-8 text-left align-self-center">
				<nav aria-label="breadcrumb" class="text-left">
					<?php
					if(is_archive()){
					?>
					<h2 class="title"><?php the_archive_title();  ?></h2>
					<?php
					}
					elseif(is_search()){
					if ( have_posts() ) : ?>
					<h2 class="title"><?php printf( esc_html__( 'Search Results for: %s', 'xamin' ), '<span>' . get_search_query() . '</span>' ); ?></h2>

					<?php else : ?>
					<h2 class="title"><?php esc_html_e( 'Nothing Found', 'xamin' ); ?></h2>

					<?php endif;
					} elseif(is_404()){

					if(isset($xamin_option['xamin_fourzerofour_title'])){
					?>
					<h2 class="title"><?php $four_title =  $xamin_option['xamin_fourzerofour_title']; echo esc_html($four_title);  ?></h2>
					<?php
					} else{
					?>
					<h2 class="title"><?php esc_html_e( 'Oops! That page can not be found.', 'xamin' ); ?></h2>

					<?php }
					} elseif(is_home()){ ?>
					<h2 class="title"><?php esc_html_e( 'Blog', 'xamin' ); ?></h2>
					<?php }
					else { ?>
							<h2 class="title"><?php single_post_title(); ?></h2>
					<?php } ?>
					<?php
					if(isset($xamin_option['display_breadcrumbs']))
					{
					$options = $xamin_option['display_breadcrumbs'];
						if($options == "yes")
						{
					?>
					<ol class="breadcrumb main-bg">
						<?php echo xamin_custom_breadcrumbs(); ?>
					</ol>
					<?php
						}
					}
					?>
				</nav>
			</div>
			<div class="col-lg-4 col-md-4 col-sm-12 text-right wow fadeInRight">
				<?php
				if ( ( ( is_page() && ! xamin_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) )
				{
					the_post_thumbnail();

				?>
				<?php
				}
				else{
					if(is_404())
					{
						if(!empty($xamin_option['xamin_404_banner_image']['url'])){
						$bnurl = $xamin_option['xamin_404_banner_image']['url'];
						}
					}
					elseif(is_home())
					{
						if(!empty($xamin_option['xamin_blog_banner_image']['url'])){
						$bnurl = $xamin_option['xamin_blog_banner_image']['url'];
						}
					}
					else
					{
						if(!empty($xamin_option['xamin_page_banner_image']['url']))
						{
						$bnurl = $xamin_option['xamin_page_banner_image']['url'];
						}
					}
					?>
					<img src="<?php echo esc_url($bnurl); ?>" class="img-fluid float-right" alt="<?php  esc_attr_e( 'banner', 'xamin' ); ?>">
				<?php
				}
				?>
			</div>
		</div>
		<?php }  elseif($options == '3')
		{
		?>
		<div class="row align-items-center">
			<div class="col-lg-4 col-md-4 col-sm-12 wow fadeInRight">
				<?php
				if ( ( ( is_page() && ! xamin_is_frontpage() ) ) && has_post_thumbnail( get_queried_object_id() ) )
				{
					the_post_thumbnail();

				?>
				<?php
				}
				else {

					if(is_404())
					{
						if(!empty($xamin_option['xamin_404_banner_image']['url'])){
						$bnurl = $xamin_option['xamin_404_banner_image']['url'];
						}
					}
					elseif(is_home())
					{
						if(!empty($xamin_option['xamin_blog_banner_image']['url'])){
						$bnurl = $xamin_option['xamin_blog_banner_image']['url'];
						}
					}
					else
					{
						if(!empty($xamin_option['xamin_page_banner_image']['url']))
						{
						$bnurl = $xamin_option['xamin_page_banner_image']['url'];
						}
					}
					?>
					<img src="<?php echo esc_url($bnurl); ?>" class="img-fluid" alt="<?php  esc_attr_e( 'banner', 'xamin' ); ?>">
				<?php
				}
				?>
			</div>
			<div class="col-lg-8 col-md-8 text-left align-self-center">
				<nav aria-label="breadcrumb" class="text-right iq-breadcrumb-two">
					<?php
					if(is_archive()){
					?>
					<h2 class="title"><?php the_archive_title();  ?></h2>
					<?php
					}
					elseif(is_search()){
					if ( have_posts() ) : ?>
					<h2 class="title"><?php printf( esc_html__( 'Search Results for: %s', 'xamin' ), '<span>' . get_search_query() . '</span>' ); ?></h2>

					<?php else : ?>
					<h2 class="title"><?php esc_html_e( 'Nothing Found', 'xamin' ); ?></h2>

					<?php endif;
					} elseif(is_404()){

					if(isset($xamin_option['xamin_fourzerofour_title'])){
					?>
					<h2 class="title"><?php $four_title =  $xamin_option['xamin_fourzerofour_title']; echo esc_html($four_title);  ?></h2>
					<?php
					} else{
					?>
					<h2 class="title"><?php esc_html_e( 'Oops! That page can not be found.', 'xamin' ); ?></h2>

					<?php }
					} elseif(is_home()){ ?>
					<h2 class="title"><?php esc_html_e( 'Blog', 'xamin' ); ?></h2>
					<?php }
					else { ?>
							<h2 class="title"><?php single_post_title(); ?></h2>
					<?php } ?>
					<?php
					if(isset($xamin_option['display_breadcrumbs']))
					{
					$options = $xamin_option['display_breadcrumbs'];
						if($options == "yes")
						{
					?>
					<ol class="breadcrumb main-bg">
						<?php echo xamin_custom_breadcrumbs(); ?>
					</ol>
					<?php
						}
					}
					?>
				</nav>
			</div>
		</div>
		<?php }  elseif($options == '4')
		{
		?>
		<div class="row align-items-center iq-breadcrumb-three">
			<div class="col-sm-6 mb-3 mb-lg-0 mb-md-0">
					<?php
					if(is_archive()){
					?>
					<h2 class="title text-white ext-lg-right text-md-right text-sm-left"><?php the_archive_title();  ?></h2>
					<?php
					}
					elseif(is_search()){
					if ( have_posts() ) : ?>
					<h2 class="title text-white"><?php printf( esc_html__( 'Search Results for: %s', 'xamin' ), '<span>' . get_search_query() . '</span>' ); ?></h2>

					<?php else : ?>
					<h2 class="title text-white"><?php esc_html_e( 'Nothing Found', 'xamin' ); ?></h2>

					<?php endif;
					} elseif(is_404()){

					if(isset($xamin_option['xamin_fourzerofour_title'])){
					?>
					<h2 class="title text-white"><?php $four_title =  $xamin_option['xamin_fourzerofour_title']; echo esc_html($four_title);  ?></h2>
					<?php
					} else{
					?>
					<h2 class="title text-white"><?php esc_html_e( 'Oops! That page can not be found.', 'xamin' ); ?></h2>

					<?php }
					} elseif(is_home()){ ?>
					<h2 class="title text-white"><?php esc_html_e( 'Blog', 'xamin' ); ?></h2>
					<?php }
					else { ?>
							<h2 class="title text-white"><?php single_post_title(); ?></h2>
					<?php } ?>
			</div>
			<div class="col-sm-6 ext-lg-right text-md-right text-sm-left">
				<nav aria-label="breadcrumb" class="iq-breadcrumb-two">
					<?php
					if(isset($xamin_option['display_breadcrumbs']))
					{
					$options = $xamin_option['display_breadcrumbs'];
						if($options == "yes")
						{
					?>
					<ol class="breadcrumb main-bg">
						<?php echo xamin_custom_breadcrumbs(); ?>
					</ol>
					<?php
						}
					}
					?>
				</nav>
			</div>
		</div>
		<?php }  elseif($options == '5')
		{
		?>
		<div class="row align-items-center iq-breadcrumb-three">
			<div class="col-sm-6 mb-3 mb-lg-0 mb-md-0">
				<nav aria-label="breadcrumb" class="text-left iq-breadcrumb-two">
					<ol class="breadcrumb main-bg">
						<?php echo xamin_custom_breadcrumbs(); ?>
					</ol>
				</nav>
			</div>
			<div class="col-sm-6">
					<?php
					if(is_archive()){
					?>
					<h2 class="title text-white text-lg-right text-md-right text-sm-left"><?php the_archive_title();  ?></h2>
					<?php
					}
					elseif(is_search()){
					if ( have_posts() ) : ?>
					<h2 class="title text-white text-lg-right text-md-right text-sm-left"><?php printf( esc_html__( 'Search Results for: %s', 'xamin' ), '<span>' . get_search_query() . '</span>' ); ?></h2>

					<?php else : ?>
					<h2 class="title text-white text-lg-right text-md-right text-sm-left"><?php esc_html_e( 'Nothing Found', 'xamin' ); ?></h2>

					<?php endif;
					} elseif(is_404()){

					if(isset($xamin_option['xamin_fourzerofour_title'])){
					?>
					<h2 class="title text-white text-lg-right text-md-right text-sm-left"><?php $four_title =  $xamin_option['xamin_fourzerofour_title']; echo esc_html($four_title);  ?></h2>
					<?php
					} else{
					?>
					<h2 class="title text-white text-lg-right text-md-right text-sm-left"><?php esc_html_e( 'Oops! That page can not be found.', 'xamin' ); ?></h2>

					<?php }
					} elseif(is_home()){ ?>
					<h2 class="title text-white text-lg-right text-md-right text-sm-left"><?php esc_html_e( 'Blog', 'xamin' ); ?></h2>
					<?php }
					else { ?>
							<h2 class="title text-white text-lg-right text-md-right text-sm-left"><?php single_post_title(); ?></h2>
					<?php } ?>
			</div>
		</div>
		<?php } else
		{
		?>
		<div class="row align-items-center">
			<div class="col-sm-12">
				<nav aria-label="breadcrumb" class="text-left">
					<?php
					if(is_archive()){
					?>
					<h2 class="title"><?php the_archive_title();  ?></h2>
					<?php
					}
					elseif(is_search()){
					if ( have_posts() ) : ?>
					<h2 class="title"><?php printf( esc_html__( 'Search Results for: %s', 'xamin' ), '<span>' . get_search_query() . '</span>' ); ?></h2>

					<?php else : ?>
					<h2 class="title"><?php esc_html_e( 'Nothing Found', 'xamin' ); ?></h2>

					<?php endif;
					} elseif(is_404()){

					if(isset($xamin_option['xamin_fourzerofour_title'])){
					?>
					<h2 class="title"><?php $four_title =  $xamin_option['xamin_fourzerofour_title']; echo esc_html($four_title);  ?></h2>
					<?php
					} else{
					?>
					<h2 class="title"><?php esc_html_e( 'Oops! That page can not be found.', 'xamin' ); ?></h2>

					<?php }
					} elseif(is_home()){ ?>
					<h2 class="title"><?php esc_html_e( 'Blog', 'xamin' ); ?></h2>
					<?php }
					else { ?>
							<h2 class="title"><?php single_post_title(); ?></h2>
					<?php } ?>
					<ol class="breadcrumb main-bg">
						<?php echo xamin_custom_breadcrumbs(); ?>
					</ol>
				</nav>
			</div>
		</div>
		<?php } ?>

		</div>
</div>

<?php
	}
	}
	}
}
?>