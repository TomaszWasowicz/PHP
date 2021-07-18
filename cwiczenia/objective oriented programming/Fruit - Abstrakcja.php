<?php
abstract class Fruit{ // abstrakcyjne funkcje moga pojawic sie tylko
    private  $color;    //abstrakcyjnych klasach

    abstract public function eat();

    public function setColor($c){
        $this->color = $c;
    }
}

class Apple extends  Fruit{
    public function eat(){
        echo "Omnomnom";
    }
}

$obj = new Apple();
$obj->eat();
?>