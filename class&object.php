<?php
          //class
 class myclass{    // class start
    // class body 
 } //class end


            //object
class objectclass{// class start
    // class body 
}//class end
$myobjhandlar = new objectclass();


            // property - method - constant 
class Simpleclass{
    public $var = "This is my var data";// public property declaration
    private const a="Malishaiya";// private constant declaration

    // public method declaration
    public function myfun(){
        echo $this->var ;
    }
}
$mydata= new Simpleclass;
echo $mydata->myfun()."\n";



                //extranal and intarnal class property , method , constant  
class smplclas{
    public $vr = "Hello simple class";

    public function displayvr() {
        echo $this->vr;        
    }
}
$firstobject = new smplclas;
$firstobject->displayvr() ."\n";
// access class method using Object Variable $firstobject

/* "::" scope resolution operator PHP তে class এর মধ্যে অবস্থিত যেকোনো public static property,
public static method এবং public constant কে class এর বাহিরে যেকোনো কাজে ব্যবহার করতে চাইলে 
“:: scope resolution operator” ব্যবহার করতে হয়। নিচের উদাহরণ দেখুন : */

class scopclas{

    // propery Declaretion
    public $vare = "Helo scope resulation operator";
    public const a= "\nMorokko ";

    // static method Declaretion

    public static function sayhello(){
        echo "\nhello world";
    }
}
scopclas::sayhello();
echo scopclas::a;


class simclass{
    public $variv = "\nHello Indea Madarcud";

    public function saywhay(){
        echo $this->variv;
    }
}
$boje = new simclass;
$boje->saywhay();


class simpleclases{
    static public $varibal = " \nHello Mister Emon";
    const a= "\nNouakhali";
    public function seyiam(){
        echo self::$varibal;
        echo self::a;
    }
}
$obij = new simpleclases();
$obij->seyiam();




class thisclass{
    public $thisvlu= "\nA diferant Data";

    public function thisfun(){
        echo $this->thisvlu;
    }
}
$obaj = new thisclass();
echo $obaj->thisfun();


class thisnewclass{
    public $varil = "\nHello Bangaladesh";


    public function thatat(){
        echo $this->varil;
    }
}
$aobj = new thisnewclass;
 $aobj->thatat();



 class thisclasse{
    public $varakjdh = "\nThis is my Data";

    public function thisaitem(){
        echo $this->varakjdh;
    }
}
$boaj = new thisclasse;
$boaj->thisaitem();



class myclasspr{
    public $vali = "\nThis is valedat data";
    public const a=" \nkhagrachhary";

    public static function this(){
        echo "\nHello bd";
    }
}
myclasspr::this();
echo myclasspr::a;


class myclased{
    public $vara = "Hello Vara";
    public const anam = "\nCumila , Chittgong, Dhaka ";

    public static function thirham(){
        echo "\nMy wish ";
    }
}
myclased::thirham();
echo myclased::anam;


class mycons{
    public $fun = "\nThis Is My Data";
    private const as="\nThis Is My Data value ";

    public function helloiam(){
        echo $this->fun;
    }

    public static function getAsConstant(){
        return self::as;
    }
}
$oabv = new mycons();
$oabv->helloiam();
// mycons::helloiam();
echo mycons::getAsConstant();





class PublicClass{
    public $thisNamelog = " Hello Mister Al Amin Emon";
    public $namezoon = "";
    public $thisNamesside = " Hello Mister Al Amin Emon";
    private $nymane = "";
    

    public function ThisNm($thisNamelog =" "){
        $this->Scendcontainplayer = $thisNamelog;
        return $this;
    } 

    public function Mynamesr($namezoon = " "){
        $this->Nameaidea = $namezoon;
        return "This Is my FootBall Player ".$this->Nameaidea."(69)\n";
    }

    public function MyFunx($nymane = ""){
        $this->Name = $nymane; 
        echo $this;
    }


    

    public function ThisNms($thisNamesside){
        $this->thisNamesmanLast = $thisNamesside;
        return $this;
    }


    public function Naimar(){
        return "\nThis Is my FootBall Player Naimar(10)\n";
    }  
    public function Messi(){
        return "This Is my FootBall Player Messi(10)\n";
    } 
    public function D_mariya(){
        return "This Is my FootBall Player D_mariya (11) \n";
    }
    public function Ronaldo(){
        return "This Is my FootBall Player Ronaldo(CR7)\n";
    } public function Jakira(){
        return "This Is my FootBall Player Jakira (10)\n";
    }
}

$objat = new PublicClass();
$objat->Mynamesr("Emon");
$objat->MyFunx("\nDr Eashan");

$resultse = array(
    $objat->Mynamesr(),
    $objat->Naimar(),
    $objat->Messi(),
    $objat->D_mariya(),
    $objat->Ronaldo(),
    $objat->Jakira()
);

// Print the results from the array
foreach ($resultse as $result) {
    echo $result;
}





// $objat->Mynamesr("\nEmoinna\n");
// $objat->Allplayer();




?>



