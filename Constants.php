<?php

class goodbe {
    const message = "Thank you for visiting W3Schools.com";
}
echo goodbe::message;

class thats{
    const mytext = "Thamx for watching this";
    public function byebyebd(){
        echo self::mytext;
    }
}
$good = new thats();
$good->byebyebd();

class test{
    const myworld = "\n Tnx ";
    public function gof(){
        echo self::myworld;
    }
}
$myd = new test();
$myd->gof();

class mydata{
    const HelloData = "This is data";
    public function gif(){
        echo self :: HelloData;
    }
}
$abj = new mydata();
$abj->gif();

class constdata{
    const mane = "This maneyal data";
    public function thisa(){
        echo self :: mane;
    }
}
$aoubj = new constdata();
$aoubj->thisa();

class mydts{
    const mainec = "The real parson";
    public function acces(){
        echo self::mainec;
    }
}
$myob = new mydts();
$myob->acces();

class myconstdata{
    const mydat = "This is my data ";
    public function accse(){
        echo self::mydat;
    }
}

$aubjst = new myconstdata();
$aubjst->accse();

class funcata{
    const method = "128654";
    public function accsas(){
        echo self::method; 
    }
}
$accesdatamy = new funcata();
$accesdatamy->accsas();