<?php
/*
 * Author: alphazo_id
 *
 * Date: Jan 21, 2010
 * Time: 12:25:12 PM
 */
print ('<div id="left">');
$menu = new Menu();
$menu->add_item('FTP Management','?section=ftp');
$menu->add_item('Email Management','?section=sms');
$menu->add_item('MySQL Management','?section=voip');
$menu->add_item('Apache Management','?section=voip');
unset($menu);
print ('</div>');
?>
