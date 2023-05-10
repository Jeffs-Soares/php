<?php

require_once "src/Conta.php";
require_once "src/Endereco.php";
require_once "src/Titular.php";
require_once "src/CPF.php";
require_once "src/Pessoa.php";
require_once "src/Funcionario.php";


$func = new Funcionario('Jeff', new CPF('123.456.789-10'), 'Dev');

var_dump($func);


/* $primeiraConta = new Conta( new Titular( new CPF('123.456.789-14'), 'Jeff', new Endereco('Moc', 'João Alves', 'rua', '450A')));
$primeiraConta -> depositar(500);
$primeiraConta -> sacar(300); */

//echo $primeiraConta -> getNome();

//echo Conta::getNumContas();

/* var_dump($primeiraConta); */