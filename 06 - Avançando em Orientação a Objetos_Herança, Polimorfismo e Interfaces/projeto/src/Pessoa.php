<?php


class Pessoa
{
    public $nome;
    public $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this->nome = $nome;
        $this->cpf = $cpf;
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getCpf(): string
    {
        return $this->cpf->getCpf();
    }

    public function validaNomeTitular(string $nome):void{
        if(strlen($nome) < 4){
            echo "Nome muito pequeno";
            exit();
        }
    }

}