<?php
/*
 * Created on Jan 12, 2010
 *
 */
$permitedExtension = array ('jpg','jpeg','png','doc','txt','gif','rtf','pdf');
function UploadedFile ($taget_directory, $permitedExtension)
{
    foreach ($_FILES as $fileKey => $fileValue)
    {
        if (is_uploaded_file($_FILES[$fileKey]['tmp_name'])) 
        {
            $filename = strtolower(str_replace(' ', '', $_FILES[$fileKey]['name']));
            $basefilename = preg_replace("/(.*)\.([^.]+)$/","\\1", $filename);
            $ext = preg_replace("/.*\.([^.]+)$/","\\1", $filename);
    
            if (in_array($ext, $permitedExtension)) 
            {
                $filename = GenerateRandomValue(10).".".$ext;
                if (!move_uploaded_file($_FILES[$fileKey]['tmp_name'], $taget_directory.$filename)) 
                {
                    return false;
                }
                else 
                {
                    return $filename;
                }
            }
            else 
            {
                return false;
            }
        }
    }
    return false;
}

function GenerateRandomValue ( $length, $type = "mixed", $caseSensitive = 0, $firstDigitPositive = 1 )
{
    $randomValue = "";
    $type = strtolower($type);
    srand ((double) microtime() * 1000000);
    while (strlen($randomValue) < $length)
    {
        if ($type == "digits" || $type == "integer") 
        {
            $char = strval(rand(0, 9));
        }
        elseif ($type == "hex" && !$caseSensitive)
        {
            $randomValue .= substr (md5(uniqid(rand())), 0, $length);
        }
        else
        {
            $char = chr(mt_rand(0, 255));
        }
        switch ($type)
        {
            case "digits":
            
            case "integer":
                if (($firstDigitPositive && ereg('^[1-9]$', $char)) || (!$firstDigitPositive && ereg('^[0-9]$', $char)))
                {
                    $randomValue .= $char;
                }
                break;

            case "hex":
                if (eregi('^[0-9a-f]$', $char))
                {
                    $randomValue .= $char;
                }
                break;
            
            case "mixed":
                if (eregi('^[0-9a-z]$', $char))
                {
                    $randomValue .= $char;
                }
                break;

            case "chars":
                if (eregi('^[a-z]$', $char))
                {
                    $randomValue .= $char;
                }
                break;
        }
    }

    if (!$caseSensitive)
    {
        $randomValue = strtolower($randomValue);
    }

    return substr ( $randomValue, 0, $length );
}
?>
