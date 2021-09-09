<?php
/**
 * このファイルでは各種CSSやJSファイルを読み込むための関数を記載しています。
 * 各種CSS/JS
 * Google Font
 * Font Awesome
 * Classic Editorのスタイル
 * Gutenberg用のスタイルはSANGO Gutenbergプラグインを導入することで読み込まれるようになります。
 */

// 基本的なスタイルの読み込み
add_action('wp_enqueue_scripts', 'sng_basic_scripts_and_styles', 1 );
if (!function_exists('sng_basic_scripts_and_styles')) {
  function sng_basic_scripts_and_styles() {
    if (!is_admin()) {
      $theme_ver = wp_get_theme('sango-theme')->Version;
      // メイン
      wp_enqueue_style(
        'sng-stylesheet',
        get_template_directory_uri() . '/style.css?ver' . $theme_ver,
        array(),
        '',
        'all'
      );
      // 投稿
      wp_enqueue_style(
        'sng-option',
        get_template_directory_uri() . '/entry-option.css?ver' . $theme_ver,
        array('sng-stylesheet'),
        '',
        'all'
      );
      // jQuery
      wp_deregister_script('jquery');
      wp_enqueue_script(
        'jquery',
        'https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js', 
        array(),
        '',
        false
      );
      // コメント用
      if (is_singular() and comments_open() and (get_option('thread_comments') == 1)) {
        wp_enqueue_script('comment-reply');
      }
      // GutenbergのデフォルトCSS読み込み解除オプション
      if (get_option('no_gutenberg_default_style')) {
        wp_deregister_style('wp-block-library');
        wp_dequeue_style('wp-block-library');
      }
    } // endif isAdmin
  } 
}// END sng_basic_scripts_and_styles

function sng_is_selected_font($name) {
  return (get_theme_mod('sng_font_family') == $name);
}

// Google Font
add_action('wp_enqueue_scripts', 'sng_load_google_font', 1 );
if (!function_exists('sng_load_google_font')) {
  function sng_load_google_font() {
    $font_text = "Quicksand:500,700";
    if(sng_is_selected_font("notosansjp")) {
      $font_text .= "|Noto+Sans+JP:400,700";
    } elseif(sng_is_selected_font("mplusrounded1c")) {
      $font_text .= "|M+PLUS+Rounded+1c:400,700";
    }
    wp_enqueue_style(
      'sng-googlefonts',
      'https://fonts.googleapis.com/css?family=' . $font_text . '&display=swap',
      array(),
      '',
      'all'
    );
  }
}

// FontAwesome
function sng_font_awesome_cdn_url() {
  if (get_option('use_fontawesome4')) return 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css';
  $fontawesome5_ver = get_option('fontawesome5_ver_num') ? preg_replace("/( |　)/", "", get_option('fontawesome5_ver_num') ) : '5.11.2';
  return 'https://use.fontawesome.com/releases/v'. $fontawesome5_ver .'/css/all.css';
}

add_action('wp_enqueue_scripts', 'sng_font_awesome', 1 );
if (!function_exists('sng_font_awesome')) {
  function sng_font_awesome() {
    wp_enqueue_style(
      'sng-fontawesome',
      sng_font_awesome_cdn_url(),
      array()
    );
  }
}

/**
 * // FontAwesomeの非同期読み込み
 * add_action('wp_footer', 'sng_async_load_fontawesome');
 * function sng_async_load_fontawesome() {
 *   echo '<script> (function() { var css = document.createElement("link"); css.href = "' . sng_font_awesome_cdn_url() . '"; css.rel = "stylesheet"; css.type = "text/css"; document.getElementsByTagName("head")[0].appendChild(css); })(); </script>';
 * }
 */

// Classic Editor style
add_action( 'admin_init', 'sng_classic_editor_styles' );
if (!function_exists('sng_classic_editor_styles')) {
  function sng_classic_editor_styles() {
    add_editor_style(get_template_directory_uri() . '/library/css/editor-style.css');
    // Font Awesome4.7に対応
    add_editor_style('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
  }
}