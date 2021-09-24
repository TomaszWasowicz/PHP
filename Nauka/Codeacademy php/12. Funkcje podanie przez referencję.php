<?php

$string_one = "you have teeth";
$string_two = "toads are nice";
$string_three = "brown is my favorite color";

// Write your code below:
function convertToQuestion(&$string)
{
    $string = "Do you think ".$string."?\n";
    echo $string;
}
convertToQuestion($string_one);
convertToQuestion($string_two);
convertToQuestion($string_three);

echo convertToQuestion($string_one);
echo convertToQuestion($string_two);
echo convertToQuestion($string_three);