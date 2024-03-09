<?php
//demo named arguments : tham so co ten trong loi goi ham
function display($age=20, $name="Phi Long", $gender=true)  {
    echo "================\n";
    echo "Ho ten : {$name} \n";
    echo "Tuoi : {$age} \n";
    $gt = $gender ? "nam":"nu";
    echo "Gioi tinh : {$gt} \n";
}
echo "\n Named argument Demo \n";
display(21, "Tan Phat",true);
display();
display(name:"My Trinh", gender:false,age:18);
display(gender:true, age:15, name:"Ngoc Huy");
display(name:"Xuan Binh");

//demo match expression
//tinh phu cap dua tren bac luong: A->100, B->60, C->30, others 10
//  switch(bacluong) 
//      case 'A': pc =100; 
//      case 'B': pc=60; 
//      case 'C': pc = 30;
//      default: pc = 10;
echo "\n Match Exression Demo";
$bacLuong = 'B';
$pc =10;
$pc = match($bacLuong){
    'A'=>100,
    'B'=>60,
    'C'=>30
};
echo "\n Bac luong: {$bacLuong} => Phu cap: {$pc} \n";