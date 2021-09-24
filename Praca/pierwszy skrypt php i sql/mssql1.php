<?php

$dsn = 'Test';
$user = 'sync_moodle_test';
$password = 'Heb-aQu82';

$conn = odbc_connect($dsn,$user,$password);

if($conn)
{
    echo "Connection established.<br />";
}
else
{
    echo "Connection could not be established.<br />";
}






