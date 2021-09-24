<?php

for($i=0;$i<10; $i++){
    if($i%2==0){
        continue; // ominięcie licz podzielnych przez 2
    }
    echo $i . '';
}
