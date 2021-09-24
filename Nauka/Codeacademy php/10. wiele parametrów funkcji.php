<?php
function divide($num_one, $num_two)
{
    return $num_one / $num_two;
}

echo divide(12, 3); // Prints: 4
echo "\n";
echo divide(3, 12); // Prints: 0.25

function calculateArea($height, $width)
{
    return $height * $width;
}

echo calculateArea(2, 3);

function calculateVolume($height, $width, $depth)
{
    return $height * $width * $depth;
}

echo calculateVolume(3, 4, 6);