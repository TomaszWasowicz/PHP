<?php
function multiplyByTwo($number){  // zmienna w deklarowanej funkcji to parametr
    $answer = $number*2;
    echo $answer;
}

multiplyByTwo(3); //kiedy uzywam funkcji zmienna to argument

function setCounter($num=10){
    echo"Counter is ".$num;
}

setCounter(42); //zmienna jest ustawiona na 42
setCounter();       //zmienna jest zmienna default, tutaj 10
//zmienne default powinny deklarowane najbardziej na prawo