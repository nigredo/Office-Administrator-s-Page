<?php
/* 
 * Modules class
 */
class Modulo {
    function __construct() {
        $i = 0;
        $dir_handle = @opendir($path) or die("Unable to open $path");
        while ($file = readdir($dir_handle))
        {
            if($file!="." && $file!="..")
            $modules['$i'] = explode(".",$file); // В названии файлов нельзя будет юзать точку. Надо будет потом продумать.
            $i++;
        }
        closedir($dir_handle);
        return($modules);
    }

    function __destruct() {
    }
}
?>
