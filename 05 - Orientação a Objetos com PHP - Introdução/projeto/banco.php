<?php

require_once "src/Conta.php";

$primeiraConta = new Conta();
$primeiraConta -> depositar(500);
$primeiraConta -> sacar(300);


$primeiraConta->setNome('Jeff');

echo $primeiraConta -> getSaldo();
echo $primeiraConta -> getNome();



