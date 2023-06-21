<?php

require_once "src/Conta.php";
require_once "src/Titular.php";
require_once "src/CPF.php";

$primeiraConta = new Conta( new Titular( new CPF('123,456,789-14'), 'Jeff'));
$primeiraConta -> depositar(500);
$primeiraConta -> sacar(300);

echo $primeiraConta -> getNome();

echo Conta::getNumContas();

var_dump($primeiraConta);