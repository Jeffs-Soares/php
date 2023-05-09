<?php


class Titular{
    private CPF $cpf;
    private string $nome;

    public function __construct(CPF $cpf, string $nome){

        $this -> cpf = $cpf;
        $this -> validaNomeTitular($nome);
        $this -> nome = $nome;
    }
   

    public function getNome(): string
    {
        return $this->nome;
    }
    
    public function getCpf(): string
    {
        return $this-> cpf -> getCpf();
    }


    private function validaNomeTitular(string $nome):void{
        if(strlen($nome) < 4){
            echo "Nome muito pequeno";
            exit();
        }
    }

    

}