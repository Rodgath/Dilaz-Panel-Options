<?php
/*
|| --------------------------------------------------------------------------------------------
|| Custom Options' Fields Example
|| --------------------------------------------------------------------------------------------
||
|| @package    Dilaz Panel
|| @subpackage Custom Options
|| @since      Dilaz Panel 1.1
|| @author     Rodgath, https://github.com/Rodgath
|| @copyright  Copyright (C) 2017, Rodgath LTD
|| @link       https://github.com/Rodgath/Dilaz-Panel
|| @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
||
|| NOTE 1: Rename this file from "custom-options-sample.php" to "custom-options.php". If you
||         don't rename it, all your options and settings will be overwritten
||         when updating Dilaz Panel Options.
||
|| NOTE 2: Add all your theme/plugin custom options in this file
||
*/

use DilazPanel\DilazPanelFunctions;

defined('ABSPATH') || exit;


/**
 * Add custom panel into dilaz panel
 *
 * @param array	 $dilaz_panel               all registered dilaz panel
 * @param string $parameters['option_name'] panel option name
 * @param array  $options                   panel options
 *
 * @return array
 */
add_filter('panel_option_filter_'. $parameters['option_name'], function($options) {

	# BOX - Test Beta
	# =============================================================================================
	$options[] = array(
		'id'   => 'custom_options_main',
		'name' => __('Custom Options Main', 'dilaz-panel'),
		'type' => 'heading',
		'icon' => 'mdi-settings'
	);

		# TAB - Beta Tab 1
		# *****************************************************************************************
		$options[] = array(
			'id'   => 'custom_options_sub',
			'name' => __('Custom Options Sub', 'dilaz-panel'),
			'type' => 'subheading'
		);

			# FIELDS - Beta Tab 1
			# >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
			$options[] = array(
				'id'	  => 'custom_1',
				'name'	  => __('Custom One:', 'dilaz-panel'),
				'desc'	  => '',
				'type'	  => 'select',
				'options' => array(
					'one'   => __('One', 'dilaz-panel'),
					'two'   => __('Two', 'dilaz-panel'),
					'three' => __('Three', 'dilaz-panel')
				),
				'std'	  => 'default'
			);
			$options[] = array(
				'id'	  => 'custom_2',
				'name'	  => __('Custom Two:', 'dilaz-panel'),
				'desc'	  => '',
				'type'	  => 'radio',
				'options' => array(
					'yes'   => __('Yes', 'dilaz-panel'),
					'no'    => __('No', 'dilaz-panel')
				),
				'std'     => 'no'
			);
			$options[] = array(
				'id'	  => 'custom_3',
				'name'	  => __('Custom Three:', 'dilaz-panel'),
				'desc'	  => '',
				'type'	  => 'radio',
				'options' => array(
					'yes'   => __('Yes', 'dilaz-panel'),
					'no'    => __('No', 'dilaz-panel')
				),
				'std'     => 'no'
			);

	return $options;

}, 10);


/**
 * Insert panel field before a specific field
 *
 * @param array	 $dilaz_panel               all registered dilaz panel
 * @param string $parameters['option_name'] panel option name
 * @param array  $options                   panel options
 *
 * @return array
 */
add_filter('panel_option_filter_'. $parameters['option_name'], function($options) {

	# array data to be inserted
	$insert_custom_data = [];

	$insert_custom_data[] = array(
		'id'	  => 'custom_2_b',
		'name'	  => __('INSERTED - Custom Two B:', 'dilaz-panel'),
		'desc'	  => __('Custom Two B inserted before Custom Two C.', 'dilaz-panel'),
		'type'	  => 'radio',
		'options' => array(
			'yes'   => __('Yes', 'dilaz-panel'),
			'no'    => __('No', 'dilaz-panel')
		),
		'std'     => 'yes'
	);

	$insert_custom_data[] = array(
		'id'	  => 'custom_2_c',
		'name'	  => __('INSERTED - Custom Two C:', 'dilaz-panel'),
		'desc'	  => __('Custom Two C inserted before Custom Three.', 'dilaz-panel'),
		'type'	  => 'radio',
		'options' => array(
			'yes'   => __('Yes', 'dilaz-panel'),
			'no'    => __('No', 'dilaz-panel')
		),
		'std'     => 'yes'
	);

	$insert = DilazPanelFunctions\DilazPanelFunctions::insertField($options, 'custom_options_main', 'custom_3', $insert_custom_data, 'before');

	return $insert;

}, 10);


/**
 * Insert panel sub-tab inside a specific tab before a specific sub-tab
 *
 * @param array	 $dilaz_panel               all registered dilaz panel
 * @param string $parameters['option_name'] panel option name
 * @param array  $options                   panel options
 *
 * @return array
 */
add_filter('panel_option_filter_'. $parameters['option_name'], function($options) {

	# array data to be inserted
	$insert_custom_data = [];

		# TAB - INSERTED Sub-Tab
		# *****************************************************************************************
		$insert_custom_data[] = array(
			'id'   => 'inserted_custom_tab_before',
			'name' => __('INSERTED Sub-Tab [Before]', 'dilaz-panel'),
			'type' => 'subheading'
		);

			# FIELDS - INSERTED Sub-Tab fields
			# >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
			$insert_custom_data[] = array(
				'id'   => 'custom_switch',
				'name' => __('Custom Switch:', 'dilaz-panel'),
				'desc' => __('On/Off switch option.', 'dilaz-panel'),
				'type' => 'switch',
				'options' => array(
					1 => __('On', 'dilaz-panel'),
					0 => __('Off', 'dilaz-panel'),
				),
				'std'  => 1,
				'class' => ''
			);

	$insert = DilazPanelFunctions\DilazPanelFunctions::insertField($options, 'custom_options_main', 'custom_options_sub', $insert_custom_data, 'before');

	return $insert;

}, 10);


/**
 * Insert panel sub-tab inside a specific tab as the last sub-tab
 *
 * @param array	 $dilaz_panel               all registered dilaz panel
 * @param string $parameters['option_name'] panel option name
 * @param array  $options                   panel options
 *
 * @return array
 */
add_filter('panel_option_filter_'. $parameters['option_name'], function($options) {

	# array data to be inserted
	$insert_custom_data = [];

		# TAB - INSERTED Sub-Tab
		# *****************************************************************************************
		$insert_custom_data[] = array(
			'id'   => 'inserted_custom_tab_last',
			'name' => __('INSERTED Sub-Tab [Last]', 'dilaz-panel'),
			'type' => 'subheading'
		);

			# FIELDS - INSERTED Sub-Tab fields
			# >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
			$insert_custom_data[] = array(
				'id'   => 'custom_buttonset',
				'name' => __('Custom Button Set:', 'dilaz-panel'),
				'desc' => __('Set multiple options using buttonset.', 'dilaz-panel'),
				'type' => 'buttonset',
				'options' => array(
					'yes'   => __('Yes', 'dilaz-panel'),
					'no'    => __('No', 'dilaz-panel'),
					'maybe' => __('Maybe', 'dilaz-panel')
				),
				'std'  => 'no',
				'class' => ''
			);

	$insert = DilazPanelFunctions\DilazPanelFunctions::insertField($options, 'custom_options_main', '', $insert_custom_data, 'last');

	return $insert;

}, 10);

