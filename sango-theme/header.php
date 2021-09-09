<!doctype html>
<html <?php language_attributes(); ?>>
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-NQ678LB73N"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-NQ678LB73N');
</script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="HandheldFriendly" content="True">
  <meta name="MobileOptimized" content="320">
  <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
  <meta name="msapplication-TileColor" content="<?php echo get_theme_mod( 'main_color', '#6bb6ff');?>">
  <meta name="theme-color" content="<?php echo get_theme_mod( 'main_color', '#6bb6ff');?>">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
  <?php wp_head(); // 削除禁止 ?>
</head>
<body <?php body_class(); ?>>
  <div id="container">
    <header class="header<?php if(get_option('center_logo_checkbox')) echo ' header--center'; ?>">
      <?php get_template_part('parts/header/nav-drawer'); // headerナビドロワー（モバイル） ?>
      <?php get_template_part('parts/header/inner'); // headerタグの中身 ?>
    </header>
    <?php get_template_part('parts/header/info-bar'); // お知らせ欄 ?>