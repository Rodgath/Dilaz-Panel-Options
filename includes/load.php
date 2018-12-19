<?php 
/*
|| --------------------------------------------------------------------------------------------
|| Panel Load
|| --------------------------------------------------------------------------------------------
||
|| @package		Dilaz Panel
|| @subpackage	Load
|| @since		Dilaz Panel 2.2
|| @author		WebDilaz Team, http://webdilaz.com
|| @copyright	Copyright (C) 2017, WebDilaz LTD
|| @link		http://webdilaz.com/metaboxes
|| @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
|| 
*/

defined('ABSPATH') || exit;

# Options
$options = array();

# dir
$dilaz_admin_folder   = basename(dirname(__DIR__));
$dilaz_admin_dir      = dirname(__DIR__);
$dilaz_admin_includes = $dilaz_admin_dir .'/includes/';
$dilaz_admin_options  = $dilaz_admin_dir .'/options/';

# Panel Files
$user_type_file     = file_exists($dilaz_admin_includes .'use-type.php') ? $dilaz_admin_includes .'use-type.php' : '';
$default_options    = file_exists($dilaz_admin_options .'default-options.php') ? $dilaz_admin_options .'default-options.php' : '';
$custom_options     = file_exists($dilaz_admin_options .'custom-options.php') ? $dilaz_admin_options .'custom-options.php' : $dilaz_admin_options .'custom-options-sample.php';
$options_file       = file_exists($dilaz_admin_options .'options.php') ? $dilaz_admin_options .'options.php' : $dilaz_admin_options .'options-sample.php';
$import_export_file = file_exists($dilaz_admin_options .'import-export.php') ? $dilaz_admin_options .'import-export.php' : '';

# Includes
if ($user_type_file != '') require_once $user_type_file;
if (isset($parameters['default_options']) && $parameters['default_options'] && $default_options != '' && !$parameters['use_type_error']) require_once $default_options;
if (isset($parameters['custom_options']) && $parameters['custom_options'] && !$parameters['use_type_error']) require_once $custom_options;
if (!$parameters['use_type_error']) require_once $options_file;
if (!$parameters['use_type_error'] && isset($parameters['import_export']) && $parameters['import_export']) require_once $import_export_file;

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