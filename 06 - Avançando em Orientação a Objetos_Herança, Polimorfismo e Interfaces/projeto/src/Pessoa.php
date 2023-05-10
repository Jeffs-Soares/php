<?php


class Pessoa
{
    protected $nome;
    private $cpf;

    public function __construct(string $nome, CPF $cpf)
    {
        $this -> validaNomeTitular($nome);
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

    protected function validaNomeTitular(string $nome):void{
        if(strlen($nome) < 4){
            echo "Nome muito pequeno";
            exit();
        }
    }

}