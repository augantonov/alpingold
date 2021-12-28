<?php
use Drupal\Core\Extension\Extension;
use Drupal\Core\Extension\ExtensionDiscovery;

use Drupal\system\Controller\ThemeController;
use Drupal\Core\Theme\ThemeManagerInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Implementation of hook_form_system_theme_settings_alter()
 *
 * @param $form
 *   Nested array of form elements that comprise the form.
 *
 * @param $form_state
 *   A keyed array containing the current state of the form.
 */
function drupalet_alpins_form_system_theme_settings_alter(&$form, &$form_state) {
  $form['#attached']['library'][] = 'drupalet_alpins/drupalet-alpins-admin';  
  // Get the build info for the form
  $build_info = $form_state->getBuildInfo();
  // Get the theme name we are editing
  $theme = \Drupal::theme()->getActiveTheme()->getName();
  // Create Omega Settings Object

  $form['core'] = array(
    '#type' => 'vertical_tabs',
    '#attributes' => array('class' => array('entity-meta')),
    '#weight' => -899
  );

  $form['theme_settings']['#group'] = 'core';
  $form['logo']['#group'] = 'core';
  $form['favicon']['#group'] = 'core';

  $form['theme_settings']['#open'] = FALSE;
  $form['logo']['#open'] = FALSE;
  $form['favicon']['#open'] = FALSE;
  
  // Custom settings in Vertical Tabs container
  $form['options'] = array(
    '#type' => 'vertical_tabs',
    '#attributes' => array('class' => array('entity-meta')),
    '#weight' => -999,
    '#default_tab' => 'edit-variables',
    '#states' => array(
      'invisible' => array(
       ':input[name="force_subtheme_creation"]' => array('checked' => TRUE),
      ),
    ),
  );


  /* ---------- Setting Logo -------------- */
  $form['custom_logo'] = array(
    '#type' => 'details',
    '#attributes' => array(),
    '#title' => t('Logo options'),
    '#weight' => -999,
    '#group' => 'options',
    '#open' => FALSE,
  );

  $form['custom_logo']['logo_width'] = array(
    '#type' => 'textfield',
    '#title' => t('Width logo'),
    '#default_value' => theme_get_setting('logo_width') ? theme_get_setting('logo_width'): '160px',
    '#group' => 'custom_logo',
    '#description' => 'Set width of logo, example: 160px'
  ); 
   $form['custom_logo']['logo_height'] = array(
    '#type' => 'textfield',
    '#title' => t('Height logo'),
    '#default_value' => theme_get_setting('logo_height') ? theme_get_setting('logo_height'): '67px',
    '#group' => 'custom_logo',
    '#description' => 'Set height of logo, example: 67px'
  ); 

  $form['custom_logo']['logo_margin'] = array(
    '#type' => 'textfield',
    '#title' => t('Margin Logo'),
    '#default_value' => theme_get_setting('logo_margin') ? theme_get_setting('logo_margin'): '0px 0px 0px 0px',
    '#group' => 'custom_logo',
    '#description' => 'Set space bottom of logo, example: 5px 0px 5px 0px (top-right-bottom-left)'
  );  

  /* --------- Setting general ----------------*/
  $form['general'] = array(
    '#type' => 'details',
    '#attributes' => array(),
    '#title' => t('Gerenal options'),
    '#weight' => -999,
    '#group' => 'options',
    '#open' => FALSE,
  );

  
  
 /* $form['general']['site_layout'] = array(
    '#type' => 'select',
    '#title' => t('Body Layout'),
    '#default_value' => theme_get_setting('site_layout'),
    '#options' => array(
      'wide' => t('Wide (default)'),
      'boxed' => t('Boxed'),
    ),
  );*/
	$form['general']['customize_css'] = array(
    '#type' => 'textarea',
    '#title' => t('Customize css'),
    '#group' => 'general',
    '#attributes' => array('class' => array('code_css') ),
    '#default_value' => theme_get_setting('customize_css'),
	'#description' => 'Example: .your_class{ color:#FF000;}'
  );
  $form['general']['customize_js'] = array(
    '#type' => 'textarea',
    '#title' => t('Customize JS'),
    '#group' => 'general',
    '#attributes' => array('class' => array('code_js') ),
    '#default_value' => theme_get_setting('customize_js'),
	'#description' => 'Example: function site_search(){}'
  );
  
  $form['general']['google_key'] = array(
    '#type' => 'textfield',
    '#title' => t('Google Key'),
    '#default_value' => theme_get_setting('google_key'),
    '#group' => 'general',
  );

  /*--------- Setting Header ------------ */
  $form['header'] = array(
    '#type' => 'details',
    '#attributes' => array(),
    '#title' => t('Header options'),
    '#weight' => -998,
    '#group' => 'options',
    '#open' => FALSE,
  );

$form['header']['header_sticky'] = array(
    '#type' => 'select',
    '#title' => t('Header Menu Sticky'),
    '#default_value' => theme_get_setting('header_sticky'),
    '#options' => array(
	  'sticky' => t('Sticky'),
	  
    ),
  );
 $form['header']['header_bg_image'] = array(
    '#type' => 'textfield',
    '#title' => t('Background Image Header Default'),
    '#default_value' => theme_get_setting('header_bg_image'),
    '#group' => 'header',
  );
  
/*--------- Setting Footer ------------ */
  $form['footer'] = array(
    '#type' => 'details',
    '#attributes' => array(),
    '#title' => t('Footer options'),
    '#weight' => -998,
    '#group' => 'options',
    '#open' => FALSE,
  );

	$form['footer']['footer_style'] = array(
    '#type' => 'select',
    '#title' => t('Footer Style'),
    '#default_value' => theme_get_setting('footer_style'),
    '#options' => array(
	  'classic' => t('Classic'),
	 
    ),
  );


  $form['actions']['submit']['#value'] = t('Save configuration');
} 