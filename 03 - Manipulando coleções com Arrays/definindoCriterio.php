<?php

$notas = [

    [
        'aluno' => 'Maria',
        'nota' => 10
    ],
    [
        'aluno' => 'Jeff',
        'nota' => 6
    ],
    [
        'aluno' => 'Carlos',
        'nota' => 9
    ],


];



function ordenaNotas(array $nota1, array $nota2) : int
{
    //crescente
    return $nota1['nota'] <=> $nota2['nota'];
    //decrescente
    //return $nota2['nota'] <=> $nota1['nota'];

}


usort($notas, 'ordenaNotas');

var_dump($notas);



