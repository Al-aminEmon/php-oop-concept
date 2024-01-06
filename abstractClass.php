<?php

abstract class AbstractClassA{
    abstract protected function getName($name);
}
class ChildClassA extends AbstractClassA{
    public function getName($name){
        return "Hi".$name;
    }
}
$objectA = new ChildClassA;
echo $objectA->getName(" Emon");

   


// abstract class AbstractClassB{
//     abstract protected function Getnamse($namea);
// }

// class ChildClassb extends AbstractClassB{}

