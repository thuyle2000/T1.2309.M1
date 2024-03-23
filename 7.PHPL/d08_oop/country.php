<?php
//dinh nghia class [Country] mo ta 1 quoc gia
class Country
{
    //khai bao cac property members
    public $id, $name;
    public $area;

    //dinh nghia ham dung (contructor) de khoi tao gia tri ban dau cho cac thuoc tinh 
    public function __construct($code="VN", $name="Viet Nam", $dienTich=331690) {
        $this->id = $code;
        $this->name = $name;
        $this->area = $dienTich;
    }

    //dinh nghia method members
    public function ouput() : string {
        return "id: $this->id, ten QG: $this->name, dien tich: $this->area km2";
    }

    //override ham toString() de tra ve chuoi mo ta noi dung doi tuong T
    public function __toString()
    {
        return "id: $this->id, ten QG: $this->name, dien tich: $this->area km2";
    }


    //ham huy : thi hanh khi doi tuong duoc gan null
    public function __destruct()
    {
        echo "\t >> endding live of country [$this->name]\n";
    }
}

//doan code test class Country
$q1 = new Country();
echo $q1->ouput() . "\n";

$q2 = new Country(name:"Thai Lan", dienTich:513115, code:"TL");
echo $q2->ouput() . "\n";

$q3 = new Country("RF", "Lien bang Nga", 17098246);
echo $q3->ouput() . "\n";
echo $q3 . "\n\n";
$q3 = null;