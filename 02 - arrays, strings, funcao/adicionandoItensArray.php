<?php

$conta1 = [
    "nome" => "Jeff",
    "saldo" => 1500
];

$conta2 = [
    "nome" => "Mari",
    "saldo" => 1000
];

$contasCorrentes = [
    1234 => $conta1,
    4321 => $conta2
];


//adicionando direto com a chave

$contasCorrentes[1367] = [
    "nome" => "Palmeiras não tem mundial!",
    "saldo" => 100

];


foreach($contasCorrentes as $conta){

    echo $conta["nome"] . PHP_EOL;

}

//adicionando de forma estática

$numbers = [1,2,3,4,5];

$numbers[10] = 6;

foreach($numbers as $number){

    echo $number . PHP_EOL;

};

echo "==========" . PHP_EOL;

// Adicionando ao final ou no próximo disponível

$numbers[] = 7;

foreach($numbers as $number){

    echo $number . PHP_EOL;

};


