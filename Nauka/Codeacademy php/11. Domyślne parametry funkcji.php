<?php
function greetFriend($name = "old chum") // domyślny wartość parametru
{
    echo "Hello, $name!";
};
greetFriend("Marvin"); // Prints: Hello, Marvin!
greetFriend(); // Prints: Hello, old chum!


function calculateTip($total_cost, $tip = 20)
{
    return $total_cost + ($total_cost * $tip / 100);
}

echo calculateTip(100, 25);
echo calculateTip(100);
echo calculateTip(65, 15);

