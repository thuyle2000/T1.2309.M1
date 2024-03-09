<?php 
echo "Demo pass by reference \n";

function fn_value($a, $b){
    $tem = $a;
    $a = $b;
    $b = $tem;

    echo " - trong ham fn_value(), a = $a, b =$b \n";
}

function fn_reference(&$a, &$b){
    $tem = $a;
    $a = $b;
    $b = $tem;

    echo " - trong ham fn_value(), a = $a, b =$b \n";
}

$a = 100; $b = 76;

echo " * truoc khi goi ham fn_value(): a = $a, b = $b \n";
fn_value($a, $b);
echo " * sau khi goi ham fn_value(): a = $a, b = $b \n\n";

echo " * truoc khi goi ham fn_reference(): a = $a, b = $b \n";
fn_reference($a, $b);
echo " * sau khi goi ham fn_reference(): a = $a, b = $b \n\n";