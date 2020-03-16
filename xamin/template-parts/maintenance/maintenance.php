<?php
get_template_part('template-parts/maintenance/header');

$xamin_option = get_option('xamin_options');
if($xamin_option['maintenance_radio'] == 1)
{
?>
    <?php
    if(isset($xamin_option['maintenance_bg_image']['url'])){
        $m_bgurl = $xamin_option['maintenance_bg_image']['url'];
    }
    ?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="maintenance" <?php if(!empty($m_bgurl)){ ?> style="background: url(<?php echo esc_url($m_bgurl); ?> );" <?php } ?>>
				
				<h2 class="mb-3"><?php $maintenance_title = $xamin_option['maintenance_title']; 
							echo esc_html($maintenance_title); ?></h2>
				<p><?php $mainten_desc = $xamin_option['mainten_desc']; 
							echo esc_html($mainten_desc); ?></p>
				</div>
			</div>
		</div>
 	</div>
<?php
}
if($xamin_option['maintenance_radio'] == 2)
{
?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
			<?php
			if(isset($xamin_option['coming_soon_bg_image']['url'])){
			$coming_bgurl = $xamin_option['coming_soon_bg_image']['url'];
			}
			?>
			<div class="iq-coming text-center" <?php if(!empty($coming_bgurl)){ ?> style="background: url(<?php echo esc_url($coming_bgurl); ?> );" <?php } ?>>
				<h1 class="mb-3">
				<?php $coming_title = $xamin_option['coming_title']; 
				echo esc_html($coming_title); ?>
				</h1>
				<p>
				<?php $coming_desc = $xamin_option['coming_desc']; 
					echo esc_html($coming_desc); ?>
				</p>
				<?php
				if(!empty($xamin_option['opt_date']))
				{ 
				$date = $xamin_option['opt_date'];
				$date = date_create_from_format('m/d/Y', $date);
				$date = $date->format( 'F d,Y' );
				?>
				<div class="expire_date" id="<?php echo esc_attr($date);?>"></div>
					<ul class="example mb-0 pl-0 countdown">
					<li><span class="days"><?php echo esc_html__('00','xamin' ); ?></span><p class="days_text"><?php esc_html__("Days", 'xamin' ); ?></p></li>
					
					<li><span class="hours"><?php echo esc_html__('00','xamin' ); ?></span><p class="hours_text"><?php esc_html__("Hours", 'xamin' ); ?></p></li>
					
					<li><span class="minutes"><?php echo esc_html__('00','xamin' ); ?></span><p class="minutes_text"><?php esc_html__("Minutes", 'xamin' ); ?></p></li>
					
					<li><span class="seconds"><?php echo esc_html__('00','xamin' ); ?></span><p class="seconds_text"><?php esc_html__("Seconds", 'xamin' ); ?></p></li>
					</ul>
				</div>
				<?php
				}
				?>
			</div>
		</div>
	</div>
<?php
}
get_template_part( 'template-parts/maintenance/footer' );
?>
