<?php
//子テーマのCSSの読み込み
add_action( 'wp_enqueue_scripts', 'enqueue_my_child_styles' );
function enqueue_my_child_styles() {
  wp_enqueue_style( 'child-style', 
  	get_stylesheet_directory_uri() . '/style.css', 
  	array('sng-stylesheet','sng-option')
	);
}
add_action( 'after_setup_theme', 'enqueue_my_child_gutenberg_styles' );
function enqueue_my_child_gutenberg_styles() {
  add_theme_support( 'editor-styles' );
  add_editor_style( 'my-gutenberg.css' );
}
  
/************************
 *functions.phpへの追記は以下に
 *************************/




/************************
 *functions.phpへの追記はこの上に
 *************************/