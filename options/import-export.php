<?php
/*
|| --------------------------------------------------------------------------------------------
|| Default Panel Import/Export Option Fields
|| --------------------------------------------------------------------------------------------
||
|| @package		Dilaz Panel
|| @subpackage	Import/Export Fields
|| @since		Dilaz Panel 1.1
|| @author		Rodgath, https://github.com/Rodgath
|| @copyright	Copyright (C) 2017, Rodgath LTD
|| @link		https://github.com/Rodgath/Dilaz-Panel-Plugin
|| @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
|| 
*/

defined('ABSPATH') || exit;

/**
 * Add Import/Export option fields to the bottom of the panel
 *
 * @param array	 $dilaz_panel               all registered dilaz panel
 * @param string $parameters['option_name'] panel option name
 * @param array  $options                   panel options
 *
 * @return array
 */
add_filter('panel_option_filter_'. $parameters['option_name'], function($options) {
	
	# MAIN TAB - Export / Import
	# =============================================================================================
	$options[] = array(
		'name' => __('Export / Import', 'dilaz-panel'),
		'type' => 'heading',
		'icon' => 'mdi-download'
	);
		
		# SUB TAB - Export
		# *****************************************************************************************
		$options[] = array(
			'name' => __('Export', 'dilaz-panel'),
			'type' => 'subheading',
		);
			
			# FIELDS - Export
			# >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
			$options[] = array(
				'id'    => 'export',
				'name'  => __('Export', 'dilaz-panel'),
				'desc'  => __('Export', 'dilaz-panel'),
				'type'  => 'export',
				'std'   => '',
				'class' => ''
			);
		
		# SUB TAB - Import
		# *****************************************************************************************
		$options[] = array(
			'name' => __('Import', 'dilaz-panel'),
			'type' => 'subheading',
		);
			
			# FIELDS - Import
			# >>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>>
			$options[] = array(
				'id'    => 'import',
				'name'  => __('Import', 'dilaz-panel'),
				'desc'  => __('Import', 'dilaz-panel'),
				'type'  => 'import',
				'std'   => '',
				'class' => 'last'
			);
		
		
	return $options;
	
}, 100);