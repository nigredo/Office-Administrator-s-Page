<?php
/*
 * Created on Jan 12, 2010
 *
 */
// Select witch mode is defined.
$connection_link = @mysql_connect($cfg['db_production']['host'], $cfg['db_production']['user'], $cfg['db_production']['pass']);
mysql_query("SET NAMES 'UTF8'");
if (!$connection_link) 
{
	die ("The production connection is down");
}

$database_link = @mysql_select_db($cfg['db_production']['base'], $connection_link);
if (!$database_link) 
{
	die ("The production database is down");
}
?>
