<?php

class person{
    private $name = "";
    private $age = "";
    
    public function setName($name=""){
        $this->name=$name;
        return $this;
    } 
    public function setAge($age="23"){
        $this->age = $age;
        return $this;
    }
    public function getInfo(){
        echo "Hello, My name is ".$this->name."And \nMy age is ".$this->age;
    }
}
$object = new person();
$object->setName("Emon\n");
$object->setAge("30");
$object->getInfo();




class myclass{
    private $myName = "";
    private $myAge = "";

    public function thisName($myName = ""){
        $this->name = $myName;
        return $this;
    }
    public function thisAge($myAge = ""){
        $this->age = $myAge;
        return $this;
    }
    public function myInfo(){
        echo "This is ".$this->name."\n And \nHe is ".$this->age."Years old";
    }
}
$obj = new myclass();
$obj->thisName("Al Amin");
$obj->thisAge("23 ");
$obj->myInfo();



class thisclass{
    private $Name = "";
    private $Age = "";

    public function MyName($Name = ""){
        $this->name = $Name;
        return $this;
    }    
    public function MyAge($Age = "97"){
        $this->Age = $Age;
        return $this;
    }
    public function MyINFO(){
        echo "\nName :-".$this->name."\nThis Age:-".$this->Age;
    }
}

$aubj = new thisclass();
$aubj->MyName("Md. Al-Amin Emon");
$aubj->MyAge("23");
$aubj->MyINFO();




class publicClass{
    public $mYName = "";
    public $aGe = "";

    public function nameSet($mYName = ""){
        $this->mYName = $mYName;
        return $this;
    }
    public function nameAgE($aGe = "86"){
        $this->aGe = $aGe;
        return $this;
    }
}

class Newchaild extends publicClass{
    
    public function InfoExt(){
        echo "\nName :-".$this->mYName."\nThis Age:-".$this->aGe;
    }
}

$objet = new Newchaild();
$objet->nameSet("Mister Rohan");
$objet->nameAgE(" 34");
$objet->InfoExt();



class protectedModitire{
    protected $arji = "";
    protected $arja = "";

    public function Thisnames($arji = ""){
        $this->Namer = $arji;
        return $this;
    }
    public function ThisAger($arja = ""){
        $this->Ager = $arja;
        return $this;
    }
    public function InfoData(){
        echo "\nThis Datas Name :- " .$this->Namer." \nThis Data Value".$this->Ager;
    }
}

$lastobj = new protectedModitire();

$lastobj->Thisnames("Hige Securitay Programing Data(HSPD)")->ThisAger("Constractor,Const,Method,Propart,Abstract,Inheratance etc |");

$lastobj->InfoData();