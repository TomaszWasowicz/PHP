<?php

/*for (init; test; increment) {    kilka warunkow w jendym parametrze, oddzielone przecinkiem
    code to be executed;            parametry oddzielone średnikiem
}
*/

for ($a = 0; $a <6; $a++){
    echo "Value of a : " . $a . "<br/>";
}

for ($i=0;$i<=10;$i++){ // nieparzyste
    if($i%2 != 0){
        echo $i."</br>";
    }
}

for ($i=0;$i<=10;$i++){ // parzyste
    if($i%2 != 0){
        continue;
    }
    echo $i."</br>";
}