<?php

/**
 * @file
 * Configuration settings page for Mime Mail Enhancer
 */

/**
 * Configuration form.
 */
function mimemail_enhancer_admin_settings() {
  $form = [];

  $form['mimemail_enhancer']['mimemail_enhancer_theme_debug'] = [
    '#type'          => 'checkbox',
    '#default_value' => variable_get('mimemail_enhancer_theme_debug', false),
    '#title'         => t('Enable Theme Debug'),
    '#description'   => t('If set, the mail send process will be interrupted (for the users selected below) just before sending out the mail, so that you can easily adjust your mail templates without having to resend mails on every modification. Make sure you disable this after you have finished.'),
  ];

  $form['mimemail_enhancer']['mimemail_enhancer_debuggers'] = [
    '#type'           => 'select',
    '#multiple'       => true,
    '#default_value'  => variable_get('mimemail_enhancer_debuggers', false),
    '#options'        => _mimemail_enhancer_get_admin_users(),
    '#title'          => t('Theme Debuggers'),
    '#description'    => t('Select the Theme Debuggers - only administrators are listed.'),
    '#attributes'     => [
      'style' => 'min-width:400px;'
    ],
  ];

  return system_settings_form($form);
}

/**
 * @return array
 */
function _mimemail_enhancer_get_admin_users() {
  $answer = [];
  $users = entity_load('user');
  /** @var object $user */
  foreach($users as $user) {
    if(isset($user->roles) && (in_array('administrator', $user->roles) || in_array('master', $user->roles))) {
      $answer[$user->uid] = $user->name;
    }
  }
  return $answer;
}