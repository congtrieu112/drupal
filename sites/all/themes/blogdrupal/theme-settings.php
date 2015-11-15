<?php

/*
 * setting template
 * social media
 */

function blogdrupal_form_system_theme_settings_alter(&$form, $form_state) {
    $form['social'] = array(
      '#type' => 'fieldset',
      '#title' => 'socail setting',
      '#collapsible' => TRUE,
      '#collapsed' => FALSE,
    );
    $form['social']['social_display'] = array(
      '#type' => 'checkbox',
      '#title' => t('show or hide social'),
      '#description' => t('social show '),
      '#default_value' => theme_get_setting('social_display'),
    );
    $form['social']['facebook_url'] = array(
      '#type' => 'textfield',
      '#title' => t('facebook'),
      '#default_value' => theme_get_setting('facebook_url'),
      '#description' => t("Place this text in the widget spot on your site."),
    );
     $form['social']['google_url'] = array(
      '#type' => 'textfield',
      '#title' => t('google'),
      '#default_value' => theme_get_setting('google_url'),
      '#description' => t("Place this text in the widget spot on your site."),
    );
      $form['social']['twitter_url'] = array(
      '#type' => 'textfield',
      '#title' => t('twitter'),
      '#default_value' => theme_get_setting('twitter_url'),
      '#description' => t("Place this text in the widget spot on your site."),
    );
}
?>

