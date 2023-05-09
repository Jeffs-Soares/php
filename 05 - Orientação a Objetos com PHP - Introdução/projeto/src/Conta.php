<?php

class Conta
{

    private Titular $titular;// Definir valores direto na instância do objeto não é comum
    private float $saldo;
    private static $numeroDeContas = 0;
    //private static $codigoBanco = 77;

    public function __construct(Titular $titular){

        $this -> titular = $titular;

        $this -> saldo = 0;
        self::$numeroDeContas++;
        

    }

    public function sacar(float $valorASacar): void
    {

        if ($valorASacar > $this->saldo) {
            echo 'Saldo indisponível!'. PHP_EOL;
            return;
        }

        $this->saldo -= $valorASacar;
    }

    public function depositar(float $valorADepositar): void
    {

        if ($valorADepositar <= 0) {
            echo "O valor precisa ser maior que 0!". PHP_EOL;
            return;
        }
        $this->saldo += $valorADepositar;
        echo "R$ $valorADepositar foi despositado com sucesso!". PHP_EOL;
    }

    public function transferir(float $valorATransferir, Conta $contaDestino): void
    {

        if ($valorATransferir > $this->saldo) {
            echo "Saldo indisponível" . PHP_EOL;
            return;
        }

        $this->sacar($valorATransferir);
        $contaDestino->depositar($valorATransferir);
    }

    public function getSaldo():float{
        return $this->saldo;
    }
   
    public function getNome():string{
        return $this -> titular -> getNome();
    }
   
    public function getCpfTitular():string{
        return $this -> titular -> getCpf();
    }
   

    public static function getNumContas():int{
        return self::$numeroDeContas;
    }
 
}
