<?php
echo "Demo Static Variable \n";

function fnPrint(){
    static $x = 100;
    $y=1;
    echo " static x:  $x , ";
    echo " local  y:  $y \n\n";
    $x++; $y++;
}

//goi ham fnPrint()
echo "call function fnPrint() lan 1: " , fnPrint(); 
echo "call function fnPrint() lan 2: " , fnPrint();  
echo "call function fnPrint() lan 3: " , fnPrint();  
echo "call function fnPrint() lan 4: " , fnPrint();  
