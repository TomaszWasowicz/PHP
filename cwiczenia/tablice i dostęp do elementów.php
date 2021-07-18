<?php

$names = array("Dawid", 1, true);
$myArray[0] = "John";
$myArray[1] = "<strong>PHP</strong>";
$myArray[2] = 21;

echo<<<END

$names[2]</br>
$names[0]</br>

$myArray[0] is $myArray[2] and knows $myArray[1]

END;