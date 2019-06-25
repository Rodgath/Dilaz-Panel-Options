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
|| @link       https://github.com/Rodgath/Dilaz-Panel-Plugin
|| @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
|| 
*/

defined('ABSPATH') || exit;
	
/* Define min PHP requirement */
defined('DILAZ_PANEL_MIN_PHP') || define('DILAZ_PANEL_MIN_PHP', 5.5);
	
# Define min WP requirement
defined('DILAZ_PANEL_MIN_WP') || define('DILAZ_PANEL_MIN_WP', 4.5);

# Dilaz Panel plugin file constant
defined('DILAZ_PANEL_PLUGIN_FILE') || define('DILAZ_PANEL_PLUGIN_FILE', 'dilaz-panel/dilaz-panel.php');

# Dilaz panel get use type based on current panel usage
function dilaz_panel_get_use_type() {
	if (FALSE !== strpos(dirname(__FILE__), '\plugins\\') || FALSE !== strpos(dirname(__FILE__), '/plugins/')) {
		return 'plugin';
	} else if (FALSE !== strpos(dirname(__FILE__), '\themes\\') || FALSE !== strpos(dirname(__FILE__), '/themes/')) {
		return 'theme';
	} else {
		return FALSE;
	}
}

# Dilaz panel theme object
function dilaz_panel_theme_params() {
	
	$theme_object  = wp_get_theme();
	$theme_name    = is_child_theme() ? $theme_object['Template'] : $theme_object['Name'];
	$theme_name_lc = strtolower($theme_name);
	$theme_version = $theme_object['Version'];
	$theme_uri     = is_child_theme() ? get_stylesheet_directory_uri() : get_template_directory_uri();
	$theme_folder  = basename($theme_uri);
	
	/* 
	 * If the theme folder name string appears multiple times,
	 * lets split the string as shown below and focus only 
	 * on the last theme folder name string
	 */
	$split_1      = explode('includes', dirname(__FILE__));
	$split_2      = explode($theme_folder, $split_1[0]);
	$split_2_last = array_pop($split_2);
	
	$use_type_parameters = array(
		'item_name'    => $theme_name,
		'item_version' => $theme_version,
		'dir_url'      => trailingslashit($theme_uri . wp_normalize_path($split_2_last)),
	);
	
	return $use_type_parameters;
}

# Check if DilazPanel plugin is installed/activated
if (!function_exists('is_plugin_active')) include_once ABSPATH . 'wp-admin/includes/plugin.php';
if (!is_plugin_active(DILAZ_PANEL_PLUGIN_FILE)) {
	add_action('admin_notices', function() {
		
		# check if its plugin when in theme use type
		if (FALSE !== strpos(dirname(__FILE__), '\plugins\\') || FALSE !== strpos(dirname(__FILE__), '/plugins/')) {
			
			if (!function_exists('get_plugin_data')) require_once ABSPATH . 'wp-admin/includes/plugin.php';
			
			$plugin_data = [];
			
			$plugins_dir     = ABSPATH . 'wp-content/plugins/'; 
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
		} else if (FALSE !== strpos(dirname(__FILE__), '\themes\\') || FALSE !== strpos(dirname(__FILE__), '/themes/')) {
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
	
} else {
	
	# Check PHP version if Dilaz Panel plugin is enabled
	if (version_compare(PHP_VERSION, DILAZ_PANEL_MIN_PHP, '<')) {
		add_action('admin_notices', function() {
			echo '<div id="message" class="dilaz-panel-notice notice notice-warning"><p><strong>'. sprintf(__('PHP version %1$s detected. It is recommended that you upgrade to PHP version %2$s or to the most recent release of PHP', 'dilaz-panel'), PHP_VERSION, DILAZ_PANEL_MIN_PHP) .'</strong></p></div>';
		});
	}
}

# Lets ensure the DilazPanel class is loaded
if (!class_exists('DilazPanel')) { 
	if (file_exists(ABSPATH .'wp-content/plugins/'. DILAZ_PANEL_PLUGIN_FILE)) {
		require_once ABSPATH .'wp-content/plugins/'. DILAZ_PANEL_PLUGIN_FILE;
	} else {
		return;
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
$dilazPanel = new DilazPanel($option_args);
