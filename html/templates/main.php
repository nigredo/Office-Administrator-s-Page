<?php
/*
 * Author: alphazo_id
 *
 * Date: Jan 21, 2010
 * Time: 12:25:47 PM
 */
print ('<div id="main">');
if (isset($_REQUEST['section']))
{
    $section=$_REQUEST['section'];
}
else
{
    $section="ftp";
};
switch($section)
{
    case "ftp":
        load_module("ftp");
    break;
    case "status":
        load_module("status");
    break;
};
print ('</div>');
?>