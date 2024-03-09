<?php   
echo "Demo Data Type in PHP \n";
echo "\n - Kieu so nguyen (int): \n";
$a = 10234;
echo " a=$a, MAX-INT=" . PHP_INT_MAX. "\n";

echo "\n - Kieu so thuc (float:real/doule) \n";
$b = 10234.6789;
echo " b=$b, MAX-FLOAT=" . PHP_FLOAT_MAX. "\n";

$x1 = 12; $x2=TRUE; $x3=false; 
$x4="123.678"; 
$x5="123.789usd"; $x6= "usd 123.8907";
echo "\n x1=$x1, x2=$x2, x3=$x3, x4=$x4, x5=$x5, x6=$x6 \n";
echo " - Sau khi su dung ham floatval():";
echo "\n x1=". floatval($x1);
echo "\n x2=". floatval($x2), ", x3 = ". floatval($x3);
echo "\n x4=". floatval($x4);
echo "\n x5=". floatval($x5), ", x6 = ". floatval($x6), "\n";


echo "\n - Kieu luan ly (boolean:true/false) \n";
$b1 = True;
$b2 = FALSE;
echo " b1=$b1, b2=$b2\n";

echo "\n - Kieu null \n";
$c = Null;
echo " c=$c \n";

