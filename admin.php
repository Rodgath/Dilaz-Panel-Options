<?php
/*
|| --------------------------------------------------------------------------------------------
|| Admin Options Panel
|| --------------------------------------------------------------------------------------------
||
|| @package		Dilaz Panel
|| @subpackage	Panel
|| @version		2.2
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


# Load metabox options
require_once dirname(__FILE__) .'/includes/load.php';