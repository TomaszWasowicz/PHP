<?php


class myClass{
    static $myStaticProperty = 42;      //statyczna wlasnosc, mozna jej uzyc bez tworzenia obiektu
    static function myStaticMethod(){ //metoda statyczna, mozna jej uzyc bez tworzenia obiektu
        echo self::$myStaticProperty; // dostep do wlasnosci statycznej
    }
}
myClass::myStaticMethod();          //1 sposób, bez tworzenia obiektu

echo myClass::$myStaticProperty;    //2 sposób, bez tworzenia obiektu

$obj = new myClass();
echo $obj->myStaticMethod();        //3 sposób, tworzenie klasy
?>