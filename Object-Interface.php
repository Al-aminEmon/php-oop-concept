<?php

class myClass{

  public const thistext = "This is midel text";
  private $propertayName =" ";
  public $propertayAge = "";



  public function propName($propertayName,$propertayAge){
    $this->name = $propertayName;
    $this->age = $propertayAge;
    echo $this->name."Is a name \n".$this->age.$this->age."This is age \n";
  }
}
echo myClass::thistext;
$aub = new myClass();

$aub->propName("This name ","This age ");

class myClases{
  public $names ;
  public $color;
  
  public function __construct($names,$color){
    $this->name = $names;
    $this->color = $color;
  }
  public function __destruct(){
    echo "This is distract data name".$this->name."\nAnd this is har colore". $this->color;
  }
}

$apple = new myclases(" Rose"," Red");
