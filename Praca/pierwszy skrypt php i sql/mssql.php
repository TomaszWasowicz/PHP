<?php

$user = 'sync_moodle_test';
$password = 'Heb-aQu82';

$conn = new PDO("dblib:Server=mssql8.wshe.local;Database=$user", "$user", '$password');
    if( $conn )
    {
        echo "Connection established.<br />";
    }
    else
    {
        echo "Connection could not be established.<br />";
    }
?>



