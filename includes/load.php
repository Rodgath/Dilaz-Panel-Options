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

# Check if DilazPanel plugin is installed/activated
require_once(ABSPATH . 'wp-admin/includes/plugin.php');
if (!is_plugin_active('dilaz-panel/dilaz-panel.php')) {
	add_action('admin_notices', function() {
		$plugins = get_plugins();
		if (isset($plugins['dilaz-panel/dilaz-panel.php'])) {
			echo '<div id="message" class="notice notice-warning"><p><strong>'. sprintf(__('Please %1$sactivate%2$s <em>Dilaz Panel</em> plugin. It is required in "<em>%3$s</em>".', 'dilaz-panel'), '<a href="'. admin_url('plugins.php') .'">', '</a>', 'wp-content'. wp_normalize_path(explode('wp-content', dirname(__DIR__))[1]) .'/admin.php') .'</strong></p></div>';
		} else {
			echo '<div id="message" class="notice notice-warning"><p><strong>'. sprintf(__('Please %1$sinstall%2$s <em>Dilaz Panel</em> plugin. It is required in "<em>%3$s</em>".', 'dilaz-panel'), '<a href="'. admin_url('plugin-install.php') .'">', '</a>', 'wp-content'. wp_normalize_path(explode('wp-content', dirname(__DIR__))[1]) .'/admin.php') .'</strong></p></div>';
		}
	});
	
	return;
}

# Lets ensure the DilazPanel class is loaded
if (!class_exists('DilazPanel') && file_exists(ABSPATH .'wp-content/plugins/dilaz-panel/dilaz-panel.php')) {
	require_once ABSPATH .'wp-content/plugins/dilaz-panel/dilaz-panel.php';
}

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