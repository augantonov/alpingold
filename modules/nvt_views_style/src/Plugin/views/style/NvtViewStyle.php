<?php

/**
 * @file
 * Definition of Drupal\tardis\Plugin\views\style\Tardis.
 */

namespace Drupal\nvt_views_style\Plugin\views\style;

use Drupal\core\form\FormStateInterface;
use Drupal\views\Plugin\views\style\StylePluginBase;

/**
 * Style plugin to render a list of years and months
 * in reverse chronological order linked to content.
 *
 * @ingroup views_style_plugins
 *
 * @ViewsStyle(
 *   id = "nvt_views_style",
 *   title = @Translation("NaviTeamView"),
 *   help = @Translation("Render a list of years and months in reverse chronological order linked to content."),
 *   theme = "views_view_naviviews",
 *   display_types = { "normal" }
 * )
 *
 */
class NvtViewStyle extends StylePluginBase {

	/**
   	* Does the style plugin allows to use style plugins.
   	*
   	* @var bool
   	*/
  	protected $usesRowPlugin = TRUE;


	/**
   	* Set default options
   	*/
  	protected function defineOptions() {
    	$options = parent::defineOptions();
    	$options['element'] = array('default' => 'div');
	    $options['class_attribute'] = array('default' => '');
		$options['data_att_name'] = array('default' => '');
		$options['data_att_value'] = array('default' => '');
	    $options['last_every_nth'] = array('default' => '');
	    $options['first_class'] = array('default' => 'first');
	    $options['last_class'] = array('default' => 'last');
		$options['wrapper_element'] = array('default' => 'div');
        $options['wrapper_class'] = array('default' => '');
        $options['wrapper_id'] = array('default' => '');
		
		$options['wrapper_attr_name1'] = array('default' => '');
		$options['wrapper_attr_value1'] = array('default' => '');
		$options['wrapper_attr_name2'] = array('default' => '');
		$options['wrapper_attr_value2'] = array('default' => '');
		
		$options['wrapper_attr_name3'] = array('default' => '');
		$options['wrapper_attr_value3'] = array('default' => '');
		
		$options['wrapper_attr_name4'] = array('default' => '');
		$options['wrapper_attr_value4'] = array('default' => '');
		$options['wrapper_attr_name5'] = array('default' => '');
		$options['wrapper_attr_value5'] = array('default' => '');
		$options['wrapper_attr_name6'] = array('default' => '');
		$options['wrapper_attr_value6'] = array('default' => '');
		$options['wrapper_attr_name7'] = array('default' => '');
		$options['wrapper_attr_value7'] = array('default' => '');
		$options['wrapper_attr_name8'] = array('default' => '');
		$options['wrapper_attr_value8'] = array('default' => '');
		$options['wrapper_attr_name9'] = array('default' => '');
		$options['wrapper_attr_value9'] = array('default' => '');
		$options['wrapper_attr_name10'] = array('default' => '');
		$options['wrapper_attr_value10'] = array('default' => '');
		
		
		
		
		
	    return $options;
  	}
  	/**
   * {@inheritdoc}
   */
  	public function buildOptionsForm(&$form, FormStateInterface $form_state) {
    	parent::buildOptionsForm($form, $form_state);
    	$form['element'] = array(
    		'#title' => $this->t('Element:'),
      		'#type' => 'textfield',
      		'#prefix' => '<div class="views-left-50">',
	      	'#suffix' => '</div>',
      		'#size' => '30',
	      	'#default_value' => $this->options['element'],
    	);
    	$form['class_attribute'] = array(
	      	'#title' => $this->t('Class attribute'),
	      	'#description' => $this->t('Insert a class you want row enumeration '),
	      	'#prefix' => '<div class="views-right-50">',
	      	'#suffix' => '</div>',
	      	'#type' => 'textfield',
	      	'#size' => '30',
	      	'#default_value' => $this->options['class_attribute'],
    	);
		$form['data_att_name'] = array(
    		'#title' => $this->t('Data Attribute Name'),
      		'#type' => 'textfield',
      		'#prefix' => '<div class="views-left-50">',
	      	'#suffix' => '</div>',
      		'#size' => '30',
	      	'#default_value' => $this->options['data_att_name'],
    	);
		$form['data_att_value'] = array(
	      	'#title' => $this->t('Data Attribute Value'),
	      	'#prefix' => '<div class="views-right-50">',
	      	'#suffix' => '</div>',
	      	'#type' => 'textfield',
	      	'#size' => '30',
	      	'#default_value' => $this->options['data_att_value'],
    	);
    	$form['help'] = array(
    		'#title' => $this->t('FIRST AND LAST CLASSES'),
      		'#type' => 'item',
      		'#description' => $this->t('If the FIRST/LAST every nth option is empty or zero, the FIRST class attribute and LAST class attribute are added once to only the first and last rows in the pager set. If this option is greater than 1, these classes are added to every nth row, which may be useful for grid layouts where the initial and final unit’s lateral margins must be 0.'
      		),
    	);
    	$form['last_every_nth'] = array(
	      	'#title' => $this->t('FIRST/LAST every n<sup>th</sup>'),
	      	'#description' => $this->t('The class to provide on the list element itself.'),
	      	'#type' => 'textfield',
	      	'#size' => '30',
	      	'#default_value' => $this->options['last_every_nth'],
    	);
    	$form['first_class'] = array(
	      	'#prefix' => '<div class="views-left-50">',
	      	'#suffix' => '</div>',
	      	'#title' => t('FIRST class attribute'),
	      	'#type' => 'textfield',
	      	'#size' => '30',
	      	'#default_value' => $this->options['first_class'],
    	);
    	$form['last_class'] = array(
	      	'#prefix' => '<div class="views-right-50">',
	      	'#suffix' => '</div>',
	      	'#title' => t('LAST class attribute'),
	      	'#type' => 'textfield',
	      	'#size' => '30',
	      	'#default_value' => $this->options['last_class'],
    	);
		$form['wrapper'] = array(
    		'#title' => $this->t('ADD HTML TAG AND ATTRIBUTE CLASS, ID FOR WRAPPER'),
      		'#type' => 'item',
      		'#description' => $this->t('-----------------------------------------------------'
      		),
    	);
		$form['wrapper_element'] = array(
    		'#title' => $this->t('Wrapper element:'),
      		'#type' => 'textfield',
      		'#size' => '30',
	      	'#default_value' => $this->options['wrapper_element'],
    	);
        $form['wrapper_class'] = array(
            '#title' => $this->t('Wrapper class'),
            '#description' => $this->t('The class to provide on the wrapper, outside the navi style.'),
            '#prefix' => '<div class="views-right-50">',
            '#suffix' => '</div>',
            '#type' => 'textfield',
            '#size' => '30',
            '#default_value' => $this->options['wrapper_class'],
        );
        $form['wrapper_id'] = array(
            '#title' => $this->t('Wrapper ID'),
            '#description' => $this->t('The ID to provide on the wrapper, outside the navi style.'),
            '#prefix' => '<div class="views-right-50">',
            '#suffix' => '</div>',
            '#type' => 'textfield',
            '#size' => '30',
            '#default_value' => $this->options['wrapper_id'],
        );
		
		//ATTR
		$form['wrapper'] = array(
    		'#title' => $this->t('------------ Multi Attribute --------------'),
      		'#type' => 'item',
      		'#description' => $this->t('----------------------------------------------------------------------------------------------------------'
      		),
    	);
		$form['wrapper_attr_name1'] = array(
    		'#title' => $this->t('Wrapper Attribute Name 1:'),
      		'#type' => 'textfield',
      		'#size' => '30',
			'#prefix' => '<div class="views-left-50">',
            '#suffix' => '</div>',
	      	'#default_value' => $this->options['wrapper_attr_name1'],
    	);
        $form['wrapper_attr_value1'] = array(
            '#title' => $this->t('Wrapper Attribute Value 1'),
            //'#description' => $this->t('Value attribute'),
            '#prefix' => '<div class="views-right-50">',
            '#suffix' => '</div>',
            '#type' => 'textfield',
            '#size' => '30',
            '#default_value' => $this->options['wrapper_attr_value1'],
        );
		
		
		$form['wrapper_attr_name2'] = array(
    		'#title' => $this->t('Wrapper Attribute Name 2:'),
      		'#type' => 'textfield',
      		'#size' => '30',
			'#prefix' => '<div class="views-left-50">',
            '#suffix' => '</div>',
	      	'#default_value' => $this->options['wrapper_attr_name2'],
    	);
        $form['wrapper_attr_value2'] = array(
            '#title' => $this->t('Wrapper Attribute Value 2'),
            //'#description' => $this->t('Value attribute'),
            '#prefix' => '<div class="views-right-50">',
            '#suffix' => '</div>',
            '#type' => 'textfield',
            '#size' => '30',
            '#default_value' => $this->options['wrapper_attr_value2'],
        );
		
		//3
		$form['wrapper_attr_name3'] = array(
    		'#title' => $this->t('Wrapper Attribute Name 3:'),
      		'#type' => 'textfield',
      		'#size' => '30',
			'#prefix' => '<div class="views-left-50">',
            '#suffix' => '</div>',
	      	'#default_value' => $this->options['wrapper_attr_name3'],
    	);
        $form['wrapper_attr_value3'] = array(
            '#title' => $this->t('Wrapper Attribute Value 3'),
            //'#description' => $this->t('Value attribute'),
            '#prefix' => '<div class="views-right-50">',
            '#suffix' => '</div>',
            '#type' => 'textfield',
            '#size' => '30',
            '#default_value' => $this->options['wrapper_attr_value3'],
        );
		
		//4
		$form['wrapper_attr_name4'] = array(
    		'#title' => $this->t('Wrapper Attribute Name 4:'),
      		'#type' => 'textfield',
      		'#size' => '30',
			'#prefix' => '<div class="views-left-50">',
            '#suffix' => '</div>',
	      	'#default_value' => $this->options['wrapper_attr_name4'],
    	);
        $form['wrapper_attr_value4'] = array(
            '#title' => $this->t('Wrapper Attribute Value 4'),
            //'#description' => $this->t('Value attribute'),
            '#prefix' => '<div class="views-right-50">',
            '#suffix' => '</div>',
            '#type' => 'textfield',
            '#size' => '30',
            '#default_value' => $this->options['wrapper_attr_value4'],
        );
		
		//5
		$form['wrapper_attr_name5'] = array(
    		'#title' => $this->t('Wrapper Attribute Name 5:'),
      		'#type' => 'textfield',
      		'#size' => '30',
			'#prefix' => '<div class="views-left-50">',
            '#suffix' => '</div>',
	      	'#default_value' => $this->options['wrapper_attr_name5'],
    	);
        $form['wrapper_attr_value5'] = array(
            '#title' => $this->t('Wrapper Attribute Value 5'),
            //'#description' => $this->t('Value attribute'),
            '#prefix' => '<div class="views-right-50">',
            '#suffix' => '</div>',
            '#type' => 'textfield',
            '#size' => '30',
            '#default_value' => $this->options['wrapper_attr_value5'],
        );
		
		//6
		$form['wrapper_attr_name6'] = array(
    		'#title' => $this->t('Wrapper Attribute Name 6:'),
      		'#type' => 'textfield',
      		'#size' => '30',
			'#prefix' => '<div class="views-left-50">',
            '#suffix' => '</div>',
	      	'#default_value' => $this->options['wrapper_attr_name6'],
    	);
        $form['wrapper_attr_value6'] = array(
            '#title' => $this->t('Wrapper Attribute Value 6'),
            //'#description' => $this->t('Value attribute'),
            '#prefix' => '<div class="views-right-50">',
            '#suffix' => '</div>',
            '#type' => 'textfield',
            '#size' => '30',
            '#default_value' => $this->options['wrapper_attr_value6'],
        );
		
		//7
		$form['wrapper_attr_name7'] = array(
    		'#title' => $this->t('Wrapper Attribute Name 7:'),
      		'#type' => 'textfield',
      		'#size' => '30',
			'#prefix' => '<div class="views-left-50">',
            '#suffix' => '</div>',
	      	'#default_value' => $this->options['wrapper_attr_name7'],
    	);
        $form['wrapper_attr_value7'] = array(
            '#title' => $this->t('Wrapper Attribute Value 7'),
            //'#description' => $this->t('Value attribute'),
            '#prefix' => '<div class="views-right-50">',
            '#suffix' => '</div>',
            '#type' => 'textfield',
            '#size' => '30',
            '#default_value' => $this->options['wrapper_attr_value7'],
        );
		
		//8
		$form['wrapper_attr_name8'] = array(
    		'#title' => $this->t('Wrapper Attribute Name 8:'),
      		'#type' => 'textfield',
      		'#size' => '30',
			'#prefix' => '<div class="views-left-50">',
            '#suffix' => '</div>',
	      	'#default_value' => $this->options['wrapper_attr_name8'],
    	);
        $form['wrapper_attr_value8'] = array(
            '#title' => $this->t('Wrapper Attribute Value 8'),
            //'#description' => $this->t('Value attribute'),
            '#prefix' => '<div class="views-right-50">',
            '#suffix' => '</div>',
            '#type' => 'textfield',
            '#size' => '30',
            '#default_value' => $this->options['wrapper_attr_value8'],
        );
		
		//9
		$form['wrapper_attr_name9'] = array(
    		'#title' => $this->t('Wrapper Attribute Name 9:'),
      		'#type' => 'textfield',
      		'#size' => '30',
			'#prefix' => '<div class="views-left-50">',
            '#suffix' => '</div>',
	      	'#default_value' => $this->options['wrapper_attr_name9'],
    	);
        $form['wrapper_attr_value9'] = array(
            '#title' => $this->t('Wrapper Attribute Value 9'),
            //'#description' => $this->t('Value attribute'),
            '#prefix' => '<div class="views-right-50">',
            '#suffix' => '</div>',
            '#type' => 'textfield',
            '#size' => '30',
            '#default_value' => $this->options['wrapper_attr_value9'],
        );
		
		//10
		$form['wrapper_attr_name10'] = array(
    		'#title' => $this->t('Wrapper Attribute Name 10:'),
      		'#type' => 'textfield',
      		'#size' => '30',
			'#prefix' => '<div class="views-left-50">',
            '#suffix' => '</div>',
	      	'#default_value' => $this->options['wrapper_attr_name10'],
    	);
        $form['wrapper_attr_value10'] = array(
            '#title' => $this->t('Wrapper Attribute Value 10'),
            //'#description' => $this->t('Value attribute'),
            '#prefix' => '<div class="views-right-50">',
            '#suffix' => '</div>',
            '#type' => 'textfield',
            '#size' => '30',
            '#default_value' => $this->options['wrapper_attr_value10'],
        );
		
		
  	}
}