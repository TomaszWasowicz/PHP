<?php


class Animal{
    public $name;
    public function hi(){
        echo "Hi from Animal";
    }
}
class Dog extends Animal{       //dziedziczenie jest osiągniete poprzez
}                               //wyrazenie 'extends'

$d = new Dog();
$d->hi();
