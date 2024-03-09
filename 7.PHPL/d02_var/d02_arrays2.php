<?php   
echo "Demo Arrays in PHP \n";
echo "* Mang 2 chieu \n";

$a = [
        ['sv01','phi long',89],
        ['sv02','tan phat',95],
        ['sv03','anh huy',59],
        ['sv04','xuan binh',70]
    ];
    
echo " Bang diem sinh vien ";
foreach ($a as $index => $value) {
    echo "\n $index. ";
    foreach ($value as $item) {
        echo " $item";
    }
}