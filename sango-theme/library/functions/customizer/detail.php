<?php
/*********************
 * 詳細設定
 *********************/
$wp_customize->add_section('other_options', array(
  'title' => '⚙️ 詳細設定',
  'priority' => 60,
));
$wp_customize->add_setting('insert_tag_tohead', array(
  'type' => 'option',
  'transport' => 'postMessage',
  'sanitize_callback' => 'sng_skip_sanitize',
));
$wp_customize->add_control('insert_tag_tohead', array(
  'settings' => 'insert_tag_tohead',
  'label' => 'headタグ内にコードを挿入',
  'description' => 'head内に挿入したいタグがある場合はこちらに入力します。全ページのhead内にそのまま挿入されることにご注意ください。',
  'section' => 'other_options',
  'type' => 'textarea',
));
$wp_customize->add_setting('use_fontawesome4', array(
  'type' => 'option',
  'transport' => 'postMessage',
  'sanitize_callback' => 'sng_slug_sanitize_checkbox',
));
$wp_customize->add_control('use_fontawesome4', array(
  'settings' => 'use_fontawesome4',
  'label' => 'FontAwesome4.7を使用する',
  'description' => '<small>すでにFontAwesome4のアイコンを使用しており、コードを5へと書き換えることができない場合はチェックを入れてください。</small>',
  'section' => 'other_options',
  'type' => 'checkbox',
));
$wp_customize->add_setting('fontawesome5_ver_num', array(
  'type' => 'option',
  'transport' => 'postMessage',
  'sanitize_callback' => 'wp_filter_nohtml_kses',
));
$wp_customize->add_control('fontawesome5_ver_num', array(
  'settings' => 'fontawesome5_ver_num',
  'description' => '使用するFontAwesome5のバージョン番号<br><small>「5.8.1」のように、数字と「.」だけで指定します。空欄の場合バージョン5.7.2が使用されます。「FontAwesome4.7を使用する」にチェックが入っている場合は入力しても無視されます。</small>',
  'input_attrs' => array('placeholder' => '5.7.2'),
  'section' => 'other_options',
  'type' => 'text',
));
$wp_customize->add_setting('no_eyecatch', array(
  'type' => 'option',
  'transport' => 'postMessage',
  'sanitize_callback' => 'sng_slug_sanitize_checkbox',
));
$wp_customize->add_control('no_eyecatch', array(
  'settings' => 'no_eyecatch',
  'label' => '投稿のタイトル下にアイキャッチ画像を表示しない',
  'section' => 'other_options',
  'type' => 'checkbox',
));
$wp_customize->add_setting('no_eyecatch_on_page', array(
  'type' => 'option',
  'transport' => 'postMessage',
  'sanitize_callback' => 'sng_slug_sanitize_checkbox',
));
$wp_customize->add_control('no_eyecatch_on_page', array(
  'settings' => 'no_eyecatch_on_page',
  'label' => '固定ページのタイトル下にアイキャッチ画像を表示しない',
  'section' => 'other_options',
  'type' => 'checkbox',
));
$wp_customize->add_setting('no_sidebar_mobile', array(
  'type' => 'option',
  'transport' => 'postMessage',
  'sanitize_callback' => 'sng_slug_sanitize_checkbox',
));
$wp_customize->add_control('no_sidebar_mobile', array(
  'settings' => 'no_sidebar_mobile',
  'label' => 'スマホ/タブレットではサイドバーを非表示にする',
  'description' => '<small>投稿/固定ページでサイドバーが非表示になります。</small>',
  'section' => 'other_options',
  'type' => 'checkbox',
));
$wp_customize->add_setting('no_header_search', array(
  'type' => 'option',
  'transport' => 'postMessage',
  'sanitize_callback' => 'sng_slug_sanitize_checkbox',
));
$wp_customize->add_control('no_header_search', array(
  'settings' => 'no_header_search',
  'label' => 'モバイルのヘッダー検索ボタンを非表示にする',
  'section' => 'other_options',
  'type' => 'checkbox',
));
$wp_customize->add_setting('disable_emoji_js', array(
  'type' => 'option',
  'transport' => 'postMessage',
  'sanitize_callback' => 'sng_slug_sanitize_checkbox',
));
$wp_customize->add_control('disable_emoji_js', array(
  'settings' => 'disable_emoji_js',
  'label' => '絵文字用のJSを読み込まない',
  'description' => '<small>WordPressの初期設定では絵文字を使用するためのJavascriptが読み込まれます。サイト内で絵文字を使わない場合にはチェックを入れましょう。</small>',
  'section' => 'other_options',
  'type' => 'checkbox',
));
$wp_customize->add_setting('never_wpautop', array(
  'type' => 'option',
  'transport' => 'postMessage',
  'sanitize_callback' => 'sng_slug_sanitize_checkbox',
));
$wp_customize->add_control('never_wpautop', array(
  'settings' => 'never_wpautop',
  'label' => '【非推奨】自動整形をオフにする（Classic Editor）',
  'description' => '<small>WordPressデフォルトの自動整形を無効化します。WordPressの更新に伴い問題が生じる可能性があるため利用を推奨しません。</small>',
  'section' => 'other_options',
  'type' => 'checkbox',
));
$wp_customize->add_setting('remove_pubdate', array(
  'type' => 'option',
  'transport' => 'postMessage',
  'sanitize_callback' => 'sng_slug_sanitize_checkbox',
));
$wp_customize->add_control('remove_pubdate', array(
  'settings' => 'remove_pubdate',
  'label' => '日付を非表示にする',
  'description' => '<small>記事一覧上/投稿ページ上の日付を非表示にします。特に理由がない限りチェックをつける必要はありません。</small>',
  'section' => 'other_options',
  'type' => 'checkbox',
));
$wp_customize->add_setting('show_only_mod_date', array(
  'type' => 'option',
  'transport' => 'postMessage',
  'sanitize_callback' => 'sng_slug_sanitize_checkbox',
));
$wp_customize->add_control('show_only_mod_date', array(
  'settings' => 'show_only_mod_date',
  'label' => '更新された投稿では更新日のみを表示する',
  'section' => 'other_options',
  'type' => 'checkbox',
));
$wp_customize->add_setting('new_mark_date', array(
  'type' => 'option',
  'transport' => 'postMessage',
  'default' => 3,
  'sanitize_callback' => 'absint',
));
$wp_customize->add_control('new_mark_date', array(
  'settings' => 'new_mark_date',
  'label' => '何日前の記事までNEWマークをつけるか',
  'description' => '<small>例えば「2」にすると、2日前以降に公開された記事に一覧ページでNEWがつきます。デフォルトは「3」。表示しない場合は0にします。</small>',
  'section' => 'other_options',
  'type' => 'number',
));
$wp_customize->add_setting('say_image_upload', array(
  'type' => 'option',
  'sanitize_callback' => 'sng_slug_sanitize_file',
));
if (class_exists('WP_Customize_Image_Control')):
  $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'say_image_upload', array(
    'settings' => 'say_image_upload',
    'label' => '吹き出しショートコードのデフォルト設定',
    'description' => '<small>吹き出しのショートコードでimg="~"を指定しなかった場合に、こちらで登録した画像が使用されます。</small>',
    'section' => 'other_options',
  )));
endif;
$wp_customize->add_setting('say_name', array(
  'type' => 'option',
  'transport' => 'postMessage',
  'sanitize_callback' => 'wp_filter_nohtml_kses',
));
$wp_customize->add_control('say_name', array(
  'settings' => 'say_name',
  'description' => 'デフォルトの吹き出しアイコン画像下の名前',
  'input_attrs' => array('placeholder' => '表示しない場合は空欄に'),
  'section' => 'other_options',
  'type' => 'text',
));
