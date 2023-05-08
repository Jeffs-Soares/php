<?php

$notas1 = [

    'Jeff'  => null,
    'Maria' => 2,
    'João'  => 10
 ];

 $notas2 = [

    'Maria' => 3,
    'João'  => 10
 ];

 //Retorna todos os elementos cujos valores de $notas1 que não estejam em $notas2

 var_dump(array_diff($notas1, $notas2));
 echo "<br>";
 var_dump(array_diff_key($notas1, $notas2));
 echo "<br>";
 var_dump(array_diff_assoc($notas1, $notas2));

