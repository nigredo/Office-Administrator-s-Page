<?php
/* 
 * Modules class
 */
class Modulo {
    function __construct() {
        $dir_handle = @opendir($path) or die("Unable to open $path");
        echo "Directory Listing of $path<br/>";
        while ($file = readdir($dir_handle))
        {
            echo "<a href='$file'>$file</a><br/>";
        }
        closedir($dir_handle);
    }

    function __destruct() {
    }
}
?>
