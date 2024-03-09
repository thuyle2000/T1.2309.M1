<?php
echo "user-defined function demo";

//ham tao ra day so ngau nhien, dem va in ra cac so chan trong day so nay
function fn_random()
{
    $a = [];
    $e = [];
    $cnt = 0;
    for ($i = 0; $i < 10; $i++) {
        $a[$i] = rand(0, 100);
        if ($a[$i] % 2 == 0) {
            $e[$cnt] = $a[$i];
            $cnt++;
        }
    }

    print_r($a);

    if($cnt != 0){
        echo "\n Cac so chan : ";
        print_r($e);
    }

}

//goi ham
fn_random();
