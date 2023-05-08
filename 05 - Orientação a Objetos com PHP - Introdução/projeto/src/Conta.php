<?php

class Conta{

    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;

    
}

$primeiraConta = new Conta();


$primeiraConta -> saldo = 200;

echo $primeiraConta -> saldo;


//var_dump($primeiraConta);