<?php 
//demo tinh ke thua , xay dung lop cha Person
class Person{
    public function __construct (public $id="P1", public $name="no name", protected $gender=true )
    { }

    private function output(){
        $gt = $this->gender?"male":"female";
        return "[id:$this->id, name:$this->name, gender:$gt]";
    }

    protected function display(){
        return $this->output();
    }

    public function print(){
        echo "[id:$this->id, name:$this->name]\n";
    }
}

//demo tinh ke thua , xay dung lop con Student
class Student extends Person{
    public function __construct(public $id="SV1", public $name="Phi Long", public $gender=true, public $mark=0)
    {
        parent::__construct($id, $name, $gender);
    }

    //override ham print() cua lop cha Person
    public function print(){
        echo "[id:$this->id, name:$this->name, final mark:$this->mark]\n";
    }
}

//doan code test 
$p  = new Person;
$p->print();

$p2  = new Person(id:"P01", gender:true, name:"Long");
$p2->print();

$sv = new Student;
$sv->print();

$sv2 = new Student(id:"SV01",name:"Trinh", gender:false, mark:100);
$sv2->print();