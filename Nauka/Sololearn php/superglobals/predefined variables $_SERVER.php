<?php
echo $_SERVER['SCRIPT_NAME']."</br>";

// zwraca ścieżkę do obecnego skryptu
//$_SERVER to tablica, zawierająca informacje
//takie jak: nagłówki, ścieżki, lokacje skryptów

$addr = $_SERVER['SCRIPT_NAME']."</br>";
echo $addr;

echo $_SERVER['HTTP_HOST'];


