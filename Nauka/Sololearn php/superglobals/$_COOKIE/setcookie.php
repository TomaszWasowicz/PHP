<?php
/*
setcookie(name, value, expire, path, domain, secure, httponly);
*/
// funckja setcookie MUSI byc umieszczona przed tagami HTML
$value = "John";
setcookie("user", $value, time() + (86400 * 30), '/'); // ilosc sekund w dniu * 30 , / - cookie dostepne tylko podczas sesji

if(isset($_COOKIE['user'])) {           //funkcja isset sprawdza czy Cookie jest set - ustawione
    echo "Value is: ". $_COOKIE['user'];
}
//Outputs "Value is: John"