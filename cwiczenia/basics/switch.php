<?php
/*
switch (n) {
  case value1:
    //code to be executed if n=value1
    break;
  case value2:
     //code to be executed if n=value2
     break;
  ...
  default:
    // code to be executed if n is different from all labels
}
*/

$today = "Mon";

switch($today){
    case "Mon":
        echo "Today is Monday."."</br>";
        break;
    case "Tue":
        echo "Today is Tuesday."."</br>";
        break;
    case "Wed":
        echo "Today is Wednesday."."</br>";
        break;
    case "Thu":
        echo "Today is Thursday."."</br>";
        break;
    case "Fri":
        echo "Today is Friday."."</br>";
        break;
    case "Sat":
        echo "Today is Saturday."."</br>";
        break;
    case "Sun":
        echo "Today is Sunday."."</br>";
        break;
    default:
        echo "Invalid day."."</br>";
}

$animal = "Dachshund";

switch ($animal){
    case "Cow":
        echo "Moo.";
        break;
    case "Chihuahua":
    case "Golden retriever":
    case "Dachshund":
        echo "Bark Bark.";
        break;
    case "Whale";
        echo "Woosh.";
        break;
    default:
        echo "Can't recognize the animal.";
}

$x = 1;
switch ($x){  // bez instrukcji break program biegnie do końca pętli
    case 1:
        echo "One";
    case 2:
        echo "Two";
    case 3:
        echo "Three";
    default:
        echo "No match";
}

