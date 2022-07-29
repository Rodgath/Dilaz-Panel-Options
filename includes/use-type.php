<?php 
/*
|| --------------------------------------------------------------------------------------------
|| Admin Panel Use Type
|| --------------------------------------------------------------------------------------------
||
|| @package    Dilaz Panel
|| @subpackage Use Type
|| @since      Dilaz Panel 2.0
|| @author     Rodgath, https://github.com/Rodgath
|| @copyright  Copyright (C) 2017, Rodgath LTD
|| @link       https://github.com/Rodgath/Dilaz-Panel-Plugin
|| @license    http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
|| 
*/

defined('ABSPATH') || exit;

$use_type_parameters = array();
$parameters['use_type_error'] = false;

if (isset($parameters['use_type']) && $parameters['use_type'] == 'theme') {
	
	# check if its plugin when in theme use type
	if ('plugin' == dilaz_panel_get_use_type()) {
		
		add_action('admin_notices', function() {
			echo '<div id="message" class="dilaz-panel-notice notice notice-warning error"><p><strong>'. sprintf( __( 'Wrong "use type" for admin options. Please set "<em>use_type</em>" parameter value to "<em>plugin</em>" in "<em>%s</em>".', 'dilaz-panel' ), 'wp-content'. wp_normalize_path(explode('wp-content', dirname(__DIR__))[1]) .'/config.php' ) .'</strong></p></div>';
		});
		
		$parameters['use_type_error'] = true;
		
	} else {
		
		$use_type_parameters = dilaz_panel_theme_params();
		
	}

} else if (isset($parameters['use_type']) && $parameters['use_type'] == 'plugin') {
	
	# check if its theme when in plugin use type
	if ('theme' == dilaz_panel_get_use_type()) {
		
		add_action('admin_notices', function() {
			echo '<div id="message" class="dilaz-panel-notice notice notice-warning error"><p><strong>'. sprintf( __( 'Wrong "use type" for admin options. Please set "<em>use_type</em>" parameter value to "<em>theme</em>" in "<em>%s</em>".', 'dilaz-panel' ), 'wp-content'. wp_normalize_path(explode('wp-content', dirname(__DIR__))[1]) .'/config.php' ) .'</strong></p></div>';
		});
		
		# set use type error
		$parameters['use_type_error'] = true;
		
	} else {
		
		$use_type_parameters = dilaz_panel_plugin_params();
		
	}
	
} else {
	
	# Show "use_type" parameter value error incase the user adds neither 'plugin' nor 'theme'
	add_action('admin_notices', function() {
	
		# check if panel is used in 'theme' or 'plugin'
		$current_use_type = dilaz_panel_get_use_type();
	
		echo '<div id="message" class="dilaz-panel-notice notice notice-warning error"><p><strong>'. sprintf( __( 'Wrong "use type" for admin options. Please set "<em>use_type</em>" parameter value to "<em>%1$s</em>" in "<em>%2$s</em>".', 'dilaz-panel' ), $current_use_type, 'wp-content'. wp_normalize_path(explode('wp-content', dirname(__DIR__))[1]) .'/config.php' ) .'</strong></p></div>';
	});
	
	# set use type error
	$parameters['use_type_error'] = true;
}

$parameters = wp_parse_args($use_type_parameters, $parameters);

return $parameters;