<?php   

define("_SchoolName","Aptech");  //dinh nghia hang [_SchoolName]
echo "My School: " . _SchoolName ."\n";

echo "Demo math function in PHP \n";
$n1 = 15; $n2 = 3;
$x1 = 123.6785; $x2=123.45678;
echo " n1=$n1, n2=$n2 \n";
echo " x1=$x1, x2=$x2 \n";

echo " -> max(x1,n1,n2) = ". max($x1,$n1,$n2) ."\n";
echo " -> min(n1,n2,x2) = ". min($x2,$n1,$n2) ."\n\n";

echo " -> ceil(x2) = ". ceil($x2) ;
echo " -> ceil(x1) = ". ceil($x1) ."\n";

echo " -> floor(x2) = ". floor($x2) ;
echo " -> floor(x1) = ". floor($x1) ."\n";

echo " -> round(x2) = ". round($x2) ;
echo " -> round(x1) = ". round($x1) ."\n\n";

echo " -> sqrt(n1) = ". sqrt($n1) . "\n";
echo " -> pow(n1, n2) = ". pow($n1, $n2) ."\n\n";
echo " -> pi() = ". pi() ."\n\n";


