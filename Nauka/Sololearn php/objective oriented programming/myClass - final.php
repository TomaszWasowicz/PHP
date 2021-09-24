
<?php // metody finalnej nie mozna nadpisac
        // w odróznieniu od klas i method
        //wlasciwosci nie mogą być finalne

class myClass{
    final function myFunction(){
        echo "Parent";
    }
}
/*
class myClass2 extends myClass{
    function myFunction(){
        echo "Child";
    }
}
*/

//klasy nie mogą dziedziczyc po klasie finalnej
/*
final class myFinalClass{
}
class myClass extends myFinalClass{
}
*/
?>