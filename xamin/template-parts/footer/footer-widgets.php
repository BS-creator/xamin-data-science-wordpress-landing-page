<?php
/**
* Displays footer widgets if assigned
*
* @package WordPress
* @subpackage xamin
* @since 1.0
* @version 1.0
*/
?>
<?php
if( class_exists( 'ReduxFramework' ) )
{ 
    $xamin_option = get_option('xamin_options');
    if(!empty($xamin_option['xamin_footer_top']))
    { 
        $options = $xamin_option['xamin_footer_top']; 
        if($options == "yes"){ ?>
    <?php
    if ( is_active_sidebar( 'footer_1_sidebar' ) ||
    is_active_sidebar( 'footer_2_sidebar' )  ||
    is_active_sidebar( 'footer_3_sidebar' )  ||
    is_active_sidebar( 'footer_4_sidebar' )  ||
    is_active_sidebar( 'footer_5_sidebar' )  ) :
    ?>
    <!-- Address -->
    <div class="footer-top">
        <div class="row">
            <?php
                $xamin_options = get_option('xamin_options');
                $options= $xamin_options['xamin_footer_width'];

                if($options == 1)
                {
                    if( is_active_sidebar( 'footer_1_sidebar' ) ) { ?>
                        <div class="col-lg-12 col-md-6 col-sm-6 ">
                            <?php dynamic_sidebar( 'footer_1_sidebar' ); ?>
                        </div>
                    <?php  }
                }

                if($options == 2)
                {
                    if( is_active_sidebar( 'footer_1_sidebar' ) ) { ?>
                        <div class="col-lg-6 col-md-6 col-sm-6 ">
                            <?php dynamic_sidebar( 'footer_1_sidebar' ); ?>
                        </div>
                    <?php   }
                    if( is_active_sidebar( 'footer_2_sidebar' ) ) { ?>
                        <div class="col-lg-6 col-md-6 col-sm-6 ">
                            <?php dynamic_sidebar( 'footer_2_sidebar' ); ?>
                        </div>
                    <?php }
                }

                if($options == 3)
                {
                    if( is_active_sidebar( 'footer_1_sidebar' ) ) { ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 ">
                            <?php dynamic_sidebar( 'footer_1_sidebar' ); ?>
                        </div>
                    <?php   }
                    if( is_active_sidebar( 'footer_2_sidebar' ) ) { ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 mt-4 mt-lg-0 mt-md-0">
                            <?php dynamic_sidebar( 'footer_2_sidebar' ); ?>
                        </div>
                    <?php }
                    if( is_active_sidebar( 'footer_3_sidebar' ) ) { ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 mt-lg-0 mt-md-5 mt-4">
                            <?php dynamic_sidebar( 'footer_3_sidebar' ); ?>
                        </div>
                    <?php }
                }

                if($options == 4)
                { 
                    if( is_active_sidebar( 'footer_1_sidebar' ) ) { ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 ">
                            <?php dynamic_sidebar( 'footer_1_sidebar' ); ?>
                        </div>
                    <?php   }
                    if( is_active_sidebar( 'footer_2_sidebar' ) ) { ?>
                        <div class="col-lg-2 col-md-6 col-sm-6 mt-4 mt-lg-0 mt-md-0">
                            <?php dynamic_sidebar( 'footer_2_sidebar' ); ?>
                        </div>
                    <?php }
                    if( is_active_sidebar( 'footer_3_sidebar' ) ) { ?>
                        <div class="col-lg-2 col-md-6 col-sm-6 mt-lg-0 mt-4">
                            <?php dynamic_sidebar( 'footer_3_sidebar' ); ?>
                        </div>
                    <?php }
                    if( is_active_sidebar( 'footer_4_sidebar' ) ) { ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 mt-lg-0 mt-4">
                            <?php dynamic_sidebar( 'footer_4_sidebar' ); ?>
                        </div>
                    <?php }
                }

                if($options == 5)
                { 
                    if( is_active_sidebar( 'footer_1_sidebar' ) ) { ?>
                         <div class="col-lg-12 col-md-12 col-sm-12 footer_top_block">
                        <?php dynamic_sidebar( 'footer_1_sidebar' ); ?>
                         </div>
                    <?php   }
                    if( is_active_sidebar( 'footer_2_sidebar' ) ) { ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <?php dynamic_sidebar( 'footer_2_sidebar' ); ?>
                        </div>
                    <?php   }
                    if( is_active_sidebar( 'footer_3_sidebar' ) ) { ?>
                        <div class="col-lg-2 col-md-6 col-sm-6 mt-4 mt-lg-0 mt-md-0">
                            <?php dynamic_sidebar( 'footer_3_sidebar' ); ?>
                        </div>
                    <?php }
                    if( is_active_sidebar( 'footer_4_sidebar' ) ) { ?>
                        <div class="col-lg-2 col-md-6 col-sm-6 mt-lg-0 mt-4">
                            <?php dynamic_sidebar( 'footer_4_sidebar' ); ?>
                        </div>
                    <?php }
                    if( is_active_sidebar( 'footer_5_sidebar' ) ) { ?>
                        <div class="col-lg-2 col-md-6 col-sm-6 mt-lg-0 mt-4">
                            <?php dynamic_sidebar( 'footer_5_sidebar' ); ?>
                        </div>
                    <?php }
                     if( is_active_sidebar( 'footer_6_sidebar' ) ) { ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 mt-lg-0 mt-4">
                            <?php dynamic_sidebar( 'footer_6_sidebar' ); ?>
                        </div>
                    <?php }
                }

                if(empty($options))
                {
                    if( is_active_sidebar( 'footer_1_sidebar' ) ) { ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <?php dynamic_sidebar( 'footer_1_sidebar' ); ?>
                        </div>
                    <?php   }
                    if( is_active_sidebar( 'footer_2_sidebar' ) ) { ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <?php dynamic_sidebar( 'footer_2_sidebar' ); ?>
                        </div>
                    <?php }
                    if( is_active_sidebar( 'footer_3_sidebar' ) ) { ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <?php dynamic_sidebar( 'footer_3_sidebar' ); ?>
                        </div>
                    <?php }
                    if( is_active_sidebar( 'footer_4_sidebar' ) ) { ?>
                        <div class="col-lg-3 col-md-6 col-sm-6 ">
                            <?php dynamic_sidebar( 'footer_4_sidebar' ); ?>
                        </div>
                    <?php }
                }
            ?>
        </div>
    </div>
    <?php endif; ?>
    <?php
        }
    }
}
else
{ 
if ( is_active_sidebar( 'footer_1_sidebar' ) ||
is_active_sidebar( 'footer_2_sidebar' )  ||
is_active_sidebar( 'footer_3_sidebar' )  ||
is_active_sidebar( 'footer_4_sidebar' )  ) :
?>
<!-- Address -->
<div class="footer-top">
    <div class="row">

                <?php
                if( is_active_sidebar( 'footer_1_sidebar' ) ) { ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <?php dynamic_sidebar( 'footer_1_sidebar' ); ?>
                    </div>
                <?php   }
                if( is_active_sidebar( 'footer_2_sidebar' ) ) { ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <?php dynamic_sidebar( 'footer_2_sidebar' ); ?>
                    </div>
                <?php }
                if( is_active_sidebar( 'footer_3_sidebar' ) ) { ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <?php dynamic_sidebar( 'footer_3_sidebar' ); ?>
                    </div>
                <?php }
                if( is_active_sidebar( 'footer_4_sidebar' ) ) { ?>
                    <div class="col-lg-3 col-md-6 col-sm-6 ">
                        <?php dynamic_sidebar( 'footer_4_sidebar' ); ?>
                    </div>
                <?php } ?>
            
    </div>
</div>
<?php endif;
}
?>
<!-- Address END -->
