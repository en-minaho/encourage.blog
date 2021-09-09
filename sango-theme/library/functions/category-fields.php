<?php 
/*********************
 * 🖍ログインユーザーのみ
 * カテゴリーページへのフィールドの追加/リンクの出力
 *********************/

// カテゴリーページに「カスタムの入力欄」を表示
function sng_add_archive_title($term)
{
  $termid = $term->term_id;
  $taxonomy = $term->taxonomy;
  $term_meta = get_option($taxonomy . '_' . $termid);
  ?>
  <tr class="form-field">
    <th scope="row"><label for="term_meta[category_title]">ページタイトル</label></th>
    <td>
      <textarea name="term_meta[category_title]" id="term_meta[category_title]" rows="1" cols="50" class="large-text"><?php echo isset($term_meta['category_title']) ? esc_attr($term_meta['category_title']) : ''; ?></textarea>
      <p class="description">カテゴリーページのタイトルを入力します。空欄の場合、カテゴリー名がページタイトルとなります。</p>
    </td>
  </tr>
  <tr class="form-field">
    <th scope="row"><label for="term_meta[category_description]">メタデスクリプション</label></th>
    <td>
      <textarea name="term_meta[category_description]" id="term_meta[category_description]" rows="3" cols="50" class="large-text"><?php echo isset($term_meta['category_description']) ? esc_attr($term_meta['category_description']) : ''; ?></textarea>
      <p class="description">カテゴリーページのメタデスクリプションを入力します。検索結果にページの説明文として表示されることがあります。</p>
    </td>
  </tr>
<?php
}
add_action('category_edit_form_fields', 'sng_add_archive_title');

// オリジナルタイトルを保存
function sng_save_archive_title($term_id)
{
  global $taxonomy;
  if (isset($_POST['term_meta'])) {
    $term_meta = get_option($taxonomy . '_' . $term_id);
    $term_keys = array_keys($_POST['term_meta']);
    foreach ($term_keys as $key) {
      if (isset($_POST['term_meta'][$key])) {
        $term_meta[$key] = stripslashes_deep($_POST['term_meta'][$key]);
      }
    }
    update_option($taxonomy . '_' . $term_id, $term_meta);
  }
}
add_action('edited_term', 'sng_save_archive_title'); //値を保存

// アーカイブの説明欄でHTMLタグを使えるように
remove_filter('pre_term_description', 'wp_filter_kses');
