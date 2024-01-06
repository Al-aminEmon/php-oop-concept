<?php

class thisclass{
    private $run = "";

    protected function MyFun($run = ""){
        $this->run = $run;
        return $this;
    }
    public function accessData(){
        return "This Is Run private data from protected MyFun Method (" . $this->run." )";
    }
}
$object = new thisclass();
$object->MyFun("Emon");
echo $object->accessData();
