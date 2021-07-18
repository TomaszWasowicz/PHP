<?php


class Person{
    public $age;                //wlasnosc
    public function speak() {   // metoda
        echo "hi!";
    }

}
$p1 = new Person();     //instancja klasy
$p1->age = 23;          //dostep do wlasciwosci klasy
echo $p1->age;
$p1->speak();
