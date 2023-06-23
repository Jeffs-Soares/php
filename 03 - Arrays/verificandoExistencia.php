<?php

$notas = [

   'Jeff' => null,
   'Maria' => 2
];


var_dump(array_key_exists('Jeff', $notas));
var_dump(isset($notas['Jeff']));

var_dump(array_key_exists('Maria', $notas));
var_dump(isset($notas['Maria']));




