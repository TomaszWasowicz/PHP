<?php
for($i=1;$i<=20;++$i){
    $out ='';
    if (!($i%3)){
        $out .= 'Fizz';
    }
    if (!($i%5)){
        $out .= 'Buzz';
    }
    if (!$out) $out = $i;
    echo $out."\n";

}
