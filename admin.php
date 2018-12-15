<?php
/*
|| --------------------------------------------------------------------------------------------
|| Admin Options Panel
|| --------------------------------------------------------------------------------------------
||
|| @package		Dilaz Panel
|| @subpackage	Panel
|| @version		2.0
|| @since		Dilaz Panel 1.0
|| @author		WebDilaz Team, http://webdilaz.com
|| @copyright	Copyright (C) 2017, WebDilaz LTD
|| @link		http://webdilaz.com/panel
|| @License		GPL-2.0+
|| @License URI	http://www.gnu.org/licenses/gpl-2.0.txt
|| 
|| NOTE: This options panel requires Dilaz Panel plugin installed. 
|| 
*/

defined('ABSPATH') || exit;

# Option name 
$option_name = 'dilaz_options'; # must be unique. Used to save settings.

# Option parameters
$parameters = array(
	'option_prefix'   => 'dilaz_panel', # must be unique. Not used to save settings.
	'use_type'        => 'theme', # 'theme' if used within a theme OR 'plugin' if used within a plugin
	'use_type_error'  => false, # error when wrong "use_type" is declared, default is false
	'default_options' => true, # whether to load default options
	'custom_options'  => true, # whether to load custom options
	'page_slug'       => 'dilaz_panel', # should be unique
	'page_title'      => __('Dilaz Panel', 'dilaz-panel'),
	'menu_title'      => __('Dilaz Panel', 'dilaz-panel'),
	'options_cap'     => 'manage_options', # The capability required for this menu to be displayed to the user.
	'menu_icon'       => '', # dashicon menu icon
	'admin_bar_menu'  => true, # 'true' to show panel in admin bar menu
	'import_export'   => true, # 'true' to enable import/export field
	'log_title'       => __('Changelog', 'dilaz-panel'),
	'log_url'         => '#', # leave empty to disable
	'doc_title'       => __('Documentation', 'dilaz-panel'),
	'doc_url'         => '#', # leave empty to disable
	'support_title'   => __('Support', 'dilaz-panel'),
	'support_url'     => '#', # leave empty to disable
);

# Options
$options = array();

# Includes
require_once dirname(__FILE__) .'/includes/use-type.php';
require_once dirname(__FILE__) .'/options/default-options.php';
require_once file_exists(dirname(__FILE__) .'/options/custom-options.php') ? dirname(__FILE__) .'/options/custom-options.php' : dirname(__FILE__) .'/options/custom-options-sample.php';
require_once file_exists(dirname(__FILE__) .'/options/options.php') ? dirname(__FILE__) .'/options/options.php' : dirname(__FILE__) .'/options/options-sample.php';
require_once dirname(__FILE__) .'/options/import-export.php';

# All option parameters
$parameters = apply_filters('parameter_filter_'.$option_name, $parameters);

# All options
$options = apply_filters('option_filter_'.$option_name, $options);

# Initialize the panel object
// $dilazPanel = new DilazPanel($option_name, $parameters, $options);
$dilazPanel = new DilazPanel($option_name, $parameters, $options);