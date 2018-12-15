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



# Option parameters
$parameters = array(
	'option_name'     => 'n00b_options', # must be unique. Used to save settings.
	'option_prefix'   => 'n00b_panel', # must be unique. Not used to save settings.
	'use_type'        => 'theme', # 'theme' if used within a theme OR 'plugin' if used within a plugin
	'use_type_error'  => false, # error when wrong "use_type" is declared, default is false
	'default_options' => false, # whether to load default options
	'custom_options'  => false, # whether to load custom options
	'page_slug'       => 'n00b_panel', # should be unique
	'page_title'      => __('n00b Panel', 'dilaz-panel'),
	'menu_title'      => __('n00b Panel', 'dilaz-panel'),
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




/* =================================================================================== */
/* Touch nothing beyond this point; unless you know what you are doing!!!              */
/* =================================================================================== */




# Options
$options = array();

# dir
$dilaz_admin_includes = dirname(__FILE__) .'/includes/';
$dilaz_admin_options = dirname(__FILE__) .'/options/';

# Panel Files
$user_type_file     = file_exists($dilaz_admin_includes .'use-type.php') ? $dilaz_admin_includes .'use-type.php' : '';
$default_options    = file_exists($dilaz_admin_options .'default-options.php') ? $dilaz_admin_options .'default-options.php' : '';
$custom_options     = file_exists($dilaz_admin_options .'custom-options.php') ? $dilaz_admin_options .'custom-options.php' : $dilaz_admin_options .'custom-options-sample.php';
$options_file       = file_exists($dilaz_admin_options .'options.php') ? $dilaz_admin_options .'options.php' : $dilaz_admin_options .'options-sample.php';
$import_export_file = file_exists($dilaz_admin_options .'import-export.php') ? $dilaz_admin_options .'import-export.php' : '';

# Includes
require_once $user_type_file;
require_once $default_options;
require_once $custom_options;
require_once $options_file;
require_once $import_export_file;

# All option parameters
$parameters = apply_filters('parameter_filter_'. $parameters['option_name'], $parameters);

# Add panel attributes to $options
array_splice($options, 0, 0, [['id' => 'panel-atts', 'type' => 'panel-atts', 'files' => [$default_options, $custom_options, $options_file], 'params' => $parameters]]);

# All options
$options = apply_filters('option_filter_'. $parameters['option_name'], $options);

# option arguments
$option_args = array($parameters, $options);

# Initialize the panel object
$dilazPanel = new DilazPanel($option_args);