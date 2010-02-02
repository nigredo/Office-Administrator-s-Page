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
    load_module($section);
}
else
{
    $section="ftp";
};
print ('</div>');
?>