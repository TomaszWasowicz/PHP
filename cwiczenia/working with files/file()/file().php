<?php
$read = file('names.txt'); // czyta caly plik jak tablice
foreach ($read as $line){       // foreach poniewaz $read jest tablica
    echo $line ." , "; // wydrukowanie, odstepy sa przecinkami
}

?>

