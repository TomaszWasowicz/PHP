<?php

$serverName = "mssql8.wshe.local";
$connectionInfo = array( "Database"=>"Synchronizacja_test", "UID"=>"sync_moodle_test", "PWD"=>"Heb-aQu82");
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if( $conn ) {
    echo "Connection established\n";
}else{
    echo "Connection could not be established";
    die( print_r( sqlsrv_errors(), true));
}
$sql = "SELECT imie, nazwisko  FROM Synchronizacja_test.dbo.StudenciESS";
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

while($row = sqlsrv_fetch_array($stmt, SQLSRV_FETCH_ASSOC)){
    echo $row['imie']." , ".$row['nazwisko']."<br />";
}

sqlsrv_free_stmt($stmt);

sqlsrv_close($conn);

?>







