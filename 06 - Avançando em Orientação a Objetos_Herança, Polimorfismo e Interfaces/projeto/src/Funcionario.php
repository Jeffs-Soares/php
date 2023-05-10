<?php

require_once "Pessoa.php";

class Funcionario extends Pessoa
{

    private string $cargo;

    public function __construct(string $nome, CPF $cpf, string $cargo)
    {

        $this -> validaNomeTitular($nome);
        $this->nome = $nome;
        $this->cpf = $cpf;
        $this->cargo = $cargo;
 
    }

    public function getCargo():string{
        return $this->cargo;
    }

}
