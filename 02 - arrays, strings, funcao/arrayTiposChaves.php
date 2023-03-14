<?php


//PHP só trabalha com string e números inteiros - chave 

$array = [

    1 => "a",
    "1" => "b",
    true => "d"

];

foreach($array as $item){

    echo $item . PHP_EOL;

};




