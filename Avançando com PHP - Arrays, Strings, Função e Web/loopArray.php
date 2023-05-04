<?php


$idades = [1,2,3,4];

for($i=0; $i < 4; $i++){
    echo "$idades[$i]" . PHP_EOL;
}

echo "============" . PHP_EOL;

echo count($idades) . PHP_EOL;

echo "===========" . PHP_EOL;

$arr = [4,3,2,1];

foreach($arr as $value){
    echo "$value" . PHP_EOL;
}