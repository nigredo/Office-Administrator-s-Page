<?php
function sql2Human ($date)
{
    list($yyyy, $mm, $dd ) = explode("-", $date);
    if (!checkdate($mm, $dd, $yyyy))
    {
        return false;
    }
    else 
    {
        $date = sprintf("%02d-%02d-%d", $dd,$mm,$yyyy);
        return $date;
    }
}

function ValidateDate($date)
{
    // Check if exist such date. (date format: dd-mm-yyyy)
    // Cut date for some strings to check it.
    list($dd, $mm, $yyyy) = explode("-", $date);
    
    // Check if date exist. 
    if (is_numeric($dd) && is_numeric($mm) && is_numeric($yyyy))
    {
        if (!checkdate($mm, $dd, $yyyy)) 
        {
            return false;
        }
        else 
        {
            // Reverse date to mysql format.
            $date = sprintf("%d-%02d-%02d", $yyyy,$mm,$dd);
            return $date; 
        }
    }
    return false;
}
?>
