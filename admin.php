<?php
/*
|| --------------------------------------------------------------------------------------------
|| Admin Options Panel
|| --------------------------------------------------------------------------------------------
||
|| @package     Dilaz Panel
|| @subpackage  Panel
|| @version     2.4.6
|| @since       Dilaz Panel 1.0
|| @author      WebDilaz Team, http://webdilaz.com
|| @copyright   Copyright (C) 2017, WebDilaz LTD
|| @link        http://webdilaz.com/panel
|| @License     GPL-2.0+
|| @License URI http://www.gnu.org/licenses/gpl-2.0.txt
|| 
|| NOTE: This options panel requires Dilaz Panel plugin installed. 
|| 
*/

defined('ABSPATH') || exit;

# Load config
file_exists(dirname(__FILE__) .'/config.php') ? require_once dirname(__FILE__) .'/config.php' : require_once dirname(__FILE__) .'/config-sample.php';

# Load metabox options
require_once dirname(__FILE__) .'/includes/load.php';