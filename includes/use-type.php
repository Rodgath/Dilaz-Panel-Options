<?php 
/*
|| --------------------------------------------------------------------------------------------
|| Admin Panel Use Type
|| --------------------------------------------------------------------------------------------
||
|| @package		Dilaz Panel
|| @subpackage	Use Type
|| @since		Dilaz Panel 2.0
|| @author		WebDilaz Team, http://webdilaz.com
|| @copyright	Copyright (C) 2017, WebDilaz LTD
|| @link		http://webdilaz.com/panel
|| @license		http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
|| 
*/

defined('ABSPATH') || exit;

$use_type_parameters = array();

if (isset($parameters['use_type']) && $parameters['use_type'] == 'theme') {
	
	# check if its plugin when in theme use type
	if (strpos(dirname(__FILE__), 'plugins')) {
		
		add_action( 'admin_notices', function() {
			echo '<div id="message" class="error"><p><strong>'. __( 'Options panel is being used in a plugin. Please set "<em>use_type</em>" parameter to "<em>plugin</em>".', 'dilaz-panel' ) .'</strong></p></div>';
		});
		
		# set use type error
		$parameters['use_type_error'] = true;
		
	} else {
		
		$theme_object  = wp_get_theme();
		$theme_name    = is_child_theme() ? $theme_object['Template'] : $theme_object['Name'];
		$theme_name_lc = strtolower($theme_name);
		$theme_version = $theme_object['Version'];
		
		$use_type_parameters = array(
			'item_name'    => $theme_name,
			'item_version' => $theme_version,
			'dir_url'      => get_template_directory_uri() . wp_normalize_path(explode($theme_name_lc, explode('includes', dirname(__FILE__))[0])[2]),
		);
	}

} else if (isset($parameters['use_type']) && $parameters['use_type'] == 'plugin') {
	
	# check if its theme when in plugin use type
	if (strpos(dirname(__FILE__), 'themes')) {
		
		add_action( 'admin_notices', function() {
			echo '<div id="message" class="error"><p><strong>'. __( 'Options panel is being used in a theme. Please set "<em>use_type</em>" parameter to "<em>theme</em>".', 'dilaz-panel' ) .'</strong></p></div>';
		});
		
		# set use type error
		$parameters['use_type_error'] = true;
		
	} else {
		
		if (!function_exists('get_plugin_data')) {
			require_once(ABSPATH . 'wp-admin/includes/plugin.php');
		}
		
		$plugin_object = [];
		
		$plugins_dir     = ABSPATH . 'wp-content/plugins/'; 
		$plugin_basename = plugin_basename(__FILE__);
		$plugin_folder   = strtok($plugin_basename, '/');
		
		# use global to check plugin data from all PHP files within plugin main folder
		foreach (glob(trailingslashit($plugins_dir . $plugin_folder) . '*.php') as $file) {
			$plugin_object = get_plugin_data($file);
		}
		
		$plugin_name    = $plugin_object['Name'];
		$plugin_name_lc = strtolower($plugin_name);
		$plugin_version = $plugin_object['Version'];
		
		$use_type_parameters = array(
			'item_name'    => $plugin_name,
			'item_version' => $plugin_version,
			'dir_url'      => trailingslashit(explode($plugin_name_lc, plugin_dir_url(__FILE__))[0] . $plugin_name_lc),
		);
	}
}

$parameters = wp_parse_args($use_type_parameters, $parameters);

return $parameters;