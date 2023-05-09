<?php


class Veiculo
{

    private string $motor;
    private int $quantidadeRodas;
    private string $nomeVeiculo;


    public function __construct(string $motor, int $quantidadeRodas, string $nomeVeiculo)
    {

        $this->motor = $motor;
        $this->quantidadeRodas = $quantidadeRodas;
        $this->nomeVeiculo = $nomeVeiculo;
    }


    public function getMotor(): string
    {

        return $this->motor;
    }
    public function getQuantidadeRodas(): string
    {

        return $this->quantidadeRodas;
    }
    public function getNomeVeiculo(): string
    {

        return $this->nomeVeiculo;
    }


    
}
