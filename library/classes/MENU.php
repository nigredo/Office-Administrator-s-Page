<?php
/*
 * Author: alphazo_id
 *
 * Date: Jan 21, 2010
 * Time: 12:58:30 PM
 */
 
class Menu	{
	
function __construct() {
       print ('<ul>\n');
   }

function __destruct() {
       print ('</ul>\n');
   }
 
function add_item($name, $link) {
       print ('<li>\n');
       print ('<a href="'.$link.'">'.$name.'</a>\n');
       print ('</li>\n');
   }

}
 
?>
