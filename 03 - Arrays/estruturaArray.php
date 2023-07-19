<?php


$array = [
    1 => 'um',
    2 => 'dois',
];


foreach($array as $chave => $valor){
    echo $chave. ' ' . $valor . PHP_EOL;
}

echo count($array);