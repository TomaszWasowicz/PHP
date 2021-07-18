<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"/>
    <title>Metoda POST</title>
</head>

<body>

<form action="first.php" method="post">
    <p>Name: <input type="text" name="name" /></p>
    <p>Age: <input type="text" name="age" /></p>
    <p><input type="submit" name="submit" value="Submit" /></p>
</form>


<?php               // Metody $_POST i $_GET zbierają dane wprowadzone do formy
                    // atrybut 'action' powoduje wyslanie danych do pliku php, tutaj: first.php



?>

</body>
</html>





