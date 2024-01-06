<?php
class PublicClass {
    public $thisNamelog = "Hello Mister Al Amin Emon";
    public $namezoon = "";
    public $thisNamesside = "Hello Mister Al Amin Emon";
    
    public function ThisNm($thisNamelog = "") {
        // Assign the argument value to the property
        $this->thisNamelog = $thisNamelog;
        return $this;
    } 

    public function Mynamesr($namezoon = "") {
        // Assign the argument value to the property
        $this->namezoon = $namezoon;
        return "This Is my Football Player " . $this->namezoon . "(69)";
    }


    public function ThisNmsas($thisNamesside = "") {
        // Assign the argument value to the property
        $this->thisNamesside = $thisNamesside;
        return $this;
    }

    public function Naimar() {
        return "This Is my Football Player Naimar (10)";
    }  

    public function Messi() {
        return "This Is my Football Player Messi (10)";
    } 

    public function D_mariya() {
        return "This Is my Football Player D_mariya (11)";
    }

    public function Ronaldo() {
        return "This Is my Football Player Ronaldo (CR7)";
    }

    public function Jakira() {
        return "This Is my Football Player Jakira (10)";
    }
}

$objat = new PublicClass();

// Set properties using the methods and provide comments
$objat->ThisNm("Hello Mister Al Amin Emon Yor Are Feelings Paine ? ?");
$objat->Mynamesr("Emon");
$objat->ThisNmsas("Hello Mister Al Amin Emon You are so unlucky");

// Create an array with method calls
$resultse = array(
    $objat->ThisNm(),
    $objat->Mynamesr(),
    $objat->ThisNmsas(),
    $objat->Naimar(),
    $objat->Messi(),
    $objat->D_mariya(),
    $objat->Ronaldo(),
    $objat->Jakira()
);
print_r($resultse);
// Print the results from the array
// foreach ($resultse as $result) {
//     echo $result;
// }
?>
