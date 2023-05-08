<?php

$arr = [1,2,3,4,5];

$arr[] = 6;


foreach($arr as $item){
    echo $item;
}

//Or Informando a chave

echo PHP_EOL;

$arr2 = [1,2,3,4,5];

$arr2[5] = 6;


foreach($arr2 as $item){
    echo $item;
}

