<?php
$read = file('names.txt');
$count = count($read); //funkcja count liczy obiekt w tablicy
$i = 1;
foreach ($read as $line){
    echo $line;
    if($i<$count){
        echo ', ';
    }
    $i++;
}