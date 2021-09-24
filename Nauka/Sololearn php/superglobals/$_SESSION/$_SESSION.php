<?php
/*Start the session, zmienne color i name
są dostępne przez całą sesję, dopóki użytkownik nie zamknie przeglądarki
i na wielu stronach*/

session_start();
// start sesji, uzyte przed jakimikolwiek tagami HTML

$_SESSION['color'] = "red"; //
$_SESSION['name'] = "John";
?>

