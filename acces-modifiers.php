<?php


            //---------public---------
class myclass{
    public $publicVar = "This is Public Modifiers property";

    public function publicMethod(){
        return "This is a public Method";
    }
}
$obj = new myclass;
echo $obj->publicVar."\n".$obj->publicMethod();




class mypublic{
    public $propertya = "\nThis is public property";

    public function this_method(){
        echo $this->propertya;
    }
}
$objq = new mypublic;
echo $objq->this_method();




class rohan{
    public $rohane ="\nThis is rohanis data";

    public function rohana(){
        return "Hello mis rohanea";
    }
}
$rohan = new rohan;
echo $rohan->rohane ."\n". $rohan-> rohana()."\n";





            //---------protected---------

class parentsClass{
    protected $myProp = "This is My Proparty";
    protected function Thisfunc(){
        return "This is function Return";
    }
}
class chaildclass extends parentsClass{
    public function accessProtected(){
        echo $this->myProp."\n";
        echo $this->Thisfunc();
    }
}
$objTa = new chaildclass();
$objTa->accessProtected();



class thisclasse{
    protected $thear = "\nThis is protected";

    protected function myacceass(){
        return "This is function return";
    }
}
class chiled extends thisclasse{
    public function accessProtected(){
        echo $this->thear."\n".$this->myacceass();
    }
}
$objectclass = new chiled();
$objectclass->accessProtected();



class myclased{
    protected $dolar = "\nHello Indean dollar";

    protected function thisfunc(){
        return "This Is dolore function";
    }
}
class chailda extends myclased{
    public function thisfan(){
        echo $this->dolar."\n".$this->thisfunc();
    }
}
$classobj = new chailda;
$classobj->thisfan();





            //---------private---------

class praivetclass{
    private $praivetVar = "\nThis is praivet var data ";

    private function PraivetMethod(){
        return "This is Return Praivet maathod ";
    }
    public function accesPraivet(){
        Echo $this->praivetVar . "\n". $this->PraivetMethod();
    }
}

$obag = new praivetclass();
$obag->accesPraivet();






class privet{
    private $value ="This is a last data ";

    private function futher(){
        return "\nThis is difearants that all";
    }

    public function localdata(){
        echo $this->value."\n".$this->futher();
    }
}

$aobjet = new privet();
$aobjet->localdata();