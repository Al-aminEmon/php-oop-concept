<?php
// trait mytrait{
//     public function sayHello(){
//         return "Hello\n";
//     }
//     public function SayWorld(){
//         return "World\n";
//     }
// }

// include("My.php");

// class variable{
//     use My;
// }
// $objact =  new variable;
// $objact->sayHello();
// $objact->SayWorld();


class boss{
    public function sayhelloto(){
        echo "Say my data storage file\n";
    }
}
trait mytray{
    public function sayhelloto(){
        echo "Say hello From Trait\n";
    }
}
class chaild extends boss{
    use mytray;
    public function sayhelloto(){
        echo "Hello from chaild class\n";
    }
}
$objacjt= new chaild;
$objacjt->sayhelloto();



class bash{
    public function saywhay(){
        echo "This is sayWhay text\n";
    }
}
trait myty{
    public function sayWhat(){
        echo "This is say whay data \n";
    }
}
class thisChaild extends bash{
    use myty;
    public function sayit(){
        echo "this is say it method\n";
    }
}
$aobjac = new thisChaild;
$aobjac->saywhay();
$aobjac->sayWhat();
$aobjac->sayit();