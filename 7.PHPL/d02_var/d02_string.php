<?php
echo " Demo String function() in PHP \n";
$s1 = "Hello, nguyen anh tuan. how are you today?";
$s2 = "tuan";
$s3 = "hoang";
$c1 = "an"; $c2="en";
echo " s1 = $s1 \n";
echo " s2 = $s2, s3=$s3 \n";
echo " c1 = $c1, c2=$c2 \n\n";

echo " -> strlen(s1): ". strlen($s1). "\n";
echo " -> str_word_count(s1): ". str_word_count($s1). "\n";
echo " -> strpos(s1,s2): ". strpos($s1,$s2). "\n";
echo " -> strpos(s1,s3): ". strpos($s1,$s3). "\n";
echo " -> str_replace(c1,c2,s1): ". str_replace($c1,$c2,$s1). "\n";
echo " -> ucwords(s1): ". ucwords($s1). "\n";
echo " -> strrev(s1): ". strrev($s1). "\n";