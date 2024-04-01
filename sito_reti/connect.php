
<?php 

$link = sqlsrv_connect($serverName, $connectionInfo); 

if ($link == "") { 

    die ('Non riesco a connettermi: ' . sqlsrv_error()); 

} 








