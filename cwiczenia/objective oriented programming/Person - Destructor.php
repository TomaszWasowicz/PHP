<?php


class Person{
    public function __destruct(){
        echo "Object destroyed";
    }
}
$p = new Person();
// unset($p); - dziala tak samo jak dekonstruktor