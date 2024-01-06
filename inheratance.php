<?php
class ParentsClass{
    private $name = 0;
    private $login = false;

    public function loggedin(){
        $this->login = true;
    }

    public function  logout(){
        $this->login = false;
    }
    public function isloggedin(){
        return $this->login;
    }
    public function isloggeding(){
        return $this->login;
    }
    public function setName($name){
        if(is_numeric($name) && is_int((int)$name)){
            $this->name = (int)$name;
        }
    }
    public function getName(){
        $this->name;
    }
}

$alart = new ParentsClass();
$alart->loggedin();

$alart->setName("123");
echo "Is logged in: " . ($alart->isloggedin() ? 'Yes':'No');
echo "Name: ".$alart->getName();

class chaildClass extends ParentsClass {
    public function okay(){
        return $this->isloggedin();
    }
}

$object = new chaildClass();
$object->setName("569834");
echo "Child is logged in: " . ($object->okay() ? 'Yes' : 'No');
echo "Child's Name: " . $object->getName();
