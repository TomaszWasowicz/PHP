<?php
// Write your code below:
function increaseEnthusiasm($string){
    return $string. "!";
};
increaseEnthusiasm("hi");
echo increaseEnthusiasm("man");

function repeatThreeTimes($name){
    return ($name. $name. $name);

}
echo repeatThreeTimes("Franz");

echo increaseEnthusiasm("Franz");