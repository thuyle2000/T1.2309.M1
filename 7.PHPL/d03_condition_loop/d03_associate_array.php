<?php 
echo "Demo associative array";

$ds = [
    "sv01" => "Son phi Long",
    "sv10" => "Nguyen thanh Vu",
    "sv05" => "Le tan Phat",
    "sv20" => "Nguyen mnh Tri",
    "sv02" => "Nguyen Xuan Binh",
    "sv12" => "Ngo minh Tuan"
];


echo "\nDanh sach sinh vien \n";
foreach ($ds as $id => $name) {
    echo "$id. $name \n";
}

echo "\n\n Danh sach sinh vien - sap xep theo ten \n";
asort($ds);
foreach ($ds as $id => $name) {
    echo "$id. $name \n";
}

echo "\n\n Danh sach sinh vien - sap xep ma so \n";
ksort($ds);
foreach ($ds as $id => $name) {
    echo "$id. $name \n";
}

echo "\n\n Danh sach sinh vien - sap xep ma so (Z-A)\n";
krsort($ds);
foreach ($ds as $id => $name) {
    echo "$id. $name \n";
}