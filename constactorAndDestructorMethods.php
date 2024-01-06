<?php
//Class থেকে নতুন কোনো object তৈরী হওয়ার সময় যে মেথড স্বয়ংক্রিয় ভাবে এবং সবার আগে execute হয়,
//PHP তে তাকে constructor Method বলে;

//----------------__construct Method-----------------

class constructor{
    public function __construct(){
        echo "Welcome To PHP constructor Method. \n";
    }
    public function SayHi(){
        return "This Is Function Method.\n";
    }
}

$obj = new constructor;
echo $obj->SayHi();


class consta{
    public $meth = "";

    public function __construct($meth=" Store House \n"){
        $this->math = $meth;
        echo "This is my data".$this->math;
    }
    public function ThisDAta(){
        return "This is Data Upload File"."\n";
    }
}
$aubj = new consta;
echo $aubj->ThisDAta();




class makecar{
    private $model;
    public function __construct ($model){
        $this->model = $model;
    }
    public function GetCar(){
        return "The car model is: " . $this->model."\n";
    }
}
$object = new makecar("Noha"); /*যদি কোনো class এর Constructor Method এ Parameter দেওয়া থাকে,
 তাহলে সেই Constructor Method এ Argument পাঠাতে হলে class object এর সাথে 
 parenthesis “( )” দিয়ে আর্গুমেনট পাঠাতে হবে।*/

echo $object->GetCar();



//----------------Destructor Method-----------------

/*Object এর কাজ শেষ হওয়ার সময় class এর মধ্যে যে মেথড স্বয়ংক্রিয় ভাবে execute হয় বা সবার শেষে execute হয়,
PHP তে তাকে Destructor Method বলে*/

class Distac{
    public function __destruct(){
        echo "This is Destructor File Destructor \n";
    }
    public function __construct(){
        echo "This Destructor File Construct\n";
    }
    public function Mydatas(){
        echo "Hello I am Destruct File Data \n";
    }
}
$objat = new Distac;
echo $objat->Mydatas();
Echo "\n \n";



class disfile{
    private  $name;
    public function __construct($val){
        echo $this->name = $val . "\n";
    }
    public function MyHello(){
        echo "Hello World \n";
    }
    public function __destruct(){
        echo "Bye bye $this->name!";
    }
}

$aubj = new disfile("Emoinna");
$aubj->MyHello();


class difainer{
    
    public function hwlloworld(){
        echo "This is echo data ";
    }
    public function __destruct(){
        echo " this is distrac";
    }
}
$aubja = new difainer;
$aubja->hwlloworld();

class thisclass{
    private $nameas;
    public function __construct($nameas){
        echo $this->nameas = $nameas;
    }
    public function myfunck(){
        echo "This is my func data ";
    }
    public function __destruct(){
        echo "Bye bye $this->nameas!";
    }
}
$myobject = new thisclass("Emon khan");
$myobject->myfunck();