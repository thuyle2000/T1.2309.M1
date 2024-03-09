<?php
echo " DEMO lap trinh switch-case \n";
/*
ham tinh tien thuong (bonus) cho nv dua vao bac luong (level) a=>1000, b=>800, c=>400, d=>100, others=>0
*/

function getBonus($level): int
{
    switch ($level) {
        case 'a':
        case 'A':
            $bonus = 1000;
            break;
        case 'b':
        case 'B':
            $bonus = 800;
            break;
        case 'c';
        case 'C':
            $bonus = 400;
            break;
        case 'd':
        case 'D':
            $bonus = 100;
            break;
        default:
            $bonus = 0;
            break;
    }
    return $bonus;
}


$level = "b";
echo " Bac luong $level => tien thuong : " . getBonus($level) . "\n";

$level = "d";
echo " Bac luong $level => tien thuong : " . getBonus($level) . "\n";

$level = "A";
echo " Bac luong $level => tien thuong : " . getBonus($level) . "\n";

$level = "F";
echo " Bac luong $level => tien thuong : " . getBonus($level) . "\n";
