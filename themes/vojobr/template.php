

<?php
function vojobr_links__system_main_menu($variables) {

  $html = '';
  foreach($variables['links'] as $link) {
    $link = l($link['title'], $link['href'], $link);

    // TODO: Determine if menu item is active?
    $html .= '<a>'.$link.'</a>';
  }

  return $html;  
}
?>