<?php


$array = [
    1 => 'um',
    2 => 'dois',
];


foreach($array as $chave => $num){
    echo $chave . $num . PHP_EOL;
}

echo count($array);