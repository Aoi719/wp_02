<?php
add_action('init', function () {
  add_theme_support('post-thumbnails');
});

// add_action('widgets_init', function () {
//   register_sidebar(array(
//     'name' => 'サイドバー',
//     'id' => 'sidebar',
//     'description' => 'サイドバーウィジェット',
//     'before_widget' => '<div>',
//     'after_widget' => '</div>',
//     'before_title' => '<h3 class="sidebar__title">',
//     'after_title' => '</h3>'
//   ));
// });

// アイキャッチ画像がなければ標準画像を取得する
function get_eyecatch_with_default()
{
  if (has_post_thumbnail()):
    $id = get_post_thumbnail_id();
    $img = wp_get_attachment_image_src($id, 'large');
  else:
    $img = array(get_template_directory_uri() . '/img/default.png');
  endif;

  return $img;
}

// pagination
function pagination($pages = '', $range = 2)
{
  $showitems = ($range * 2) + 1;

  // 現在のページ
  global $paged;
  if (empty($paged)) {
    $paged = 1;
  }

  // 全ページ数
  if ($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if (!$pages) {
      $pages = 1;
    }
  }

  // 2ページ以上の場合のみページネーションを表示
  if (1 != $pages) {
    echo '<div class="pagination">';
    echo '<ul>';

    // 1ページ目でない場合、「前ページ」リンクを表示
    if ($paged > 1) {
      echo '<li class="prev"><a href="' . esc_url(get_pagenum_link($paged - 1)) . '">前のページ</a></li>';
    }

    // ページ番号
    for ($i = 1; $i <= $pages; $i++) {
      if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
        if ($paged == $i) {
          echo '<li class="active">' . $i . '</li>';
        } else {
          echo '<li><a href="' . esc_url(get_pagenum_link($i)) . '">' . $i . '</a></li>';
        }
      }
    }

    // 最終ページでなければ「次のページ」リンクを表示
    if ($paged < $pages) {
      echo '<li class="next"><a href="' . esc_url(get_pagenum_link($paged + 1)) . '">次のページ</a></li>';
    }
    echo '</ul>';
    echo '</div>';
  }
}
