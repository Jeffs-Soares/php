<?php


$notas = [10,8,9,7];

//var_dump($notas);


//ordenar

$notasOrdenadas = $notas;

//A função sort espera uma referência, muito cuidado para não alterar
// de forma desnecessária a variável original;
sort($notasOrdenadas);

echo 'Desordenadas!  ';
var_dump($notas);

echo "<br>";
echo "<br>";
echo "<br>";

echo 'Ordenadas!   ';
var_dump($notasOrdenadas);

