<?php 
/*
|| --------------------------------------------------------------------------------------------
|| Panel Load
|| --------------------------------------------------------------------------------------------
||
|| @package    Dilaz Panel
|| @subpackage Load
|| @since      Dilaz Panel 2.2
|| @author     Rodgath, https://github.com/Rodgath
|| @copyright  Copyright (C) 2017, Rodgath LTD
|| @link       https://github.com/Rodgath/Dilaz-Panel
|| @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
|| 
*/

defined('ABSPATH') || exit;

# Check if function exists before using it to prevent errors
if (!function_exists('DilazPanel\dilaz_panel_get_use_type')) {
  return;
}

use function DilazPanel\dilaz_panel_get_use_type;
use function DilazPanel\dilaz_panel_theme_params;
use function DilazPanel\dilaz_panel_plugin_params;
	
# Define min PHP requirement
defined('DILAZ_PANEL_MIN_PHP') || define('DILAZ_PANEL_MIN_PHP', 5.6);
	
# Define min WP requirement
defined('DILAZ_PANEL_MIN_WP') || define('DILAZ_PANEL_MIN_WP', 4.5);

# Dilaz Panel plugin file constant
defined('DILAZ_PANEL_PLUGIN_FILE') || define('DILAZ_PANEL_PLUGIN_FILE', 'dilaz-panel/dilaz-panel.php');
	
# Check PHP version if Dilaz Panel plugin is enabled
if (version_compare(PHP_VERSION, DILAZ_PANEL_MIN_PHP, '<')) {
	add_action('admin_notices', function() {
		
		$use_type_name   = dilaz_panel_get_use_type(__FILE__);
		$use_type_params = 'plugin' == $use_type_name ? dilaz_panel_plugin_params(__FILE__) : dilaz_panel_theme_params(wp_get_theme(), __FILE__);
		
		echo '<div id="message" class="dilaz-panel-notice notice notice-warning"><p><strong>'. sprintf(__('PHP version <em>%1$s</em> detected. <em>%2$s</em> %3$s options panel recommends that you upgrade to PHP version <em>%4$s</em> or the most recent release of PHP.', 'dilaz-panel'), PHP_VERSION, $use_type_params['item_name'], $use_type_name, DILAZ_PANEL_MIN_PHP) .'</strong></p></div>';
	});
}

# Check WP version if Dilaz Panel plugin is enabled
if (version_compare($GLOBALS['wp_version'], DILAZ_PANEL_MIN_WP, '<')) {
	add_action('admin_notices', function() {
		
		$use_type_name   = dilaz_panel_get_use_type(__FILE__);
		$use_type_params = 'plugin' == $use_type_name ? dilaz_panel_plugin_params(__FILE__) : dilaz_panel_theme_params(wp_get_theme(), __FILE__);
		
		echo '<div id="message" class="dilaz-panel-notice notice notice-warning"><p><strong>'. sprintf(__('WordPress version <em>%1$s</em> detected. <em>%2$s</em> %3$s options panel recommends that you upgrade to WordPress version <em>%4$s</em> or the most recent release of WordPress.', 'dilaz-panel'), $GLOBALS['wp_version'], $use_type_params['item_name'], $use_type_name, DILAZ_PANEL_MIN_WP) .'</strong></p></div>';
	});
}

# Check if DilazPanel plugin is installed/activated
if (!function_exists('is_plugin_active')) include_once ABSPATH . 'wp-admin/includes/plugin.php';
if (!is_plugin_active(DILAZ_PANEL_PLUGIN_FILE)) {
	add_action('admin_notices', function() {
		
		# check if its plugin when in theme use type
		if ('plugin' == dilaz_panel_get_use_type(__FILE__)) {
			
			if (!function_exists('get_plugin_data')) require_once ABSPATH . 'wp-admin/includes/plugin.php';
			
			$plugin_data = [];
			
			$plugins_dir     = trailingslashit(WP_PLUGIN_DIR);
			$plugin_basename = plugin_basename(__FILE__);
			$plugin_folder   = strtok($plugin_basename, '/');
			
			# use glob to check plugin data from all PHP files within plugin main folder
			foreach (glob(trailingslashit($plugins_dir . $plugin_folder) . '*.php') as $file) {
				$plugin_data = get_plugin_data($file);
				
				# lets ensure we don't return empty plugin data
				if (empty($plugin_data['Name'])) continue; else break;
			}
			
			$item_name = $plugin_data['Name'];
			$item_type = 'plugin';
			
		# check if its theme when in plugin use type
		} else if ('theme' == dilaz_panel_get_use_type(__FILE__)) {
			$theme_object = wp_get_theme();
			$item_name    = is_child_theme() ? $theme_object['Template'] : $theme_object['Name'];
			$item_type    = 'theme';
		}
		
		$plugins = get_plugins();
		if (isset($plugins[DILAZ_PANEL_PLUGIN_FILE])) {
			$activation_url = wp_nonce_url('plugins.php?action=activate&amp;plugin='. urlencode(DILAZ_PANEL_PLUGIN_FILE), 'activate-plugin_'. DILAZ_PANEL_PLUGIN_FILE);
			echo '<div id="message" class="dilaz-panel-notice notice notice-warning"><p><strong>'. sprintf(__('Please %1$sactivate%2$s <em>Dilaz Panel</em> plugin. It is required by "<em>%3$s</em>" %4$s.', 'dilaz-panel'), '<a href="'. $activation_url .'">', '</a>', $item_name, $item_type) .'</strong></p></div>';
		} else {
			echo '<div id="message" class="dilaz-panel-notice notice notice-warning"><p><strong>'. sprintf(__('Please %1$sinstall%2$s <em>Dilaz Panel</em> plugin. It is required by "<em>%3$s</em>" %4$s.', 'dilaz-panel'), '<a href="'. admin_url('plugin-install.php?tab=upload') .'">', '</a>', $item_name, $item_type) .'</strong></p></div>';
		}
	});
	
	return;
}

# Lets ensure the DilazPanel class is loaded
if (!class_exists('DilazPanel')) { 
	if (file_exists(trailingslashit(WP_PLUGIN_DIR). DILAZ_PANEL_PLUGIN_FILE)) {
		require_once trailingslashit(WP_PLUGIN_DIR). DILAZ_PANEL_PLUGIN_FILE;
	} else {
		return;
	}
}

# Lets ensure the DilazPanelFunctions class is loaded
if (!class_exists('DilazPanelFunctions')) { 
	if (file_exists(trailingslashit(WP_PLUGIN_DIR) . 'dilaz-panel/includes/functions.php')) {
		require_once trailingslashit(WP_PLUGIN_DIR) . 'dilaz-panel/includes/functions.php';
	}
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

# Options - preferred filter for adding/removing custom options
$options = apply_filters('panel_option_filter_'. $parameters['option_name'], $options);

# option arguments
$option_args = array($parameters, $options);

# Initialize the panel object
$dilazPanel = new DilazPanel\DilazPanel($option_args);