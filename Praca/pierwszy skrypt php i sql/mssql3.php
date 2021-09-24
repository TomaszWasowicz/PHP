<?php

$serverName = "mssql8.wshe.local";

$connectionInfo = array( "Database"=>"Synchronizacja_test",
    "UID"=>"sync_moodle_test",
    "PWD"=>"Heb-aQu82");

$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn === false )
{
    die( print_r( sqlsrv_errors(), true));
}
$wynik = sqlsrv_query($conn, "SELECT * FROM Synchronizacja_test.dbo.StudenciESS");


if($wynik === false) {
    die( print_r( sqlsrv_errors(), true));
}
while( $row = sqlsrv_fetch_array($wynik, SQLSRV_FETCH_ASSOC) ) {
    echo $row['idstudent'].", ".$row['login']."</br>";
}