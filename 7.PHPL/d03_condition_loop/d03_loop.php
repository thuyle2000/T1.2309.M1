<?php 
echo "Demo Loop For \n";
//in bang cuu chuong n
$n=7;
echo " >> Bang cuu chuong $n \n";
for ($i=1; $i <10 ; $i++) { 
    echo "$i * $n = ". ($i*$n) ."\n";
}

echo "\n Demo Loop While \n";
//in can bac 2 cua so ngau nhien <=100

echo " >> Can bac 2 cua cac so <=100 \n";
while(true){
    $n = rand(0,120);
    if($n>100){
        break;
    }
    echo " - can bac 2 cua [$n] = " . sqrt($n) . "\n";
}