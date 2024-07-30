<?php

/**
 * Implements hook_preprocess_page().
 */
function studio_preprocess_page(&$vars)
{
  $vars['logo_inverted'] = '/sites/all/themes/studio/logo_i.png';

  // только для залогиненых
  if (user_is_logged_in()) {
    $user_menu = module_exists('i18n_menu') ? i18n_menu_translated_tree('user-menu') : menu_tree('user-menu');
    $user_menu['#attributes']['class'] = ['user-menu'];
    $vars['user_nav'] = render($user_menu);
  }
}
