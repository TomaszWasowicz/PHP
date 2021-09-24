<?php
$file = "text.txt";
$zmienna = fopen($file, 'a'); // 'a' dopisuje tekst nie nadpisuje jak 'w'
fwrite($zmienna, "Prosty tekst ktory dopisuje\n");
fclose($zmienna);

