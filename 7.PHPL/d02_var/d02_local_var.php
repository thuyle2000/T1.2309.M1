<?php
echo "Demo Local Variable \n";
function fnPrint(){
    $x = 100;
    echo "In function fnPrint(), x = $x \n";
}

//goi ham fnPrint()
fnPrint();

echo "Outside function fnPrint(), x = $x \n"; //bao loi !!!