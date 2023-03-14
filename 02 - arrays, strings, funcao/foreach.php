<?php

$conta1 = [
    "nome" => "Jeff",
    "Saldo" => 1500
];

$conta2 = [
    "nome" => "Mari",
    "Saldo" => 1000
];

$contasCorrentes = [
    1234 => $conta1,
    4321 => $conta2
];


foreach($contasCorrentes as $conta){

    echo $conta["nome"] . PHP_EOL;

}

foreach($contasCorrentes as $cpf => $conta){

    echo $conta["nome"]. " "."$cpf"  . PHP_EOL;

}
