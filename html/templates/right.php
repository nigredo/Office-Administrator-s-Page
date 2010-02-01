<?php
/*
 * Author: alphazo_id
 *
 * Date: Jan 21, 2010
 * Time: 12:25:37 PM
 */

$server_name = exec('uname -n');
$arch = exec('uname -m');
$os_type = exec('uname -s');
$os_release = exec('uname -r');
$kernel = exec('uname -i');

print ('<div id="right">');

print ('<div id="info">');
print ('Server name: '.$server_name.'<br>');
print ('Server arch: '.$arch.'<br>');
print ('OS: '.$os_type.'<br>');
print ('OS release: '.$os_release.'<br>');
print ('Kernel: '.$kernel.'<br>');
print ('</div>');
print ("<h3>Services status</h3>");
print ('<div id="right">');
load_module("status");
show_usr_service_status('vsftpd');
show_usr_service_status('apache22');
show_usr_service_status('mysql-server');
show_etc_service_status('sshd');
show_etc_service_status('absd');
print ('</div>');
print ('</div>');
?>
