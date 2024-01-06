<?php
class myclass{
    public $mydata = "This is my Data";
    private const ad= "This is my const Data";

    public function Thinam(){
        echo $this->mydata."\n".myclass::ad;
    }
}
$obj = new myclass();
$obj->Thinam();


// -------------------------------------------



class defaine{
    protected $variable = "\nThis is my protected variable";
    protected function thisfun(){
        return "This is my function";
    }
}
class chaild extends defaine{
    public function accesfun(){
        echo $this->variable."\n".$this->thisfun();
    }
}

$aub = new chaild;
$aub->accesfun();


// -------------------------------------------



class praivetclass{
    private $thisVar = "\nThis is my private variable";
    private function Myfun(){
        return "This is my private  Method";
    }  
    public function lastfun(){
        echo $this->thisVar."\n".$this->Myfun();
    }
}

$puobject = new praivetclass;
$puobject->lastfun();


// --------------------protected-----------------------


class Thisclassd{
    protected $mYData = "This is my practice data";
    protected function Mymethod(){
        return "This is my Method Function";
    }
}

class Thischaildw extends Thisclassd{
    public function Mydatafun(){
        return "\n".$this->mYData."\n".$this->Mymethod();
    }
}
$aubg = new Thischaildw();
echo $aubg->Mydatafun();



// --------------------private-----------------------


class Thisclassa{
    private $mYData = "This is my practice data";
    private function Mymethod(){
        return "This is my Method Function";
    }   
    public function Mydatafun(){
        echo "\n".$this->mYData."\n".$this->Mymethod();
    }
}

$aubg = new Thisclassa();
$aubg->Mydatafun();


// --------------------public-----------------------

class Thisclasss{
    public $mYData = "This is my practice data";
    public function Mymethod(){
        return "This is my Method Function";
    }
}
class Thischailda extends Thisclasss{
    public function Mydatafun(){
        return "\n".$this->mYData."\n".$this->Mymethod();
    }
}
$aubg = new Thischailda();
echo $aubg->Mydatafun();



