<?php
/*
 * Author: alphazo_id
 *
 * Date: Jan 21, 2010
 * Time: 12:25:12 PM
 */
print ('<div id="left">');
$menu = new Menu();
$menu->add_item('TEST 01','.');
$menu->add_item('TEST 02','.');
$menu->add_item('TEST 03','.');
$menu->add_item('TEST 04','.');
unset($menu);
print ('</div>');
?>
