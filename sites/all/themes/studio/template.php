<?php

/**
 * Implements hook_preprocess_page().
 */
function studio_preprocess_page(&$vars)
{
  $vars['logo_inverted'] = '/sites/all/themes/studio/logo_i.png';
}
