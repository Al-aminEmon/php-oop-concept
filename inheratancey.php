<?php
class myclass{
    public $name;
    public $data;

    public function __construct($name,$data){
        $this->name =$name;
        $this->data = $data; 
    }
    protected function info(){
        return "Name : ".$this->name." Data :".$this->data;
    }
}


//-------------childclass-----------------
class childclass extends myclass{
    public $age; 

    public function __construct($name,$data,$age){
        $this->age = $age;
        $this->name =$name;
        $this->data = $data; 
    }

    public function message(){
       return "My Name :".$this->name. " And I have " . $this->data." I am ".$this->age."\n"; 
    }
}

$object = new childclass("Emon","This data ", "23");
echo $object->message();


//--------------------------------
class mytv{
    public function tv(){
        return"Thanx for watching tv";
    }
}

class chaild extends mytv{
    public function tv (){
        return "this is tv chanall \n";
    }

}
//---------------------------------
class frute{
    public $name ;
    public $color ;
    
    public function __construct($name , $color){
        $this->name = $name;
        $this->color = $color;
    }
    public function info(){
        echo "The Frute is ".$this->name." and the color is".$this->color;
    }
}

class stabarry extends frute{
    public function message(){
        echo "Am I a fruit or a berry\n";
    }
}
$savry = new stabarry("Staberry"," Red\n");
$savry->message();
$savry->info();


//---------------------------------

class myfrute{
    public $namea;
    public $abuta;

    public function __construct($namea,$abuta){
        $this->namea = $namea;
        $this->about = $abuta;
    }
    private function thisfun(){
        echo "This frute name is ".$this->namea." and this is".$this->about;
    }
}
class mynew extends myfrute{
    static public function into(){
        echo "this function are static\n"; 
    }
}
mynew::into();
$aub = new myfrute(" Apple "," Apple also");
// $aub->thisfun();


class frot{
    public $rong;
    public $right;

    public function __construct($rong , $right){
        $this->rong = $rong;
        $this->right = $right;
    }
    public function addcontent(){
        return "This is Rong ".$this->rong." and This is Right ".$this->right."Answer.\n";
    }
}
class childfort extends frot{
    public function funNam(){
        echo "This is Data store system\n";
    }
}

$obja = new childfort("Shak Hasina hes Die","Bongobondo Mojib die.");
echo $obja->addcontent();
$obja->funNam();
//----------------------------------------
class publi{
    public $frutw;
    public $colors;
    public function __construct($frutw,$colors){
        $this->fol = $frutw;
        $this->rong = $colors;
    }
    public function Mydata(){
        echo "The fruit is " . $this->fol . "and the color is " .$this->rong."\n";
    }
}
class childta extends publi{
    public $waite;
    public function __construct($frutw,$colors,$waite){
        $this->fol = $frutw;
        $this->rong = $colors;
        $this->waite = $waite;
    }
    public  function into(){
        echo "This fol is ".$this->fol."\nThis color ".$this->rong." and the weight is".$this->waite;
    }
}
$thisob = new childta("Komola ","Komola rong"," 3 kg \n");
$thisob->Mydata();
$thisob->into();



class classname{
    public $nameEm ;
    public $dataos;
    public function __construct($nameEm,$dataos){
        $this->name = $nameEm;
        $this->data= $dataos;
    }
    public function extdata(){
        echo "Tha victem Name :".$this->name." And His data : ".$this->data;
    }
}
class childfromparents extends classname{
    public $new;
    public function thisis($nameEm,$dataos,$new){
        $this->name = $nameEm;
        $this->data= $dataos;
        $this->new = $new;
    }
    public function mynewup(){
        return "Tha victem Name :".$this->name." And His data : ".$this->data." new updet to his contact number";    
    }
}

$thisobj = new childfromparents("Adhatya"," Dhaka"," 01571235325");
$thisobj->extdata();
$thisobj->mynewup();

class myclaseNAme{
    public $ename;
    public $namne;
    public function __construct ( $ename , $namne){
        $this->ename = $ename;
        $this->namne = $namne;
    }
    public function extandedata(){
        echo "Tha victem Name :".$this->ename." And His data : ".$this->namne;
    }
}
class thischaild extends myclaseNAme{
    
}
