<?php

function mimemail_enhancer_theme_theme() {
  return [
    'mimemail_enhancer_message' => [
      'variables' => [
        'module' => NULL,
        'key' => NULL,
        'plain' => FALSE,
        'message' => NULL,
      ],
      'template' => 'mimemail-enhancer-message',
      'pattern' => 'mimemail_enhancer_message__',
      'file' => 'mimemail_enhancer.theme.inc',
      'mail theme' => TRUE,
      'path' => drupal_get_path('module', 'mimemail_enhancer') . '/theme',
    ]
  ];
}

/**
 * Preprocess function for theme('mimemail_enhancer_message')
 * @note: theme_hook_suggestions array is checked backwards
 *
 * @see mimemail_enhancer-message.tpl.php
 */
function template_preprocess_mimemail_enhancer_message(&$variables) {
   // Process identifiers to be proper CSS classes.
  $variables['module'] = str_replace('_', '-', $variables['module']);
  $variables['key'] = str_replace('_', '-', $variables['key']);
}
