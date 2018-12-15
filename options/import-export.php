<?php
/*
|| --------------------------------------------------------------------------------------------
|| Default Panel Import/Export Option Fields
|| --------------------------------------------------------------------------------------------
||
|| @package		Dilaz Panel
|| @subpackage	Import/Export Fields
|| @since		Dilaz Panel 1.1
|| @author		WebDilaz Team, http://webdilaz.com
|| @copyright	Copyright (C) 2017, WebDilaz LTD
|| @link		http://webdilaz.com/panel
|| @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
|| 
*/

defined('ABSPATH') || exit;

/**
 * Define the options' fields
 *
 * @param	array $options
 * @return	array
 */
if (isset($parameters['import_export']) && $parameters['import_export'] == true) {
	
	# MAIN TAB - Export / Import
	# =============================================================================================
	$options[] = array(
		'name' => __('Export / Import', 'dilaz-panel'),
		'type' => 'heading',
		'icon' => 'fa-cloud'
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
			


	return wp_parse_args($options, $options);

}