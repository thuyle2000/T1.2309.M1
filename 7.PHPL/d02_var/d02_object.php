<?php 

//dinh nghia class Student
class Student{
    //ham dung
    public function __construct(
        public $id = "sv01",
        public $name = "phi long",
        public $yob = 2002
    )
    {
    }

    public function __toString()
    {
        return "id: $this->id, ten: $this->name, nam sinh: $this->yob";
    }
}

echo "Demo Object in PHP \n";
$sv1 = new Student();
$sv2 = new Student(id:"sv05", name:"anh tuan");
$sv3 = new Student(name:"tan phat", yob:2000, id:"sv10");
$sv4 = new Student("sv00","thanh vu",2004);

echo " - sv1 :[$sv1] \n";
echo " - sv2 :[$sv2] \n";
echo " - sv3 :[$sv3] \n";
echo " - sv4 :[$sv4] \n";


