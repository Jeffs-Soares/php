<?php

/*
2. Entre com 10 números e armazene em um vetor.

Ao final o programa deverá mostrar:
- quantos negativos foram digitados;
- quantos positivos foram digitados;
- quantos pares e ímpares.

*/

$numbers = [2, 56, 78, -4, 0, -12, 26, 9, -88, 63];

    $countNegativos = 0;
    $countPositivos = 0;
    $countPares = 0;
    $countImpares = 0;


foreach($numbers as $value){
    
    echo $value;

    if( $value < 0){
        $countNegativos++;
    } if($value > 0){
        $countPositivos++;
    }

    if($value > 0 && $value % 2 == 0){
        $countPares++;
    } if($value > 0 && $value % 2 != 0){
        $countImpares++;
    }

}


echo
"
Negativos: $countNegativos
Positivos: $countPositivos
Pares: $countPares
Impares: $countImpares 

";
