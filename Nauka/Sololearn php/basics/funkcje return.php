<?php
function multi($num1, $num2){
    $res = $num1 * $num2;
    return $res; // return zatrzymuje funkcje i zwraca parametr
}

echo multi(8,3);

function func($arg)  {
    $result = 0;
    for($i=0; $i<$arg; $i++) {
        $result = $result + $i;
    }
    return $result;
}
echo func(5);

// 4+3+2+1 ( mniejsze od 5)