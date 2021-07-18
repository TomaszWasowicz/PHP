<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Metoda GET</title>
</head>

<body>

<form action="actionGet.php" method="get">
    Name: <input type="text" name="name" /><br /><br />
    Age: <input type="text" name="age" /><br /><br />
    <input type="submit" name="submit" value="Submit" />
</form>


<?php   // W metodzie $_GET zbierane są dane  SĄ WIDOCZNE W ADRESIE i wprowadzone do formy
// atrybut 'action' powoduje wyslanie danych do pliku php, tutaj: first.php



?>

</body>
</html>
