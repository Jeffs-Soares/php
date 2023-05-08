<?php

$conta1 = [
    "titular" => "Jeff",
    "saldo" => 1000
];
$conta2 = [
    "titular" => "Mari",
    "saldo" => 800
];
$conta3 = [
    "titular" => "Ethan",
    "saldo" => 300
];

$contasCorrentes = [$conta1, $conta2, $conta3];

foreach($contasCorrentes as $conta){
    echo $conta["titular"] . PHP_EOL;
}

foreach($contasCorrentes as $key => $conta){
    echo  $key. ' ' . $conta["titular"] . PHP_EOL;
}
