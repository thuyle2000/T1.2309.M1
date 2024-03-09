<?php   
echo "Demo Arrays in PHP \n";
echo "* Mang 1 chieu \n";

$a1 = [12, 78, 40, 5 ,17];
echo " - a1[] = ";
for ($i=0; $i <count($a1)-1; $i++) { 
    echo " $a1[$i], ";
}
echo " $a1[$i] \n";

$a2 = ["xuan",'ha',"thu","dong"];
echo " - a2[] = ";
for ($i=0; $i <count($a2)-1; $i++) { 
    echo " $a2[$i], ";
}
echo " $a2[$i] \n";

echo " - Mang ket hop a2[]: \n";
foreach ($a2 as $key => $value) {
    echo "\t $key => $value \n";
}
