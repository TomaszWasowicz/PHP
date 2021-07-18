<?php
$myfile = fopen("names.txt", "w"); // w - nadpisuje tekst

$txt = "John\n";        // 1 linia tekstu, nowa linia
fwrite($myfile, $txt);
$txt = "David\n";       // 2, odrębna linia tekstu
fwrite($myfile, $txt);

fclose($myfile);        //zamkniecie pliku

?>


