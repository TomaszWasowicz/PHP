<?php
$first_rank_player = 'Beginner';
$second_rank_player =& $first_rank_player;
echo $second_rank_player;

$first_rank_player = "\nIntermediate";
echo $second_rank_player;


/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";
$order =& $very_bad_unclear_name;
// Write your code here:
$order = $order . " and a big burger";


// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";