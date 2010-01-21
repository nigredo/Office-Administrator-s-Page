<?php
/* 
 * Modules class
 */
class Modulo {
    function __construct() {
        $dir_handle = @opendir($path) or die("Unable to open $path");
        while ($file = readdir($dir_handle))
        {
            if($file!="." && $file!="..")
            $module_name = explode(".",$file); // В названии файлов нельзя будет юзать точку. Надо будет потом продумать.
        }
        closedir($dir_handle);
    }

    function __destruct() {
    }
}
?>
