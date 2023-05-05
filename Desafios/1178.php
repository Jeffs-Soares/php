<?php

$arr = [200];

for($i=0; $i < 100; $i++){

    $lul = number_format($arr[$i], 4);

    echo "N[$i] = $lul" . PHP_EOL;
    $arr[$i + 1] = $arr[$i] / 2 ;

}