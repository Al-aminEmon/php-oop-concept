<?php
class methodchain{
    public $property_name = "";
    public $property_age = "";
    
    public function setName($property_name=""){
        $this->name = $property_name;
    }
    public function setAge($property_age = ""){
        $this->age = $property_age;
    }
    public function getInfo(){
        return "Hello mr ".$this->name.".\nAre you".$this->age." years";
    }
}

$newparsin = new methodchain();
$newparsin->setName("Johan Abram");
$newparsin->setAge(" 23");
echo $newparsin->getInfo();




class myprac{
    public $thisvalname = "";
    public $thisvalage = " ";

    public function Myfnkus($thisvalname = ""){
        $this->name = $thisvalname;
    }
    public function Myfunk($thisvalage = ""){
        $this->age = $thisvalage;
    }
    public function myexodata(){
        return "\nMy name".$this->name . ". \nAnd i am ".$this->age. " Years Old"."\n" ;
    }
}

$myobject = new myprac();
$myobject->Myfnkus("Md.Al-Amin Emon");
$myobject->Myfunk("32");
echo $myobject->myexodata();




class mycaning{
    public $chainName = "";
    public $chainAitem = "";

    public function addname($chainName){
        $this->name = $chainName;
    } 
    public function addItems($chainAitem){
        $this->items = $chainAitem;
    }
    public function thisInfo(){
        return "Helo Mister".$this->name. "\nGive your".$this->items." Data"."\n";
    }
}
$obaj = new mycaning();
$obaj->addname(" Emon");
$obaj->addItems(" Total aitem");
echo $obaj->thisInfo() ."\n";




class thisclase{
    private $namet = "";
    private $contact = "";

    public function thisName($namet){
        $this->namet = $namet; 
        return $this;
    }
    public function thisContact($contact){
        $this->contact = $contact; 
        return $this;
    }
    public function Dataoutput(){
        echo "Ther Name:- ".$this->namet."\nContact Number --".$this->contact;
    }
}
$boj = new thisclase();
$boj->thisName("Emon");
$boj->thisContact("0157121141");
$boj->Dataoutput();





// ----------------private------------------


class lsattryprivate{
    private $nymane = "";
    private $nycontac = "";

    public function MyFunx($nymane = ""){
        $this->Name = $nymane; 
        return $this;
    }
    public function MyConta($nycontac = ""){
        $this->Contact = $nycontac; 
        return $this;
    }
    public function MyINFO(){
        echo "\nThis Name Value is ".$this->Name."\nThis contact ID ". $this->Contact;
    }
}
$ovject = new lsattryprivate();
$ovject->MyFunx("Tanjim Shakib");
$ovject->MyConta("01835764576");
$ovject->MyINFO();

// ----------------protected------------------

class lsattryprotected{
    protected $nymane = "";
    protected $nycontac = "";

    public function MyFunx($nymane = ""){
        $this->Name = $nymane; 
        return $this;
    }
    public function MyConta($nycontac = ""){
        $this->Contact = $nycontac; 
        return $this;
    }
}
class Chaildprotected extends lsattryprotected{
    public function MyINFO(){
        echo "\nThis Name Value is ".$this->Name."\nThis contact ID ". $this->Contact;
    }
}

$ovject = new Chaildprotected();
$ovject->MyFunx("Tanjim Shakib");
$ovject->MyConta("01835764576");
$ovject->MyINFO();

// ----------------public------------------


class lsattrypublic{
    public $nymane = "";
    public $nycontac = "";

    public function MyFunx($nymane = ""){
        $this->Name = $nymane; 
        return $this;
    }
    public function MyConta($nycontac = ""){
        $this->Contact = $nycontac; 
        return $this;
    }
}
class Chaildpublic extends lsattrypublic{
    public function MyINFO(){
        echo "\nThis Name Value is ".$this->Name."\nThis contact ID ". $this->Contact;
    }
}

$ovject = new Chaildpublic();
$ovject->MyFunx("Tanjim Shakib");
$ovject->MyConta("01835764576");
$ovject->MyINFO();
