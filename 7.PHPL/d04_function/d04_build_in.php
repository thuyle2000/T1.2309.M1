<?php 
echo "Demo build-in functions \n";
$v1 = -123;
$v2 = 123.4567;
$v3 = "hello, 123 !";
$v4 = true;
$v5 = ["dong","tay","nam", "bac"];
$v6 = ["spring"=>"mua xuan","summer"=>"mua he","fall"=>"mua thu","winter"=>"mua dong"];

echo " - gettype(): \n";
echo "v1 = $v1 ". ", => " .gettype($v1) . "\n";
echo "v2 = $v2 ". ", => " .gettype($v2) . "\n";
echo "v3 = $v3 ". ", => " .gettype($v3) . "\n";
echo "v4 = $v4 ". ", => " .gettype($v4) . "\n\n";

echo " - var_dump(): \n";
echo "v5 => " .gettype($v5) . "\n";
var_dump($v5);

echo "v6 => " .gettype($v6) . "\n";
var_dump($v6);

echo " - abs(): \n";
echo "v1 = $v1 ". ", => abs(v1) " .abs($v1) . "\n";