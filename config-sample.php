<?php
/*
|| --------------------------------------------------------------------------------------------
|| Admin Panel Config
|| --------------------------------------------------------------------------------------------
||
|| @package		Dilaz Panel
|| @subpackage	Config
|| @since		Dilaz Panel 2.4.1
|| @author		WebDilaz Team, http://webdilaz.com
|| @copyright	Copyright (C) 2017, WebDilaz LTD
|| @link		http://webdilaz.com/panel
|| @License		GPL-2.0+
|| @License URI	http://www.gnu.org/licenses/gpl-2.0.txt
|| 
|| NOTE: Rename this file from "config-sample.php" to "config.php". If you
||       don't rename it, all your config and settings will be overwritten
||       when updating Dilaz Panel Options.
|| 
*/

defined('ABSPATH') || exit;

# Option parameters
$parameters = array(
	'option_name'     => 'dilaz_options', # must be unique. Used to save settings.
	'option_prefix'   => 'dilaz_panel', # must be unique. Not used to save settings.
	'use_type'        => 'theme', # 'theme' if used within a theme OR 'plugin' if used within a plugin
	'default_options' => true, # whether to load default options.
	'custom_options'  => false, # whether to load custom options.
	'page_slug'       => 'dilaz_panel', # should be unique.
	'page_title'      => __('Dilaz Panel', 'dilaz-panel'), # The text to be displayed in the title tags of the page when the menu is selected.
	'menu_title'      => __('Dilaz Panel', 'dilaz-panel'), # The text to be used for the menu.
	'options_cap'     => 'manage_options', # The capability required for this menu to be displayed to the user.
	'menu_icon'       => '', # dashicon menu icon.
	'menu_position'   => null, # position in menu order. Works with top-level menu only.
	'parent_slug'     => '', # The slug name for the parent menu (or the file name of a standard WordPress admin page).
	'admin_bar_menu'  => true, # 'true' to show panel in admin bar menu.
	'import_export'   => true, # 'true' to enable import/export field.
	'log_title'       => __('Changelog', 'dilaz-panel'),
	'log_url'         => '#', # leave empty to disable.
	'doc_title'       => __('Documentation', 'dilaz-panel'),
	'doc_url'         => '#', # leave empty to disable.
	'support_title'   => __('Support', 'dilaz-panel'),
	'support_url'     => '#', # leave empty to disable.
);