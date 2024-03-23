<?php 
echo "Array with negative index \n";
$a = array_fill(-6,10,32);
var_dump($a);

foreach ($a as $index => $value) {
    echo "$index => $value \n";
}

for ($i=0; $i <count($a) ; $i++) { 
    echo "$i => a[$i]=$value \n";
}