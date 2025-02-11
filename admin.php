<?php
/*
|| --------------------------------------------------------------------------------------------
|| Admin Options Panel
|| --------------------------------------------------------------------------------------------
||
|| @package     Dilaz Panel
|| @subpackage  Panel
|| @version     2.5.1
|| @since       Dilaz Panel 1.0
|| @author      Rodgath, https://github.com/Rodgath
|| @copyright   Copyright (C) 2017, Rodgath LTD
|| @link        https://github.com/Rodgath/Dilaz-Panel
|| @License     GPL-2.0+
|| @License URI http://www.gnu.org/licenses/gpl-2.0.txt
|| 
|| NOTE: This options panel requires Dilaz Panel plugin installed. 
|| 
*/

defined('ABSPATH') || exit;

/**
 * Run this later than init but before templates are loaded.
 * @fix: Ensure all required plugins/themes are loaded first.
 * @since v2.5.1
 */
add_action('after_setup_theme', function () {

  # Load config
  file_exists(dirname(__FILE__) . '/config.php') ? require_once dirname(__FILE__) . '/config.php' : require_once dirname(__FILE__) . '/config-sample.php';

  # Load metabox options
  require_once dirname(__FILE__) . '/includes/load.php';
});