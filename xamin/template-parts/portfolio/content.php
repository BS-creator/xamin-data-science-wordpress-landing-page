<?php $xamin_option = get_option('xamin_options'); ?>
<?php
if(isset($xamin_option['portfolio_top']))
{	
    $options = $xamin_option['portfolio_top'];
    if($options == "yes"){ ?>
        <div class="row">
            <?php if(has_post_thumbnail())
            {
            ?>
            <div class="col-lg-6 col-sm-12">
                <div class="iq-portfolio-image">
                    <?php the_post_thumbnail(); ?>
                </div>
            </div>
            <?php } ?>
            <div class="col-lg-6 col-sm-12 mt-4 mt-lg-0">
                <?php 
                if(!empty($xamin_option['portfolio_sub_title']))
                { 
                ?>
                <h3 class="mb-4"><?php echo esc_attr($xamin_option['portfolio_sub_title']); ?></h3>
                <?php
                }
                else
                {
                ?>
                <h3 class="mb-4"><?php esc_html_e('We work with you to address your most critical business priorities.', 'xamin'); ?></h3>
                <?php
                }
                ?>
                <?php 
                if(!empty($xamin_option['portfolio_title_desc']))
                { 
                ?>
                <p><?php echo html_entity_decode($xamin_option['portfolio_title_desc']); ?></p>
                <?php
                }
                else
                {
                ?>
                <p><?php esc_html_e('There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don’t look even slightly believable.', 'xamin'); ?></p>
                <?php
                }
                ?>
                <div class="portfolio-detail-box iq-rmb-45">
                        <ul class="list-inline portfolio-detail mb-1">
                            <?php $xamin_portfolio_client  = get_post_meta( $post->ID, 'xamin_portfolio_client', true); ?>
                            <?php $xamin_portfolio_website  = get_post_meta( $post->ID, 'xamin_portfolio_website', true); ?>
                            <?php $portfolio_data  = get_post_meta( $post->ID, 'portfolio_data', true); ?>

                            <?php if($xamin_portfolio_client) { ?>
                            <li class="list-inline-item">
                                <span class="lead"><?php echo esc_html__("Client :","xamin"); ?></span>
                                <span><?php echo esc_html($xamin_portfolio_client); ?></span>
                            </li>
                            <?php } ?>

                            <li class="list-inline-item">
                            <span class="lead"><?php echo esc_html__("Category :","xamin"); ?></span> 
                            <?php 
                            $args = array(  'post_type' => 'portfolio',
                                            'taxonomy' => 'portfolio-categories',
                                            'orderby' => 'name',
                                            'order'   => 'ASC'
                                        );
                            $postcat = wp_get_post_terms(get_the_ID(), 'portfolio-categories');
                            foreach($postcat as $cat) {     
                            ?>
                            <span><?php echo esc_html($cat->name); ?></span>
                            <?php } ?>
                            </li>

                            <?php if($xamin_portfolio_website) { ?>
                            <li class="list-inline-item">
                                <span class="lead"><?php echo esc_html__("Website :","xamin"); ?></span>
                                <span><a href="<?php echo esc_html($xamin_portfolio_website); ?>" target="_blank"><?php echo esc_html($xamin_portfolio_website); ?></a>
                                </span>
                            </li>
                            <?php } ?>

                            <?php if($portfolio_data) { ?>
                            <li class="list-inline-item">
                                <span class="lead"><?php echo esc_html__("Date :","xamin"); ?></span>
                                <span><?php echo esc_html($portfolio_data); ?></span>
                            </li>
                            <?php } ?>
                        </ul>
                        <?php
                        if(isset($xamin_option['display_social_share']))
                        {
                            $options = $xamin_option['display_social_share'];
                            if($options == "yes"){
                        ?>
                        <ul class="list-inline mb-0 social-media">
                            <?php if(!empty($xamin_option['social_share_title']))
                            { 
                            $dtitle = $xamin_option['social_share_title']; 
                            ?>
                            <li class="list-inline-item">	
                                <h6><?php echo esc_attr($dtitle,'xamin'); ?>:</h6>
                            </li>
                            <?php
                            }
                            ?>
                            <?php 
                            $options = $xamin_option['fb_shar'];
                            if($options == "yes")
                            { 
                            ?>
                            <li class="list-inline-item">
                                <a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" target="_blank"><i class="fab fa-facebook-square"></i></a>
                            </li>
                            <?php
                            }
                            ?>

                            <?php 
                            $options = $xamin_option['twitter_shar'];
                            if($options == "yes")
                            { 
                            ?>
                            <li class="list-inline-item">
                                <a href="http://twitter.com/intent/tweet?text=<?php the_title(); ?>&<?php the_permalink(); ?>" target="_blank"><i class="fab fa-twitter"></i></a>
                            </li>
                            <?php
                            }
                            ?>

                            <?php 
                            $options = $xamin_option['google_shar'];
                            if($options == "yes")
                            { 
                            ?>
                            <li class="list-inline-item">
                                <a href="https://plus.google.com/share?url=<?php the_title(); ?>&text=<?php the_excerpt(); ?>" target="_blank"><i class="fab fa-google-plus-g"></i></a>
                            </li>
                            <?php
                            }
                            ?>

                            <?php 
                            $options = $xamin_option['linkedin_shar'];
                            if($options == "yes")
                            { 
                            ?>
                            <li class="list-inline-item">
                                <a href="https://www.linkedin.com/shareArticle?mini=true&url=<?php the_permalink(); ?>&title=<?php the_title(); ?>&summary=<?php the_excerpt(); ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                            </li>
                            <?php
                            }
                            ?>

                            <?php 
                            $options = $xamin_option['pinterest_shar'];
                            if($options == "yes")
                            { 
                            ?>
                            <li class="list-inline-item">
                                <a href="http://pinterest.com/pin/create/button/?url=<?php the_permalink(); ?>" target="_blank"><i class="fab fa-pinterest"></i></a>
                            </li>
                            <?php
                            }
                            ?>
                        </ul>
                        <?php
						    }
					    }
					    ?>
                </div>
            </div>
            
        </div>
        <?php
    }
}
?>

