<?php

$people = array("David"=>"27", "Amy"=>"21", "John"=>"42"); // tablica asocjacyjna, przypisuje wartosci do 'kluczy'
// albo
$people['David'] = "27";
$people['Amy'] = "21";
$people['John'] = "42";


echo $people["David"].'</br>'; // konkatenacja funkcji echo  i wyrazenia break line z html
echo $people["Amy"].'</br>';
echo $people["John"].'</br>';