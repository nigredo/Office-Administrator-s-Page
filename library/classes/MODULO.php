<?php
/* 
 * Modules class
 */
function load_module($module)
{
    $module_file = MODULES_PATH."/".$module.".phpm";
    if file_exists($module_file)
    {
        include ($module_file);
    }
    else
    {
        print ("Sorry, no such module - ".$module);
    }
}
?>
