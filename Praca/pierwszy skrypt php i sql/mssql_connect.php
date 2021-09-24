<?php

$serverName = "mssql8.wshe.local";
$connectionInfo = array( "Database"=>"Synchronizacja_test", "UID"=>"sync_moodle_test", "PWD"=>"Heb-aQu82");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
    echo "Connection established";
}else{
    echo "Connection could not be established";
    die( print_r( sqlsrv_errors(), true));
}
$sql = "SELECT imie, nazwisko, email  FROM Synchronizacja_test.dbo.StudenciESS";
$query = sqlsrv_query($conn,$sql );
if($query === false) {
    die( print_r( sqlsrv_errors(), true));
}
$stmt = sqlsrv_query($conn,$sql);
if( $stmt === false ) {
    die( print_r( sqlsrv_errors(), true));
}

if( sqlsrv_fetch( $stmt ) === false) {
    die( print_r( sqlsrv_errors(), true));
}

$imie = sqlsrv_get_field($stmt, 0);
echo "$imie";

$nazwisko = sqlsrv_get_field($stmt, 1);
echo "$nazwisko";

$email = sqlsrv_get_field($stmt, 2);

echo "$email";

sqlsrv_close($conn);

?>







