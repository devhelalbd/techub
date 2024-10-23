<?php 

function techub_theme_support(){

     // post-thumbnails
     add_theme_support('post-thumbnails');

     // automatic-feed-link
     add_theme_support('automatic-feed-links');

     // html support 
     add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption', 'style', 'script' ) );

     // title 
     add_theme_support( 'title-tag' );

     add_theme_support('customize-selection-refresh-widgets');

     // post formate
     add_theme_support('post-formates', array(
          'image',
          'video',
          'audio',
          'gallery',
          'quote'
     ));

     // menu 
     // register_nav_menus(
     //      array(
     //           'main-menu' => __('Main Menu','techub'),
     //           'side-menu' => __('Side Menu','techub'),
     //           'footer-menu' => __('Footer Menu','techub'),

     //      )
     //      );

     // add_theme_support('widgets-block-editor');

     // add_theme_support('woocommerce');

     // add_theme_support('wc-product-gallery-lightbox');

     // add_theme_support('wc-product-gallery-slider');
}

add_action( 'after_setup_theme', 'techub_theme_support' );


function add_theme_scripts() {
     
     wp_enqueue_style( 'animate', get_template_directory_uri() . '/assets/css/animate.css', array(), '1.1', 'all' );
     wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.css', array(), '5.2.3', 'all' );
     wp_enqueue_style( 'flaticon', get_template_directory_uri() . '/assets/css/flaticon.css', array(), '1.0', 'all' );
     wp_enqueue_style( 'font-awesome-pro', get_template_directory_uri() . '/assets/css/font-awesome-pro.css', array(), '6.0.0', 'all' );
     wp_enqueue_style( 'magnific-popup', get_template_directory_uri() . '/assets/css/magnific-popup.css', array(), '1.0', 'all' );
     wp_enqueue_style( 'techub-core', get_template_directory_uri() . '/assets/css/techub-core.css', array(), '1.0', 'all' );
     wp_enqueue_style( 'slick', get_template_directory_uri() . '/assets/css/slick.css', array(), '1.0', 'all' );
     wp_enqueue_style( 'spacing', get_template_directory_uri() . '/assets/css/spacing.css', array(), '1.0', 'all' );
     wp_enqueue_style( 'swiper-bundle', get_template_directory_uri() . '/assets/css/swiper-bundle.css', array(), '1.0', 'all' );
	wp_enqueue_style( 'style', get_stylesheet_uri() );

     // Js
	wp_enqueue_script( 'bootstrap-bundle', get_template_directory_uri() . '/assets/js/bootstrap-bundle.js', array( 'jquery' ), '5.1.3', true );
	wp_enqueue_script( 'countdown', get_template_directory_uri() . '/assets/js/countdown.js', array( 'jquery' ), '1.1', true );
	wp_enqueue_script( 'waypoints', get_template_directory_uri() . '/assets/js/waypoints.js', array( 'jquery' ), '1.1', true );
	wp_enqueue_script( 'isotope-pkgd', get_template_directory_uri() . '/assets/js/isotope-pkgd.js', array( 'imagesloaded' ), '1.1', true );
	wp_enqueue_script( 'jquery.counterup', get_template_directory_uri() . '/assets/js/jquery.counterup.min.js', array( 'jquery-ui-slider' ), '1.1', true );
	wp_enqueue_script( 'magnific-popup', get_template_directory_uri() . '/assets/js/magnific-popup.js', array( 'jquery' ), '1.1', true );
	wp_enqueue_script( 'meanmenu', get_template_directory_uri() . '/assets/js/meanmenu.js', array( 'jquery' ), '1.1', true );
	wp_enqueue_script( 'nice-select', get_template_directory_uri() . '/assets/js/nice-select.js', array( 'jquery' ), '1.1', true );
	wp_enqueue_script( 'parallax', get_template_directory_uri() . '/assets/js/parallax.js', array( 'jquery' ), '1.1', true );
	wp_enqueue_script( 'purecounter', get_template_directory_uri() . '/assets/js/purecounter.js', array( 'jquery' ), '1.1', true );
	wp_enqueue_script( 'purecounter', get_template_directory_uri() . '/assets/js/purecounter.js', array( 'jquery' ), '1.1', true );
	wp_enqueue_script( 'slick', get_template_directory_uri() . '/assets/js/slick.js', array( 'jquery' ), '1.1', true );
	wp_enqueue_script( 'swiper-bundle', get_template_directory_uri() . '/assets/js/swiper-bundle.js', array( 'jquery' ), '1.1', true );
	wp_enqueue_script( 'wow', get_template_directory_uri() . '/assets/js/wow.js', array( 'jquery' ), '1.1', true );
	wp_enqueue_script( 'techub-main', get_template_directory_uri() . '/assets/js/techub-main.js', array( 'jquery' ), '1.1', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

