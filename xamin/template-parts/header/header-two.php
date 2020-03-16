<?php
/**
* Displays header widgets if assigned
*
* @package WordPress
* @subpackage xamin
* @since 1.0
* @version 1.0
*/
$xamin_option = get_option('xamin_options');
?>
<header class="style-one style-two" id="main-header">
      <?php
      if(isset($xamin_option['email_and_button']))
      {
        $options = $xamin_option['email_and_button'];
        if($options == "yes")
        {
        ?>
        <div class="container-fluid sub-header">
          <div class="row">
            <div class="col-auto">
              <?php
              if(!empty($xamin_option['header_display_contact']))
              {
                $options = $xamin_option['header_display_contact'];
                if($options == "yes")
                {
              ?>
                  <div class="number-info">
                    <ul class="list-inline">
                        <?php
                        if(!empty($xamin_option['header_email']))
                        {
                        ?>
                        <li class="list-inline-item"><a href="mailto:<?php echo esc_html($xamin_option['header_email']); ?>">
                        <i class="fa fa-envelope"></i><?php echo esc_attr($xamin_option['header_email']); ?></a></li>
                        <?php } ?>
                        <?php if(!empty($xamin_option['header_phone']))
                        {
                        ?>
                        <li class="list-inline-item"><a href="tel:<?php echo str_replace(str_split('(),-" '), '',$xamin_option['header_phone']); ?>">
                        <i class="fa fa-phone"></i><?php echo esc_attr($xamin_option['header_phone']); ?></a></li>
                        <?php } ?>
                    </ul>
                  </div>

              <?php
                }
              }
              ?>
            </div>
            <div class="col-auto col-auto ml-auto sub-main">
              <?php
              $xamin_option = get_option('xamin_options');
              if(isset($xamin_option['xamin_header_social_media']))
              {
                $options = $xamin_option['xamin_header_social_media'];
                if($options == "yes"){ ?>
                  <div class="social-icone">
                    <?php $data = $xamin_option['social-media-iq']; ?>
                    <ul class="list-inline">
                      <?php
                      foreach ($data as $key=>$options )
                      {
                        if($options) {
                          echo '<li class="d-inline"><a href="'.$options.'"><i class="fa fa-'.$key.'"></i></a></li>';
                        }
                      } ?>
                    </ul>
                  </div>
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
      <div class="container-fluid main-header">
        <div class="row">
          <div class="col-sm-12">
            <nav class="navbar navbar-expand-lg navbar-light">
            <?php
            if($xamin_option['header_radio'] == 1)
            {
            ?>
             <a href="<?php  echo esc_url( home_url( '/' ) ); ?>">
             <?php
              if(!empty($xamin_option['header_text']))
              {
              ?>
              <h1 class="logo-text"><?php echo esc_attr($xamin_option['header_text']); ?></h1>
              <?php
              }
              ?>
             </a>
            <?php
            }
            else
            {
            ?>
               <a class="navbar-brand" href="<?php  echo esc_url( home_url( '/' ) ); ?>">
                <?php
                if(isset($xamin_option['xamin_logo']['url']))
                {
                  $logo = $xamin_option['xamin_logo']['url'];
                ?>
                  <img class="img-fluid logo" src="<?php echo esc_url($logo); ?>" alt="<?php  esc_attr_e( 'xamin', 'xamin' ); ?>">
                <?php
                }
                else
                {
                ?>
                  <img class="img-fluid logo" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="<?php  esc_attr_e( 'xamin', 'xamin' ); ?>">
                <?php } ?>
              </a>
            <?php
            }
            ?>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"><i class="ion-navicon"></i></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <?php if ( has_nav_menu( 'top' ) ) : ?>
											<?php wp_nav_menu( array(
												'theme_location' => 'top',
                        'menu_class'     => 'navbar-nav ml-auto',
                        'menu_id'        => 'top-menu',
                        'container_id'   => 'iq-menu-container',
											) ); ?>
                <?php endif; ?>
              </div>
              <div class="sub-main">
                <?php
                if(isset($xamin_option['header_display_button']))
                {
                $options = $xamin_option['header_display_button'];
                if($options == "yes")
                {
                ?>
                  <nav aria-label="breadcrumb">
                    <?php if((!empty($xamin_option['xamin_download_link'])) && (!empty($xamin_option['xamin_download_title'])))
                    {
                        $dlink = $xamin_option['xamin_download_link'];
                        $dtitle = $xamin_option['xamin_download_title'];
                    ?>
                    <div class="blue-btn button"><a href="<?php echo esc_url($dlink,'xamin'); ?>"><?php echo esc_attr($dtitle,'xamin'); ?></a></div>
                    <?php } ?>
                  </nav>
                  <?php
                  }
                }
                ?>
              </div>
            </nav>
          </div>
        </div>
      </div>
</header>
