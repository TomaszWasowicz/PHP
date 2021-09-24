<?php


class Person{
    public $name;
    public $age;
    public function __construct($name, $age){
        echo $this->name = $name; //bez echo nie wystwiela
        echo $this->age = $age;     //bez echo nie wystwiela
    }
}
$p = new Person("Dawid", 42);
