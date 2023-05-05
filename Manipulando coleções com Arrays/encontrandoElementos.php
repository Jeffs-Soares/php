<?php

$notas = [

    'Jeff'  => null,
    'Maria' => 2,
    'João'  => '10'
 ];


 var_dump(in_array(10, $notas, true));
 var_dump(in_array(10, $notas));


//Quem tirou 10?
//array_search busca a chave que possui o valor informado

echo array_search(10, $notas);


