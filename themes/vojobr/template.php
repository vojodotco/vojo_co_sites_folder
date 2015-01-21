

<?php

//Formatar menu
function vojobr_links__system_main_menu($variables) {

  $html = '';
  foreach($variables['links'] as $link) {
    $link = l($link['title'], $link['href'], $link);

    // TODO: Determine if menu item is active?
    $html .= '<a>'.$link.'</a>';
  }

  return $html;  
}



//formatar campo search

function vojobr_preprocess_search_block_form(&$vars, $hook) {
    // Modify elements of the search form
    unset($vars['form']['search_block_form']['#title']);

    // Set a default value for the search box
  $vars['form']['search_block_form']['#value'] = t('Procure');
    
    // Add a custom class to the search box
    // Set yourtheme.css > #search-block-form .form-text { color: #888888; }
  $vars['form']['search_block_form']['#attributes'] = array(
       'onblur' => "if (this.value == '') {this.value = '".$vars['form']['search_block_form']['#value']."';} this.style.color = '#888888';", 
         'onfocus' => "if (this.value == '".$vars['form']['search_block_form']['#value']."') {this.value = '';} this.style.color = '#000000';" );

    // Modify elements of the submit button
    unset($vars['form']['submit']);

    // Change text on the submit button
    //$vars['form']['submit']['#value'] = t('Go!');

    // Change submit button into image button - NOTE: '#src' leading '/' automatically added
    $vars['form']['submit']['image_button'] = array('#type' => 'image_button', '#src' => base_path() . path_to_theme() . '/images/search-button.png');

    // Rebuild the rendered version (search form only, rest remains unchanged)
  unset($vars['form']['search_block_form']['#printed']);
  $vars['search']['search_block_form'] = drupal_render($vars['form']['search_block_form']);

    // Rebuild the rendered version (submit button, rest remains unchanged)
    unset($vars['form']['submit']['#printed']);
    $vars['search']['submit'] = drupal_render($vars['form']['submit']);
    
    // Collect all form elements to print entire form
  $vars['search_form'] = implode($vars['search']);
}





//formatar campo search
function phptemplate_search_block_form($form) {
  /**
   * This snippet catches the default searchbox and looks for
   * search-block-form.tpl.php file in the same folder
   * which has the new layout.
   */
  return _phptemplate_callback('search-block-form', array('form' => $form));
}
?>