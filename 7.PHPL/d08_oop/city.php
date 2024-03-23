<?php 

include_once "trait.php";

//dinh nghia class [City] mo ta 1 thanh pho
class City{
    //khai bao cac property members
    public $id, $name, $country;
    public $zipcode;

    //dinh nghia cac method members
    public function output(){
        return "id=$this->id, ten=$this->name, quoc gia=$this->country, zipcode=$this->zipcode";
    }

    public function getName(){
        return $this->name->upper();
    }

    //khai bao su dung trait T
    use T;
}



//doan code test 
$c1 = new City;
echo $c1->output() . "\n";

$c2 = new City;
$c2->id = "SG";
$c2->name = "Saigon";
$c2->country = "Viet Nam";
$c2->zipcode = 70000;
echo $c2->output(),"\n\n";

$c2->greeting();



include_once "country.php";
echo "c2 instanceof City ? ";
var_dump($c2 instanceof City);

echo "c2 instanceof Country ? ";
var_dump($c2 instanceof Country);

