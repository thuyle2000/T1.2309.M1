<?php
echo "Demo Global Variable \n";
$x = 2024;

function fnPrint(){
    global $x;
    echo "In function fnPrint(), x = $x \n";
    $x++;
}

//goi ham fnPrint()
fnPrint();

echo "Outside function fnPrint(), x = $x \n"; 