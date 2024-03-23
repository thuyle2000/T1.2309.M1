<?php
//demo tinh truu tuong

use PgSql\Result;

abstract class Shape
{
    public abstract function area(): float;        //ham tinh dien tich
    public abstract function peripheral(): float;  //ham tinh chu vi

    public function print()
    {
        echo " dien tich: " . $this->area() . "\t";
        echo " chu vi: " . $this->peripheral() . "\n";
    }
}

class Circle extends Shape
{
    public function __construct(public $r = 1)
    {
    }
    public function area(): float
    {
        $PI = 3.1415;
        return $PI * $this->r * $this->r;
    }

    public function peripheral(): float
    {
        $PI = 3.1415;
        return 2 * $PI * $this->r;
    }
}


class Rectangle extends Shape
{
    public function __construct(public $w = 10, public $h=5)
    {
    }
    public function area(): float
    {
        return $this->w * $this->h;
    }

    public function peripheral(): float
    {
        $PI = 3.1415;
        return 2 * ($this->w + $this->h);
    }
}

//doan code test
$hcn = new Rectangle(w:20, h:12);
$ht = new Circle(r:2.5);

echo " >> Hinh chu nhat : \n";
$hcn->print();

echo " >> Hinh tron : \n";
$ht->print();
