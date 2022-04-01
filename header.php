<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
<meta name="format-detection" content="telephone=no" />
<link rel="icon" type="image/png" href="<?php bloginfo('template_directory'); ?>/assets/img/favicon.png">
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/gsap.min.js"></script>
<?php wp_head(); ?>

</head>

<body>
  
  <div id="main_wrapper">

    <div class="pg-wrap">
      <div class="inner-wrap">

        <div class="bg-lines"></div>

        <div class="header">
          <div class="hdr clearfix">

            <div class="logo">
              <?php
                $custom_logo_id = get_theme_mod( 'custom_logo' );
                $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
 
                if ( has_custom_logo() ) {
                  echo '<img class="desk" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '"/>';
                } 

              ?>

              <img class="mob" src="<?php bloginfo('template_directory'); ?>/assets/img/logo-img.png" />

            </div>

            <div class="menu-wrap">
              <div class="search">
                <a href="#" class="fas fa-search"></a>
              </div>

              <div class="burger-icon"> 
                <span class="bbar-top"></span> 
                <span class="bbar-mid"></span> 
                <span class="bbar-bot"></span> 
              </div>
            </div>

          </div>
        </div>


    


