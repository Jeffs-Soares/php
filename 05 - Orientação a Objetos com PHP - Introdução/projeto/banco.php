<?php

require_once "src/Conta.php";

$primeiraConta = new Conta('123.456.789-14', 'Jeff');
$primeiraConta -> depositar(500);
$primeiraConta -> sacar(300);

echo $primeiraConta -> getSaldo();
echo $primeiraConta -> getNome();