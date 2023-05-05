<?php

$arr = [21];

array_push($arr, 888, 9999);

$arr[] = 777;
$arr[] = 'LUL';
$arr[] = [1,2,3];

$arr2 = [...$arr[5]];


var_dump($arr2);