<?php the_content(); ?>

<?php
if(isset($xamin_option['xamin_recent_portfolio']))
{	
    $options = $xamin_option['xamin_recent_portfolio'];
    if($options == "yes"){ ?>
    <div class="overview-block-ptb">
        <div class="row">
            <div class="col-sm-12">
                <div class="title-box text-center">
                    <?php 
                    if(!empty($xamin_option['portfolio_title']))
                    { 
                    ?>
                    <h2 class="title subtitle"><?php echo esc_attr($xamin_option['portfolio_title']); ?></h2>
                    <?php
                    }
                    else {
                    ?>
                    <h2 class="title subtitle"><?php esc_html_e('Recent Portfolio', 'xamin'); ?></h2>
                    <?php
                    }
                    ?>
                    <?php
                    if(!empty($xamin_option['portfolio_title_contant']))
                    { 
                    ?>
                    <p class="consul-sub"><?php echo esc_attr($xamin_option['portfolio_title_contant']); ?></p>
                    <?php
                    }
                    else {
                    ?>
                    <p class="consul-sub"><?php esc_html_e('It is a long established fact that a reader will be distracted', 'xamin'); ?></p>
                    <?php
                    }
                    ?>
                </div>
                <div class="owl-carousel" data-items="3" data-items-laptop="3" data-items-tab="2" data-items-mobile="1" data-items-mobile-sm="1"    data-autoplay="true" data-loop="false" data-margin="30">
                    <?php
                    $args = array( 'post_type' => 'portfolio', 'posts_per_page' => 5 );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) : $loop->the_post();
                        $term_list = wp_get_post_terms(get_the_ID(), 'portfolio-categories');
                     foreach($term_list as $term)
                    ?>
                    <div class="iq-masonry-item style-two">
                        <div class="iq-portfolio">
                            <a href="<?php the_permalink(); ?>" class="iq-portfolio-img"><?php the_post_thumbnail(); ?></a>
                            <div class="iq-portfolio-content  text-center">
                                <div class="details-box clearfix">
                                    <div class="consult-details">
                                        <a href="<?php the_permalink(); ?>">
                                        <h4 class="text-hover"><?php the_title(); ?></h4>
                                        </a>
                                        <p class="mb-0"><?php echo esc_html($term->name); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    endwhile;
                    ?>
                </div>
            </div>
        </div>
    </div>
<?php
    }
}
?>
