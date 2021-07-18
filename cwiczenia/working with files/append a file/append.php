<?php
$mojPlik = "text.txt";
$zmienna = fopen($mojPlik, 'a'); // 'a' dopisuje tekst nie nadpisuje jak 'w'
fwrite($zmienna, "Prosty tekst ktory dopisuje\n");
fclose($zmienna);

