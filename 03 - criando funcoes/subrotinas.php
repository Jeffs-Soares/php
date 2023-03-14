<?php


//função, local isolado para codificação

function exibeMensagem($mensagem){

    echo $mensagem . PHP_EOL;

};


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


$contasCorrentes["1234"]["Saldo"] -= 1000;


foreach ($contasCorrentes as $conta) {

    exibeMensagem($conta["nome"] . " " . $conta["Saldo"]); 
}







