<?php

/**
 * Implements hook_css_alter().
 */
function spruit_css_alter(&$css) {

  /**
   * If stylesheets from core or modules cause trouble in your theme add the path to spruit.info 
   * before you start overriding classes
   */
  $stylesheets = theme_get_setting('unset_styles');
  foreach($stylesheets as $path) {
    unset($css[$path]);
  }

 // Do not load CSS as @import rules
 foreach ($css as $key => $value) { $css[$key]['preprocess'] = FALSE; }
}

/**
 * Implements template_preprocess_page().
 */
function spruit_preprocess_page(&$variables) {
  /**
   * Templates for content type pages
   * page--type-name.tpl.php
   */
  if (isset($variables['node']->type)) {
    $variables['theme_hook_suggestions'][]='page__'.$variables['node']->type;
  }
}

/**
 * Implements template_preprocess_block().
 */
function spruit_preprocess_block(&$variables) {
  $variables['title_attributes_array']['class'][] = 'title';
}

/**
 * Implements theme_status_messages().
 */
function spruit_status_messages($variables) {
  $display = drupal_get_messages($variables['display']);
  $output = array();

  if($display) {
    $output[]= '<section class="messages">';

    foreach ($display as $type => $messages) {
      $output[] = "<div class=\"message $type\">";

      if (count($messages) > 1) {
        $output[] = "<ul>";
        foreach ($messages as $message) {
          $output[] = '<li>' . $message . "</li>";
        }
        $output[] = "</ul>";
      } else {
        $output[] = $messages[0];
      }
      $output[] = "</div>";
    }
    $output[]= '</section>';
  }
  return implode("\n", $output);
}

/**
 * Implements theme_breadcrumb().
 */
function spruit_breadcrumb($variables) {
  $breadcrumb = $variables['breadcrumb'];
  $crumbs = '';

  if (!empty($breadcrumb)) {
      $crumbs .= '<ul>';
      foreach($breadcrumb as $value) {
        $crumbs .= '<li>'.$value.'</li>';
      }
      $crumbs .= '</ul>';
    }
  return $crumbs;
}

/**
 * Implements theme_menu_local_tasks().
 */
function spruit_menu_local_tasks(&$variables){
  $output = '';

  if (!empty($variables['primary'])) {
    $variables['primary']['#prefix'] = '<ul class="primary">';
    $variables['primary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['primary']);
  }
  if (!empty($variables['secondary'])) {
    $variables['secondary']['#prefix'] = '<ul class="secondary">';
    $variables['secondary']['#suffix'] = '</ul>';
    $output .= drupal_render($variables['secondary']);
  }
  if(!empty($output)) {
    $output = '<nav class="tabs">'.$output.'</nav>';
  }
  return $output;
}
