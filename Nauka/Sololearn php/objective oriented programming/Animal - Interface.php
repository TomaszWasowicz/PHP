<?php
interface AnimalInterface{      // lista metod, ktore klasa musi zaimplemtowac
    public function makeSound();    // ale nie zawiera zanych implementacji

}

class Dog implements AnimalInterface{
    public function makeSound(){
        echo "Woof! <br/>";
    }
}
class Cat implements AnimalInterface{
    public function makeSound(){
        echo "Meow! <br/>";
    }
}

$myObj1 = new Dog();
$myObj1->makeSound();

$myObj2 = new Cat();
$myObj2->makeSound();

?>