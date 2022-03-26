<?php
function dd($param)
{
  print "<pre>";
  var_dump($param);
  exit;
}


function pagenation($pages = '', $range = 2)
{
  $showitems = ($range * 1) + 1;
  global $paged;
  if (empty($paged)) $paged = 1;
  if ($pages == '') {
    global $wp_query;
    $pages = $wp_query->max_num_pages;
    if (!$pages) {
      $pages = 1;
    }
  }
  if (1 != $pages) {
    // 「前へ」を表示
    if ($paged > 1) echo "<a href='" . get_pagenum_link($paged - 1) . "' class=\"page__arrow\"></a>";
    // ページ番号を出力
    for ($i = 1; $i <= $pages; $i++) {
      if (1 != $pages && (!($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
        echo ($paged == $i) ? "<a class=\"page__number now\">" . $i . "</a>" : // 現在のページの数字はリンク無し
          "<a href='" . get_pagenum_link($i) . "' class=\"page__number\">" . $i . "</a></li>";
      }
    }
    // [...] 表示
    // if(($paged + 4 ) < $pages){
    //     echo "<li class=\"notNumbering\">...</li>";
    //     echo "<li><a href='".get_pagenum_link($pages)."'>".$pages."</a></li>";
    // }
    // 「次へ」を表示
    if ($paged < $pages) echo "<a href='" . get_pagenum_link($paged + 1) . "' class=\"page__arrow next\"></a>";
  }
}

add_filter('wpcf7_form_tag_data_option', 'custom_select_values', 10, 3);
function custom_select_values($values, $options, $args)
{
  if (in_array('AutoMonth', $options)) {
    //$values = range(1, 12);
  }
  return $values;
}
