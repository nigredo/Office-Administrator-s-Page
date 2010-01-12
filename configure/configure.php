<?php
/*
 * Created on Jan 12, 2010
 *
 */

/*********************************************************************************************/ 
error_reporting(E_ALL);
ini_set('display_errors', 1);
ignore_user_abort(true);

$cfg = array
(
    // This settings have to be in database.
    'site_name' => 'admin.awiki.net',
    'hostname' => 'www.admin.awiki.net',
	'url' => rtrim(dirname($_SERVER['PHP_SELF']), '/\\'),

    // Database config.
    'database' => array
    (
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '3ch0r00t',
        'base' => 'opa_admin'
    ),
    
    'record_per_page' => '25',
    'links_per_page'  => '5'
);
 
define('LIBRARY', 'library' . DIRECTORY_SEPARATOR);

/*********************************************************************************************/ 
// Database connection.
require_once('library/connect.php');

/*
 * Classes.
 */
require_once(API_CLASSES . 'Sql.class.php');
require_once(API_CLASSES . 'Session.class.php');

/*
 * Function.
 */
require_once(API_FUNCTION . 'core.php');
require_once(API_FUNCTION . 'Date.php');
require_once(API_FUNCTION . 'Files.php');

?>
