<?php 
echo "Demo JSON in PHP \n";

//khai bao chuoi s, chua noi dung 1 sv bieu dien theo cau truc json
$s = '{"id":"SV01", "name":"Phi Long", "gender":true, "yob":2004}';

//bien chuoi s thanh doi tuong json sv
$sv = json_decode($s);

//in ra cac thuoc tinh cua dt $sv
foreach ($sv as $key => $value) {
    echo "\t $key => $value \n";
}

