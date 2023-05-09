<?php

class Conta
{

    private string $cpfTitular;
    private string $nomeTitular; // Definir valores direto na instância do objeto não é comum
    private float $saldo;

    public function __construct(string $cpf, string $nome){

        $this -> cpfTitular = $cpf;
        $this -> validaNomeTitular($nome);
        $this -> nomeTitular = $nome;
        $this -> saldo = 0;

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
    
    public function getCpf():string{
        return $this->cpfTitular;
    }

    public function getNome():string{
        return $this->nomeTitular;
    }
    private function validaNomeTitular(string $nome):void{
        if(strlen($nome) < 4){
            echo "Nome muito pequeno";
            exit();
        }
    }
 
}
