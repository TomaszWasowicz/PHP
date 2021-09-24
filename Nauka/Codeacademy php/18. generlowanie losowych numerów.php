<?php

$LosowymaksymalnyInteger = getrandmax();// najwyższy losowy integer
echo $LosowymaksymalnyInteger;
echo rand(); // Prints a number between 0 and $LosowymaksymalnyInteger

echo rand(1, 2); // Prints either 1 or 2
echo rand(5, 10); // Prints a number between 5 and 10 (inclusive!)
echo rand(1, 100); // Prints a number between 1 and 100 (inclusive!)

