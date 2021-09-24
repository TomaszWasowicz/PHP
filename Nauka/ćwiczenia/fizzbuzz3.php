<?php

for($i=1;$i<=20;++$i) {
    $out = ($i % 3 ? '' : 'Fizz') . ($i % 5 ? '' : 'Buzz');
    echo ($out ? $out : $i) . "\n";//operator potrójny
}