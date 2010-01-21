<?php
/*
 * Created on Jan 12, 2010
 *
 */

/*********************************************************************************************/ 
error_reporting(E_ALL);
ini_set('display_errors', 1);
ignore_user_abort(true);

define('SITE_NAME','admin.awiki.net');
define('HOSTNAME','www.admin.awiki.net');
define('URL', rtrim(dirname($_SERVER['PHP_SELF']), '/\\'));

define ('DB_HOST','localhost');
define ('DB_USER','root');
define ('DB_PASS','3ch0r00t');
define ('DB_DATABASE','opa_admin');
define ('DB_PREFIX','ADM_');
define ('RECORD_PER_PAGE','25');
define ('LINKS_PER_PAGE','5');
 
define ('API_LIBRARY', 'library' . DIRECTORY_SEPARATOR);
define ('API_CLASSES','library/classes' . DIRECTORY_SEPARATOR);
define ('API_FUNCTIONS','library/functions' . DIRECTORY_SEPARATOR);

require_once(API_LIBRARY . 'Auth.php');
require_once(API_LIBRARY . 'Connect.php');
require_once(API_CLASSES . 'Sql.class.php');

require_once(API_FUNCTION . 'Core.php');
require_once(API_FUNCTION . 'Date.php');
require_once(API_FUNCTION . 'Files.php');

$DB = new Database(DB_HOST,DB_USER,DB_PASS,DB_DATABASE);

?>
