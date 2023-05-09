<?php

class Conta{

    public string $cpfTitular;
    public string $nomeTitular;
    public float $saldo;

    public function sacar(float $valorASacar){

        if($valorASacar > $this -> saldo){
            echo 'Saldo indisponível!';
        }else{

            $this -> saldo -= $valorASacar;

        }

    }

    
}

$primeiraConta = new Conta();


$primeiraConta -> saldo = 200;

echo $primeiraConta -> saldo . PHP_EOL;

$primeiraConta->sacar(20);
$primeiraConta->sacar(500);


var_dump($primeiraConta);