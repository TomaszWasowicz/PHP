<?php

//wartość absolutna z liczby

echo abs(-10.99); // Prints: 10.99
echo abs(127); // Prints: 127

//zaokrąglenie liczby

echo round(1.2); // Prints: 1
echo round(1.5); // Prints: 2
echo round(1298736.821763876); // Prints: 1298737

function calculateDistance($param1,$param2){
    $result = abs($param1 - $param2);
    return $result;
}

echo calculateDistance(-1,4);
echo calculateDistance(4,-1);
echo calculateDistance(3,7);
echo calculateDistance(7,3);

function calculateTip($param1){
    $result = round($param1 + $param1 * 0.18);
    return $result;
}

echo calculateTip(100);
echo calculateTip(35);
echo calculateTip(88.77);

