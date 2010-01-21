<?php
/*
 * Author: alphazo_id
 *
 * Date: Jan 21, 2010
 * Time: 12:58:30 PM
 */
 
class Menu	{
	
function __construct() {
       print ('<ul>');
   }

function __destruct() {
       print ('</ul>');
   }
 
function add_item($name, $link) {
       print ('<li>');
       print ('<a href="'.$link.'">'.$name.'</a>');
       print ('</li>');
   }

}
 
?>
