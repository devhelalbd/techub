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
     register_nav_menus(
          array(
               'main-menu' => __('Main Menu','techub'),
               'primary-menu' => __('Primary Menu','techub'),
               'footer-menu' => __('Footer Menu','techub'),

          )
          );

     // add_theme_support('widgets-block-editor');

     // add_theme_support('woocommerce');

     // add_theme_support('wc-product-gallery-lightbox');

     // add_theme_support('wc-product-gallery-slider');
}

add_action( 'after_setup_theme', 'techub_theme_support' );


include_once('inc/common/scripts.php');
include_once('inc/template-function.php');
include_once('inc/nav-walker.php');
if (class_exists('Kirki')){

     include_once('inc/techub-kirki.php');
}

