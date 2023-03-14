

<?php


$conta1 = [
    "nome" => "Jeff",
    "Saldo" => 1500
];

$conta2 = [
    "nome" => "Mari",
    "Saldo" => 1000
];

//echo $conta1["nome"];


$contasCorrentes = [$conta1, $conta2];


for($i = 0; $i < count($contasCorrentes); $i++){
    echo $contasCorrentes[$i]["nome"] . PHP_EOL;
}