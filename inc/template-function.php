<?php

function techub_header_logo(){
     $header_logo = get_theme_mod('header_logo', get_template_directory_uri().'/assets/img/logo/logo.png')
     ?>
          <a href="<?php echo home_url('/'); ?>"><img src="<?php echo esc_url($header_logo); ?>" alt=""></a>
     <?php
}

function techub_header_social(){
     $header_fb_url = get_theme_mod('header_fb_url', __('#','techub'));
     $header_instagram_url = get_theme_mod('header_instagram_url', __('#','techub'));
     $header_twitter_url = get_theme_mod('header_twitter_url', __('#','techub'));
     $header_pinterest_url = get_theme_mod('header_pinterest_url', __('#','techub'));
     ?>
          <?php if(!empty($header_fb_url)) : ?>
          <a href="<?php echo esc_url($header_fb_url); ?>"><i class="fa-brands fa-facebook"></i></a>
          <?php endif; ?>

          <?php if(!empty($header_instagram_url)) : ?>
          <a href="<?php echo esc_url($header_instagram_url); ?>"><i class="fa-brands fa-instagram"></i></a>
          <?php endif; ?>

          <?php if(!empty($header_twitter_url)) : ?>
          <a href="<?php echo esc_url($header_twitter_url); ?>"><i class="fa-brands fa-twitter"></i></a>
          <?php endif; ?>
          
          <?php if(!empty($header_pinterest_url)) : ?>
          <a href="<?php echo esc_url($header_pinterest_url); ?>"><i class="fa-brands fa-pinterest"></i></a>
          <?php endif; ?>

     <?php
}


// techub_menu
function techub_menu(){
     wp_nav_menu( 
         array( 
             'theme_location'  => 'main-menu',
             'menu_class'      => '',
             'menu_id'         => '',
             'container'      => '',
             'fallback_cb'     => 'Techub_Walker_Nav_Menu::fallback',
             'walker'     => new Techub_Walker_Nav_Menu,
         ) 
     ); 
 }



?>