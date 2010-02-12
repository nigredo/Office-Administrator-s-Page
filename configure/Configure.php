<?php
/*
 * Created on Jan 12, 2010
 *
 */

/*********************************************************************************************/ 
error_reporting(E_ALL);
ini_set('display_errors', 1);
ignore_user_abort(true);

define('SITE_NAME','Office Administrator\'s Page');
define('HOSTNAME','www.admin.alphazoid.org');
define('URL', rtrim(dirname($_SERVER['PHP_SELF']), '/\\'));

// OAP database settings
define ('DB_HOST','localhost');
define ('DB_USER','admin');
define ('DB_PASS','3ch046m1n');
define ('DB_DATABASE','oap_admin');
define ('DB_PREFIX','');

// MySQL administrator
define ('ROOT_DB_HOST','localhost');
define ('ROOT_DB_USER','root');
define ('ROOT_DB_PASS','3ch0r00t');
define ('ROOT_DB_DATABASE','mysql');
define ('ROOT_DB_PREFIX','');

// Email database
define ('MAIL_DB_HOST','localhost');
define ('MAIL_DB_DATABASE','postfix');
define ('MAIL_DB_USER','postfix');
define ('MAIL_DB_PASS','3ch0m41l');
define ('MAIL_DB_PREFIX','');

// SMS database user
define ('SMS_DB_HOST','87.248.185.251');
define ('SMS_DB_USER','root');
define ('SMS_DB_PASS','3ch0r00t');
define ('SMS_DB_PREFIX','');

// HTTP database user
define ('HTTP_DB_HOST','localhost');
define ('HTTP_DB_DATABASE','httpd_vhosts');
define ('HTTP_DB_USER','httpd');
define ('HTTP_DB_PASS','3ch011nk');
define ('HTTP_DB_PREFIX','');

// FTP database user
define ('FTP_DB_HOST','87.248.185.251');
define ('FTP_DB_DATABASE','postfix');
define ('FTP_DB_USER','root');
define ('FTP_DB_PASS','3ch0r00t');
define ('FTP_DB_PREFIX','');


define ('RECORD_PER_PAGE','25');
define ('LINKS_PER_PAGE','5');
 

/*********************************************************************************************/
/*  DO NOT EDIT FROM HERE!
/*********************************************************************************************/
define ('API_LIBRARY', 'library' . DIRECTORY_SEPARATOR);
define ('API_CLASSES','library/classes' . DIRECTORY_SEPARATOR);
define ('API_FUNCTIONS','library/functions' . DIRECTORY_SEPARATOR);

define ('FRONTEND_PATH', 'html' . DIRECTORY_SEPARATOR);
define ('FRONTEND_TPL_PATH', 'html/templates' . DIRECTORY_SEPARATOR);

define ('MODULES_PATH', 'library/modules' . DIRECTORY_SEPARATOR);
define ('IMAGES_PATH', 'images' . DIRECTORY_SEPARATOR);

require_once(API_CLASSES . 'SQL.php');

require_once(API_LIBRARY . 'Auth.php');

require_once(API_CLASSES . 'MENU.php');
require_once(API_FUNCTIONS . 'Core.php');
require_once(API_FUNCTIONS . 'Date.php');
require_once(API_FUNCTIONS . 'Files.php');
?>
