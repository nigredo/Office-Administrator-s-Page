<?php
function show_service_status($service)
{
    $command = "ps aux | grep ".$service." | grep -v grep";
    return (exec($command));
}

show_service_status("vsftpd");
?>
