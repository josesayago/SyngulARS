<?php
/*
 * SyngulARS
 * Plugin URI: http://syngulars.com
 * Version: 0.1
 * Author: Jose SAYAGO
 * Author URI: http://wplatino.com/
 * License: GNU General Public License 2.0 (GPL) http://www.gnu.org/licenses/gpl.html
 */
/* 
 * Copyright 2015 SyngulARS de Jose Luis SAYAGO y Jose de Jesus SAYAGO
 * code@wplatino.com
 * SyngulARS is an unregistered trademark of WP Latino, 
 * and cannot be re-used in conjunction with the GPL v2 usage of this software 
 * under the license terms of the GPL v2 without permission.
 */
// Paths
define( 'SYNGULARS_PATH', 'syngulars', true );
define( 'SYNGULARS_ROOT', dirname( __FILE__ ), true );
define( 'SYNGULARS_SYSTEM', SYNGULARS_ROOT . '/core/system/', true );
define( 'SYNGULARS_ASSETS', SYNGULARS_PATH . '/core/assets/', true );
define( 'SYNGULARS_STYLES', SYNGULARS_ASSETS . 'css/', true );
// Current Version
define( 'SYNGULARS_VERSION', '0.1', true );
// Classes
require_once SYNGULARS_SYSTEM . '_options.php';
require_once SYNGULARS_SYSTEM . '_dashboard.php';
//require_once SYNGULARS_SYSTEM . '_editor.php';
// Load Languages
load_plugin_textdomain('syngulars', false, SYNGULARS_ASSETS . 'lang/');
?>